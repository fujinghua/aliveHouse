<?php

namespace app\common\components\rbac;

use \think\Config;
use think\Exception;
use \think\Request;
use \think\Log;
use app\manage\model\Identity;
use app\common\components\rbac\AuthManager;

class AccessControl
{
    /**
     * @var \app\manage\model\Identity User for check access.
     */
    private $_user;

    /**
     * @var \app\common\components\rbac\AuthManager AuthManager for check access.
     */
    private $_authManager;

    /**
     * @var array List of action that not need to check access.
     */
    public $allowActions = [];

    /**
     * Get user
     * @return \app\manage\model\Identity
     */
    public function getUser($userid = 0)
    {
        if (!$this->_user instanceof Identity) {
            $this->_user = Identity::getIdentity();
            if (!$this->_user instanceof Identity) {
                $this->_user = Identity::getIdentityById($userid);
            }
        }
        return $this->_user;
    }

    /**
     * Get AuthManager
     * @return \app\common\components\rbac\AuthManager
     */
    public function getManager()
    {
        if (!$this->_authManager instanceof AuthManager) {
            $this->_authManager = AuthManager::getInstance();
        }
        return $this->_authManager;
    }

    /**
     * Set user
     * @param Identity|string $user
     */
    public function setUser($user)
    {
        $this->_user = $user;
    }

    /**
     * check user
     * @param Identity|string $userid
     * @param string $action
     * @param bool $log
     * @return bool
     */
    public function check($userid = '',$action = '',$log = true)
    {
        $ret = false;

        $user = $this->getUser($userid);

        $result = $this->beforeAction($userid,$action);

        if (!$result){
            $this->denyAccess($user);
        }
        if ($log){
            $this->afterAction($action,$result);
        }
        return $ret;
    }

    /**
     * @param string $userid
     * @param string $action
     * @return bool
     */
    protected function beforeAction($userid = '' , $action = '')
    {
        $actionId = $action ? $action :$this->getActionUrl();
        $user = $this->getUser();
        if ($this->can($userid,'/' . $actionId)) {
            return true;
        }

        $obj = $action->controller;
        $permissionName = '/' . ltrim($obj->getUniqueId() . '/*', '/');
//        $fullRoute = '/' . ltrim($obj->getRoute(), '/');
        do {
            if ($user->can($permissionName)) {
                return true;
            }
            $obj = $obj->module;
        } while ($obj !== null);

        if (Yii::$app->authManager->checkAccess($user->id,$permissionName)){
            return true;
        }elseif(Yii::$app->defaultRoute . '/' . Yii::$app->controller->defaultAction == $actionId){
            return true;
        }

        $this->denyAccess($user);
    }

    /**
     * @inheritdoc
     */
    public function afterAction($action, $result) {
        $result = $result ? '允许' : '拒绝';
        Log::record($action.$result);
    }

    /**
     * Denies the access of the user.
     * The default implementation will redirect the user to the login page if he is a guest;
     * if the user is already logged, a 403 HTTP exception will be thrown.
     * @param  Identity $user
     * @throws Exception if the user is already logged in.
     */
    protected function denyAccess($user)
    {
        if ($user->getIsGuest()) {
            $user->loginRequired();
        } else {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));
        }
    }

    /**
     * @inheritdoc
     */
    protected function isActive($action)
    {
        $uniqueId = $action->getUniqueId();
        if ($uniqueId === Yii::$app->getErrorHandler()->errorAction) {
            return false;
        }

        $user = $this->getUser();
        if ($user->getIsGuest() && is_array($user->loginUrl) && isset($user->loginUrl[0]) && $uniqueId === trim($user->loginUrl[0], '/')) {
            return false;
        }

        if ($this->owner instanceof Module) {
            // convert action uniqueId into an ID relative to the module
            $mid = $this->owner->getUniqueId();
            $id = $uniqueId;
            if ($mid !== '' && strpos($id, $mid . '/') === 0) {
                $id = substr($id, strlen($mid) + 1);
            }
        } else {
            $id = $action->id;
        }

        foreach ($this->allowActions as $route) {
            if (substr($route, -1) === '*') {
                $route = rtrim($route, "*");
                if ($route === '' || strpos($id, $route) === 0) {
                    return false;
                }
            } else {
                if ($id === $route) {
                    return false;
                }
            }
        }

        if ($action->controller->hasMethod('allowAction') && in_array($action->id, $action->controller->allowAction())) {
            return false;
        }

        return true;
    }


    /**
     * @description 当前请求路由
     * @return string
     */
    protected function getActionUrl()
    {
        // 获取当前访问路由
        return strtolower(Request::instance()->module() . '/' . Request::instance()->controller() . '/' . Request::instance()->action());
    }


    /**
     * @description 当前请求路由
     * @param $userid
     * @param $route
     * @return bool
     */
    protected function can($userid,$route)
    {
        $ret = false;
        $manager = $this->getManager();
        $result = $manager->getPermissionsByUser($userid);

        var_dump($result);


        if ($result){
            $ret = true;
        }
        return $ret;
    }
}