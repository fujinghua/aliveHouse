<?php
namespace app\vr\controller;


use app\common\controller\VrController;
use app\home\model\User;

/**
 * 用户控制器 因为不需要检查登陆状态所以继承基础控制器 BaseController, 而不是继承ApiController
 * @author Sir Fu
 */
class UserController extends VrController
{

    /**
     * 登录不需要检查是否登录
     * @return bool
     */
    public function isUser(){
        return true;
    }

    /**
     * @description Login Home Page
     * @return \think\response\View
     */
    public function indexAction()
    {
        // 临时关闭当前模板的布局功能
        $this->view->engine->layout(false);
        return view('login', ['meta_title' => '会员登录']);
    }

    /**
     * @description back login
     * @author Sir Fu
     */
    public function loginAction()
    {
        if ($this->getRequest()->isAjax() && $this->getRequest()->isPost()) {
            $username = trim($this->getRequest()->request('username'));
            $password = $this->getRequest()->request('password');

//        // 图片验证码校验
//        if (!$this->checkVerify(input('post.verify')) && 'localhost' !== request()->host() && '127.0.0.1' !== request()->host()) {
//            $this->error('验证码输入错误');
//        }

            // 调用当前模型对应的User验证器类进行数据验证
            $data = [
                'username' => $username,
                'password' => $password,
            ];

            $validate = User::getValidate();
            $validate->scene('loginAjax');

            if ($validate->check($data)) {

                //注意，在模型数据操作的情况下，验证字段的方式，直接传入对象即可验证
                $identity = new User();
                $identity->identity = $this->identity;
                $identity->username = $username;
                $identity->password = $password;
                $res = $identity->login();
                if ($res instanceof User) {

//                // 验证管理员表里是否有该用户
//                $account_object = new Access();
//                $where['uid']   = $identity->id;
//                $account_info   = $account_object->where($where)->find();
//                if (!$account_info) {
//                if (!$account_info) {
////                    $this->error('该用户没有管理员权限' . $account_object->getError());
//                }

//                // 跳转
//                if (0 < $account_info['uid'] && $account_info['uid'] === $identity->id) {
//                    $this->success('登录成功！', url('Back/index/index'));
//                } else {
//                    $this->logoutAction();
//                }
                    return json(['status' => '1', 'info' => '登录成功', 'url' => url($this->getHomeUrl())]);
                } else {
                    return json(['status' => '0', 'info' => $res]);
                }
            } else {
                return json(['status' => '0', 'info' => $validate->getError()]);
            }
        }

        if ($this->isGuest()) {
            $this->goHome();
        }

        // 不适用布局功能
        $this->useLayoutMain();
        return view('login', ['meta_title' => '会员登录']);
    }


    /**
     * @description 新增
     * @param $id
     * @return string
     */
    public function resetAction($id = 0)
    {
        if (empty($id)) {
            throw new \think\Exception\HttpException(404, '该账号不存在', null, ['code' => '404', 'msg' => '该账号不存在', 'info' => '该账号不存在'], '404');
        }
        $find = false;

        if ($model = User::load()->where(['id' => $id])->find()) {
            $find = true;
        } else if ($model = User::findByUsername($id)) {
            $find = true;
        } else if ($model = User::findByPhone($id)) {
            $find = true;
        } else if ($model = User::findByPasswordResetToken($id)) {
            $find = true;
        }

        if (!$find) {
            throw new \think\Exception\HttpException(404, '该账号不存在', null, ['code' => '404', 'msg' => '该账号不存在', 'info' => '该账号不存在'], '404');
        }

        $request = $this->getRequest();
        if ($request->isPost() || $request->isAjax()) {
            // 调用当前模型对应的User验证器类进行数据验证
            $data = [];
            $data['oldPassword'] = $request->post('newPassword');
            $data['password'] = $request->post('password');
            $data['rePassword'] = $request->post('rePassword');
            $validate = User::getValidate();
            $validate->scene('reset');
            if ($validate->check($data)) { //注意，在模型数据操作的情况下，验证字段的方式，直接传入对象即可验证
                $res = User::load()->resetUser($id, $data);
                if ($res) {
                    $this->success('更新成功', url('reset', ['id' => $id]), [], 1);
                } else {
                    $this->error('原密码不正确', url('reset', ['id' => $id]), [], 1);
                }
            } else {
                $this->error($validate->getError(), url('reset', ['id' => $id]), [], 1);
            }
        }

        return view('user/reset', ['meta_title' => '修改密码', 'model' => $model]);
    }


    /**
     * @description Logout action.
     * @return string
     */
    public function logoutAction()
    {
        User::logout();
        $this->success('退出成功！', $this->getLoginUrl(), [], 1);
    }

    public function registerAction()
    {
        $identity = new User();
        $request = $this->getRequest();
        $token = $request->request('__token__');

        if ($request->isPost() && $token) {
            // 调用当前模型对应的User验证器类进行数据验证
            $data = [];
            $data['department_id'] = $request->post('department_id');
            $data['username'] = $request->post('username');
            $data['phone'] = $request->post('phone');
            $data['password'] = $request->post('password');
            $data['rePassword'] = $request->post('rePassword');
            $validate = User::getValidate();
            $validate->scene('register');
            if ($validate->check($data)) { //注意，在模型数据操作的情况下，验证字段的方式，直接传入对象即可验证
                $res = $identity->signUp($data);
                if ($res instanceof User) {
                    $this->success('注册成功', 'login');
                } else {
                    $this->error($res, 'register', '', 1);
                }
            } else {
                $this->error($validate->getError(), 'register', '', 1);
            }
        }
        return view('user/create', ['meta_title' => '会员注册']);
    }

    /**
     * @description 图片验证码生成，用于登录和注册
     * @param $vid
     * @author Sir Fu
     */
    public function verifyAction($vid = 1)
    {
        $verify = new Captcha();
        $verify->entry($vid);
    }

    /**
     * @description 检测验证码
     * @param  integer $code 验证码ID
     * @param $vid
     * @return boolean 检测结果
     */
    protected function checkVerify($code, $vid = 1)
    {
        $verify = new Captcha();
        return $verify->check($code, $vid);
    }

}
