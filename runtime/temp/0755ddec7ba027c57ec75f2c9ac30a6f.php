<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\upupw\aliveHouse\public/../application/home\view\index\index.html";i:1495010242;s:69:"D:\upupw\aliveHouse\public/../application/home\view\layouts\main.html";i:1494989626;}*/ ?>
<!-- 右侧主体内容开启 -->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-transform">
	<meta name="renderer" content="webkit">
	<meta name="mobile-agent" content="format=html5;url=http://m.alivehouse.com/">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title> [ Home ] </title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="/aliveHouse/web/favicon.png" type="image/x-icon">
	<link rel="canonical" href="/home/index/index.html">

	<!-- Load base CSS -->
	<link type="text/css" href="/aliveHouse/web/layer-base.css" rel="stylesheet">
	<link type="text/css" href="/aliveHouse/web/fkTheme.min.css" rel="stylesheet" id="jzThemeFrame">
	<link type="text/css" href="/aliveHouse/web/fkModule.min.css" rel="stylesheet" id="jzModule2_1">
	<link type="text/css" href="/aliveHouse/web/searchBoxStyle1.min.css" rel="stylesheet">
	<link type="text/css" href="/aliveHouse/web/newSearchBoxStyle.min.css" rel="stylesheet">
	<link type="text/css" href="/aliveHouse/web/bannerAnimation.min.css" rel="stylesheet" >
	<link type="text/css" href="/aliveHouse/web/jzcusstyle.css" rel="stylesheet">

	<!-- This page CSS -->
	<link type="text/css" href="/aliveHouse/web/floatBtn1.min.css" rel="stylesheet">
	<link type="text/css" href="/aliveHouse/web/poshytipAndmCustomScrollbar.min.css" rel="stylesheet">

	<!-- Load base JS -->
	<!--<script src="/aliveHouse/web/imageEffect.min.js"></script>-->
	<!--<script src="/aliveHouse/web/photoSlide.min.js"></script>-->
	<script type="text/javascript">
        var _cid = 13775917;
	</script>

	<!-- Define base CSS -->
	<style id="stylemodule"></style>
	<style id="styleWebSite" type="text/css">
		#memberBar{width:1200px;}
		#webTop{width:1200px;}
		#absTopForms{width:1200px;}
		.webNavDefault{width:1200px;}
		#webHeader{width:1200px;}
		#absForms{width:1200px;}
		div#webContainer{width:1200px;}
		#absBottomForms{width:1200px;}
		#webFooter{width:1200px;}
		div.webNav .navMainContent{width:1200px;}
		div.nav .navMainContent{width:1200px;}
		.fullmeasureContent{width:1200px;}
		#fk-webHeaderZone {width:1200px;margin-left:-600.0px;}
		#fk-webFooterZone {width:1200px;margin-left:-600.0px;}
		#fk-webBannerZone {width:1200px;margin-left:-600.0px;}
		#webBanner{width:100%;}
	</style>
	<style id="styleTitle" type="text/css"></style>

	<!-- Define base JS -->
	<script type="text/javascript">
        (function(FUN,undefined){var list=[];FUN.run=function(){if(arguments.length<1){throw new Error("jzUtils.run 参数错误");return}var name=arguments[0].name,callMethod=arguments[0].callMethod||false,prompt=arguments[0].prompt||false,promptMsg=arguments[0].promptMsg||"功能还在加载中，请稍候",base=arguments[0].base||(window.Fai&&Fai.top.Site)||top.Site||window,args=Array.prototype.slice.call(arguments),funcArgs=args.slice(1),callbackFunc={},result;result=checkMethod(name,base);if(result.success){callMethod=false;try{result.func.apply(result.func,funcArgs)}catch(e){console&&console.log&&console.log("错误:name="+e.name+"; message="+e.message)}}else{if(prompt){window.Fai&&Fai.ing(promptMsg,true)}}if(callMethod){callbackFunc.name=name;callbackFunc.base=base;callbackFunc.args=funcArgs;list.push(callbackFunc)}};FUN.trigger=function(option){if(typeof option!=="object"){throw new Error("jzUtils.trigger 参数错误");return}var funcName=option.name||"",base=option.base||(window.Fai&&Fai.top.Site)||top.Site||window,newList=[],result,func,i,param;if(funcName.length<1){return}for(i=0;i<list.length;i++){param=list[i];if(param.name==funcName){result=checkMethod(funcName,base);if(result.success){try{result.func.apply(result.func,param.args)}catch(e){console&&console.log&&console.log("错误:name="+e.name+"; message="+e.message)}}}else{newList.push(param)}}list=newList};function checkMethod(funcName,base){var methodList=funcName.split("."),readyFunc=base,result={"success":true,"func":function(){}},methodName,i;for(i=0;i<methodList.length;i++){methodName=methodList[i];if(methodName in readyFunc){readyFunc=readyFunc[methodName]}else{result.success=false;return result}}result.func=readyFunc;return result}})(window.jzUtils||(window.jzUtils={}))
        var _faiAjax = function(){
            //for regexp
            var r = /\?/;
            var _o = {
                type:"get",
                url:"",
                data:"",
                error:function(){},
                success:function(){}
            };
            var _sendRequest=function(o) {
                var xmlhttp = null;
                //init option code
                o.type = o.type || _o.type;
                o.url = o.url || _o.url;
                o.data = o.data || _o.data;
                o.error = o.error || _o.error;
                o.success = o.success || _o.success;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }else{
                    // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                //the instructions param takes the form of an eval statement
                if(o.type != "post") {
                    o.url += ( this.r.test( o.url ) ? "&" : "?" ) + o.data;
                    xmlhttp.open("GET", o.url, true);
                    xmlhttp.onreadystatechange=function() {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                            o.success( xmlhttp.responseText );
                        }else if( o.error ){
                            o.error();
                        }
                    }
                    xmlhttp.send();
                } else {
                    xmlhttp.open("POST", o.url, true);
                    //Send the proper header information along with the request
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
                    xmlhttp.onreadystatechange=function() {
                        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                            o.success( xmlhttp.responseText );
                        }else{
                            o.error();
                        }
                    }
                    xmlhttp.send(o.data);
                }
            }
            return {
                ajax:function(option){
                    try {
                        //此次调用的错误不让抛出给window。防止函数重入
                        _sendRequest(option);
                    }catch(e){
                        //alert(e);
                    }
                }
            };
        }();
	</script>

</head>
<body class="g_body g_locale2052 g_cusSiteWidth">

	<div id="g_main" class="g_main g_col2 " style="width: 1903px;">

		<div id="web" class="g_web ">

			<table class="webTopTable" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td align="center">
						<div id="webTop" class="webTop">
							<div id="corpTitle" class="corpTitle corpTitle2" fontpatterntitle="false" style="top:42px;left:12px;;" _linktype="0" onpaste="Fai.top.Site.corpTitleFormatPasteDatacorpTitle();">
								<div class="newPrimaryTitle">
									<b>
										<font color="#1e50ae" style="color: rgb(30, 80, 174);">
											<font style="color: rgba(255, 101, 55, 1);">Alive</font>&nbsp;
										</font>
										<font color="#cccccc" style="color: rgba(204, 204, 204, 1);">House</font>
									</b>
								</div>
							</div>
						</div>
					</td>
				</tr>
				</tbody>
			</table>

			<table class="absTopTable" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td align="center">
						<div id="absTopForms" class="forms sideForms absForms">
							<div style="position:absolute;"></div><!-- for ie6 -->

						</div>
					</td>
				</tr>
				</tbody>
			</table>

			<table class="webNavTable" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td align="center">
						<div id="webNav" class="webNav webNavDefault">
							<div id="nav" class="nav nav2 fixedNavPos ">
								<div class="navMainContent">
									<table class="navTop" cellpadding="0" cellspacing="0">
										<tbody>
										<tr>
											<td class="navTopLeft"></td>
											<td class="navTopCenter"></td>
											<td class="navTopRight"></td>
										</tr>
										</tbody>
									</table>
									<table class="navContent" cellpadding="0" cellspacing="0">
										<tbody>
										<tr>
											<td class="navLeft"></td>
											<td class="navCenterContent" id="navCenterContent" valign="top" align="left">
												<div id="navCenter" class="navCenter" style="width: 550px;">
													<div class="itemPrev" style="display: none;"></div>
													<div class="itemContainer">
														<table title="" class="item itemCol2 itemIndex1" cellpadding="0" cellspacing="0" colid="2" id="nav2" onclick="window.open(&quot;/&quot;, &quot;_self&quot;)" _jump="window.open(&quot;/&quot;, &quot;_self&quot;)">
															<tbody>
															<tr>
																<td class="itemLeft"></td>
																<td class="itemCenter">
																	<a hidefocus="true" style="outline:none;" href="/home/index/index.html" target="_self" onclick="return false;"><span class="itemName0">Home</span></a>
																</td>
																<td class="itemRight"></td>
															</tr>
															</tbody>
														</table>

														<div class="itemSep"></div>
														<table title="" class="item itemCol109 itemIndex2" cellpadding="0" cellspacing="0" colid="109" id="nav109" onclick="window.open(&quot;/home/rent/rent.html&quot;, &quot;_self&quot;)" _jump="window.open(&quot;/home/rent/rent.html&quot;, &quot;_self&quot;)">
															<tbody>
															<tr>
																<td class="itemLeft"></td>
																<td class="itemCenter">
																	<a hidefocus="true" style="outline:none;" href="/home/rent/rent.html" target="_self" onclick="return false;"><span class="itemName0">Rent</span></a>
																</td>
																<td class="itemRight"></td>
															</tr>
															</tbody>
														</table>

														<div class="itemSep"></div>
														<table title="" class="item itemCol106 itemIndex3" cellpadding="0" cellspacing="0" colid="106" id="nav106" onclick="window.open(&quot;/home/house/secondhandhouse.html&quot;, &quot;_self&quot;)" _jump="window.open(&quot;/home/house/secondhandhouse.html&quot;, &quot;_self&quot;)">
															<tbody>
															<tr>
																<td class="itemLeft"></td>
																<td class="itemCenter">
																	<a hidefocus="true" style="outline:none;" href="/home/house/secondhandhouse.html" target="_self" onclick="return false;"><span class="itemName0">Second-House</span></a>
																</td>
																<td class="itemRight"></td>
															</tr>
															</tbody>
														</table>

														<div class="itemSep"></div>
														<table title="" class="item itemCol105 itemIndex4" cellpadding="0" cellspacing="0" colid="105" id="nav105" onclick="window.open(&quot;/home/house/newhouse.html&quot;, &quot;_self&quot;)" _jump="window.open(&quot;/home/house/newhouse.html&quot;, &quot;_self&quot;)">
															<tbody>
															<tr>
																<td class="itemLeft"></td>
																<td class="itemCenter">
																	<a hidefocus="true" style="outline:none;" href="/home/house/newhouse.html" target="_self" onclick="return false;"><span class="itemName0">New-House</span></a>
																</td>
																<td class="itemRight"></td>
															</tr>
															</tbody>
														</table>

														<div class="itemSep"></div>
														<table title="" class="item itemCol108 itemIndex5 itemSelected itemSelectedIndex5 itemPopupSelected" cellpadding="0" cellspacing="0" colid="108" id="nav108" onclick="window.open(&quot;/home/build/build.html&quot;, &quot;_self&quot;)" _jump="window.open(&quot;/home/build/build.html&quot;, &quot;_self&quot;)">
															<tbody>
															<tr>
																<td class="itemLeft"></td>
																<td class="itemCenter">
																	<a hidefocus="true" style="outline:none;" href="/home/build/build.html" target="_self" onclick="return false;"><span class="itemName0">Build</span></a>
																</td>
																<td class="itemRight"></td>
															</tr>
															</tbody>
														</table>
													</div>
													<div class="itemNext" style="display: none;"></div>
												</div>
											</td>
											<td class="navRight"></td>
										</tr>
										</tbody>
									</table>
									<table class="navBottom" cellpadding="0" cellspacing="0">
										<tbody>
										<tr>
											<td class="navBottomLeft"></td>
											<td class="navBottomCenter"></td>
											<td class="navBottomRight"></td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<a href="/home/contact/contact.html" style="display:none;">Contact</a>
						</div>
					</td>
				</tr>
				</tbody>
			</table>

			<table class="webHeaderTable" cellpadding="0" cellspacing="0" id="webHeaderTable">
				<tbody>
				<tr>
					<td align="center" class="webHeaderTd fk-moduleZoneWrap">
						<div id="fk-webHeaderZone" class="J_moduleZone fk-webHeaderZone fk-moduleZone forms sideForms">
							<div class="fk-moduleZoneBg"></div>
						</div>
						<div id="webHeader" class="webHeader">
							<table class="headerTable" cellpadding="0" cellspacing="0">
								<tbody><tr>
									<td class="headerCusLeft"></td>
									<td class="headerCusMiddle" align="center" valign="top">
										<div class="headerNav">
										</div>
									</td>
									<td class="headerCusRight"></td>
								</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				</tbody>
			</table>

			<table class="webBannerTable J_webBannerTable" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td align="center" class="fk-moduleZoneWrap">

						<div id="fk-webBannerZone" class="J_moduleZone fk-webBannerZone fk-moduleZone forms sideForms">
							<div class="fk-moduleZoneBg"></div>

						</div>
						<div id="webBanner" class="webBanner">
							<table class="bannerTable" cellpadding="0" cellspacing="0">
								<tbody><tr>
									<td class="bannerLeft"></td>
									<td class="bannerCenter" align="center" valign="top">
										<div class="bannerTop"></div>
										<div id="banner" class="banner extBanner" style="background: none; height: 780px; overflow: hidden; display: block;" normalheight="780" defaultwidth="0">



											<div class="imageSwitchShowName photoSwitchBg" style="position: absolute; display: none; z-index: 2; width: 1903px; height: 30px; line-height: 30px; top: 780px; left: 0px;"><span class="spanHiddenName spanShowName" style="margin-left: 10px;"></span><span class="spanHiddenName " style="margin-left: 10px;"></span></div><div></div><div class="switchGroup billboard billboard2" style="width: 1903px; position: relative; height: 780px; overflow: hidden; margin: 0px auto;"><div class="billboard_item arrowImg billboardItem_2 billboardAnim billboardItem_2_start" style="width: 1903px; height: 780px; animation-duration: 1500ms; display: block;">
											<a class="J_bannerItem" hidefocus="true" title="" href="javascript:;" target="" style="width: 1903px; height: 780px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; display: block; outline: none; margin: 0px auto; position: relative; z-index: 1; background-size: cover; background-image: url(&quot;http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY.jpg&quot;);" onclick="return false;">
											</a>
										</div>
											<div class="billboard_item arrowImg billboardItem_2 billboardAnim" style="width: 1903px; height: 780px; animation-duration: 1500ms; display: none;">
												<a class="J_bannerItem" hidefocus="true" title="" href="javascript:;" target="" style="width: 1903px; height: 780px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; display: block; outline: none; margin: 0px auto; position: relative; z-index: 1; background-size: cover; background-image: url(&quot;http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY.jpg&quot;);" onclick="return false;">
												</a>
											</div>
										</div><a class="imageSwitchBtn_arrow arrow_prev" style="position: absolute; z-index: 3; left: 0px; top: 50%; margin-top: -35.5px;"></a><a class="imageSwitchBtn_arrow arrow_next" style="position: absolute; z-index: 3; right: 0px; top: 50%; margin-top: -35.5px;"></a></div>

									</td>
									<td class="bannerRight"></td>
								</tr>
								</tbody></table>
						</div>
					</td>
				</tr>
				</tbody></table>

			<table class="absMiddleTable" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td align="center">
						<div id="absForms" class="forms sideForms absForms">
							<div id="module416" bannertitle="浮动按钮" _indexclass="formIndex1" _modulestyle="81" _moduleid="416" class="form form416 formIndex1 formStyle81" title="" style="position: absolute; top: 614px; left: 213px; width: 72px; border: 10px solid transparent; margin-top: -10px; margin-left: -10px; height: 28px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent416"><div class="J_floatBtnBox floatBtnBox floatBtnStyle103 "><a id="module416FlBtn" href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=7675ad030694d25e604f3b2c0f2732d2a02d519b44f42745&amp;tttt=1" target="_blank" class="middle floatBtn">预约看房</a></div></div>
							</div>

							<div id="module420" bannertitle="浮动按钮" _indexclass="formIndex2" _modulestyle="81" _moduleid="420" class="form form420 formIndex2 formStyle81" title="" style="position: absolute; top: 614px; left: 518px; width: 72px; border: 10px solid transparent; margin-top: -10px; margin-left: -10px; height: 28px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent420"><div class="J_floatBtnBox floatBtnBox floatBtnStyle103 "><a id="module420FlBtn" href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=7675ad030694d25e604f3b2c0f2732d2a02d519b44f42745&amp;tttt=1" target="_blank" class="middle floatBtn">预约看房</a></div></div>
							</div>

							<div id="module425" bannertitle="浮动按钮" _indexclass="formIndex3" _modulestyle="81" _moduleid="425" class="form form425 formIndex3 formStyle81" title="" style="position: absolute; top: 614px; left: 818px; width: 72px; border: 10px solid transparent; margin-top: -10px; margin-left: -10px; height: 28px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent425"><div class="J_floatBtnBox floatBtnBox floatBtnStyle103 "><a id="module425FlBtn" href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=7675ad030694d25e604f3b2c0f2732d2a02d519b44f42745&amp;tttt=1" target="_blank" class="middle floatBtn">预约看房</a></div></div>
							</div>

							<div id="module426" bannertitle="浮动按钮" _indexclass="formIndex4" _modulestyle="81" _moduleid="426" class="form form426 formIndex4 formStyle81" title="" style="position: absolute; top: 614px; left: 1125px; width: 72px; border: 10px solid transparent; margin-top: -10px; margin-left: -10px; height: 28px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent426"><div class="J_floatBtnBox floatBtnBox floatBtnStyle103 "><a id="module426FlBtn" href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=7675ad030694d25e604f3b2c0f2732d2a02d519b44f42745&amp;tttt=1" target="_blank" class="middle floatBtn">预约看房</a></div></div>
							</div>

							<div id="module436" _indexclass="formIndex5" _modulestyle="1" _moduleid="436" class="form form436 formIndex5 formStyle1" title="" style="position:absolute;top:247px;left:1031px;width:163px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
								<table class="formTop formTop436" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
								<table class=" formMiddle formMiddle436" style="" cellpadding="0" cellspacing="0"><tbody><tr>
									<td class="formMiddleLeft formMiddleLeft436"></td>
									<td class="formMiddleCenter formMiddleCenter436 " valign="top">
										<div class="formMiddleContent formMiddleContent436 fk-formContentOtherPadding" tabstyle="0">
											<div class="richContent richContent0"><p>100%真实房源 无虚假</p></div></div>
									</td>
									<td class="formMiddleRight formMiddleRight436"></td>
								</tr></tbody></table>
								<table class="formBottom formBottom436" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left436"></td><td class="center center436"></td><td class="right right436"></td></tr></tbody></table>
								<div class="clearfloat clearfloat436"></div>
							</div>

							<div id="module440" bannertitle="浮动按钮" _indexclass="formIndex6" _modulestyle="81" _moduleid="440" class="form form440 formIndex6 formStyle81" title="" style="position: absolute; top: 1988px; left: 961px; width: 239px; border: 10px solid transparent; margin-top: -10px; margin-left: -10px; height: 55px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent440"><div class="J_floatBtnBox floatBtnBox floatBtnStyle103 "><a id="module440FlBtn" href="javascript:;" target="_self" class="middle floatBtn">了解更多</a></div></div>
							</div>

							<div id="module410" _indexclass="formIndex7" _modulestyle="1" _moduleid="410" class="form form410 formIndex7 formStyle1" title="" style="position:absolute;top:70px;left:326px;width:86px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
								<table class="formTop formTop410" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
								<table class=" formMiddle formMiddle410" style="" cellpadding="0" cellspacing="0"><tbody><tr>
									<td class="formMiddleLeft formMiddleLeft410"></td>
									<td class="formMiddleCenter formMiddleCenter410 " valign="top">
										<div class="formMiddleContent formMiddleContent410 fk-formContentOtherPadding" tabstyle="0">
											<div class="richContent richContent0"><p><span style="color:#FE8300;font-family:微软雅黑;font-size:28px;line-height:22px;">租房</span></p></div></div>
									</td>
									<td class="formMiddleRight formMiddleRight410"></td>
								</tr></tbody></table>
								<table class="formBottom formBottom410" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left410"></td><td class="center center410"></td><td class="right right410"></td></tr></tbody></table>
								<div class="clearfloat clearfloat410"></div>
							</div>

							<div id="module411" _indexclass="formIndex8" _modulestyle="1" _moduleid="411" class="form form411 formIndex8 formStyle1" title="" style="position:absolute;top:70px;left:633px;width:83px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
								<table class="formTop formTop411" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
								<table class=" formMiddle formMiddle411" style="" cellpadding="0" cellspacing="0"><tbody><tr>
									<td class="formMiddleLeft formMiddleLeft411"></td>
									<td class="formMiddleCenter formMiddleCenter411 " valign="top">
										<div class="formMiddleContent formMiddleContent411 fk-formContentOtherPadding" tabstyle="0">
											<div class="richContent richContent0"><p><span style="color:#FE8300;font-family:微软雅黑;font-size:28px;line-height:22px;">卖房</span></p></div></div>
									</td>
									<td class="formMiddleRight formMiddleRight411"></td>
								</tr></tbody></table>
								<table class="formBottom formBottom411" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left411"></td><td class="center center411"></td><td class="right right411"></td></tr></tbody></table>
								<div class="clearfloat clearfloat411"></div>
							</div>

							<div id="module413" _indexclass="formIndex9" _modulestyle="1" _moduleid="413" class="form form413 formIndex9 formStyle1" title="" style="position:absolute;top:70px;left:932px;width:108px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
								<table class="formTop formTop413" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
								<table class=" formMiddle formMiddle413" style="" cellpadding="0" cellspacing="0"><tbody><tr>
									<td class="formMiddleLeft formMiddleLeft413"></td>
									<td class="formMiddleCenter formMiddleCenter413 " valign="top">
										<div class="formMiddleContent formMiddleContent413 fk-formContentOtherPadding" tabstyle="0">
											<div class="richContent richContent0"><p><span style="color:#FE8300;font-family:微软雅黑;font-size:28px;line-height:22px;">经纪人</span></p></div></div>
									</td>
									<td class="formMiddleRight formMiddleRight413"></td>
								</tr></tbody></table>
								<table class="formBottom formBottom413" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left413"></td><td class="center center413"></td><td class="right right413"></td></tr></tbody></table>
								<div class="clearfloat clearfloat413"></div>
							</div>

							<div id="module405" _indexclass="formIndex10" _modulestyle="1" _moduleid="405" class="form form405 formIndex10 formStyle1" title="" style="position: absolute; top: 70px; left: 29px; width: 81px; height: 38px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<table class="formTop formTop405" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
								<table class=" formMiddle formMiddle405" style="height:38px; " cellpadding="0" cellspacing="0"><tbody><tr>
									<td class="formMiddleLeft formMiddleLeft405"></td>
									<td class="formMiddleCenter formMiddleCenter405 " valign="top">
										<div class="formMiddleContent formMiddleContent405 fk-formContentOtherPadding" tabstyle="0" style="height: 28px; overflow-y: hidden;">
											<div class="richContent richContent0"><p style="clear:both;"><span style="color:#FE8300;font-family:微软雅黑;font-size:28px;line-height:22px;">买房</span></p></div></div>
									</td>
									<td class="formMiddleRight formMiddleRight405"></td>
								</tr></tbody></table>
								<table class="formBottom formBottom405" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left405"></td><td class="center center405"></td><td class="right right405"></td></tr></tbody></table>
								<div class="clearfloat clearfloat405"></div>
							</div>


						</div>
					</td>
				</tr>
				</tbody></table>

			<div id="fullmeasureTopForms" class="fullmeasureContainer forms fk-fullmeasureForms fullmeasureForms fullmeasureTopForms" style="display:none">
				<wbr style="display:none;">
			</div>

			<table id="webContainerTable" class="webContainerTable" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td align="center">
						<div id="webContainer" class="webContainer">
							<div id="container" class="container">
								<table class="containerTop" cellpadding="0" cellspacing="0">
									<tbody><tr valign="top">
										<td class="left"></td>
										<td class="center"></td>
										<td class="right"></td>
									</tr>
									</tbody></table>

								<table class="containerMiddle" cellpadding="0" cellspacing="0">
									<tbody><tr valign="top">
										<td id="containerMiddleLeft" class="containerMiddleLeft">


										</td>

										<td class="containerMiddleCenter">
											<div id="containerMiddleCenterTop" class="containerMiddleCenterTop">

											</div>

											<div id="containerForms" class="containerForms">
												<div id="topForms" class="column forms mainForms topForms" style="display:none">

												</div>

												<table class="containerFormsMiddle" cellpadding="0" cellspacing="0">
													<tbody><tr>
														<td valign="top" id="containerFormsLeft" class="containerFormsLeft" style="display:none">
															<div class="containerFormsLeftTop">
															</div>
															<div id="leftForms" class="column forms sideForms leftForms">

															</div>
															<div class="containerFormsLeftBottom">
															</div>
														</td>

														<td valign="top" id="containerFormsCenter" class="containerFormsCenter">

															<div id="centerTopForms" class="column forms mainForms centerTopForms">
																<div id="module317" _indexclass="formIndex1" _modulestyle="35" _moduleid="317" class="form form317 formIndex1 formStyle35 layoutModule  formStyle35_2  fk-formCol " title="" style="height: 149px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
																	<table class="formTop formTop317" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
																	<table class=" formMiddle formMiddle317" style="height:149px; " cellpadding="0" cellspacing="0"><tbody><tr>
																		<td class="formMiddleLeft formMiddleLeft317"></td>
																		<td class="formMiddleCenter formMiddleCenter317  f-colFormMiddleCenter " valign="top">
																			<div class="formMiddleContent formMiddleContent317 multiColFormMiddleContent f-colFormMiddleContent  fk-formContentOtherPadding" tabstyle="0" style="height: 149px; overflow-y: hidden;">
																				<div class="mulMColContent" id="mulMColContent317"><table width="100%" border="0" cellspacing="0" class="mulMColContentTable" cellpadding="0"><tbody><tr><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol317_cid_1" class="mulMColList"><div id="module545" _modulestyle="1" _moduleid="545" class="form form545 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="317" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
																					<table class="formTop formTop545" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
																					<table class=" formMiddle formMiddle545" style="" cellpadding="0" cellspacing="0"><tbody><tr>
																						<td class="formMiddleLeft formMiddleLeft545"></td>
																						<td class="formMiddleCenter formMiddleCenter545 " valign="top">
																							<div class="formMiddleContent formMiddleContent545 fk-formContentOtherPadding" tabstyle="0">
																								<div class="richContent richContent0"><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要咨询" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要咨询</span></a></p><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要委托" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要委托</span></a></p><p><br></p></div></div>
																						</td>
																						<td class="formMiddleRight formMiddleRight545"></td>
																					</tr></tbody></table>
																					<table class="formBottom formBottom545" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left545"></td><td class="center center545"></td><td class="right right545"></td></tr></tbody></table>
																					<div class="clearfloat clearfloat545"></div>
																				</div>
																				</div><div class="mulModuleColStyleLine" style=""></div></td><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol317_cid_2" class="mulMColList"><div id="module544" _modulestyle="1" _moduleid="544" class="form form544 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="317" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
																					<table class="formTop formTop544" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
																					<table class=" formMiddle formMiddle544" style="" cellpadding="0" cellspacing="0"><tbody><tr>
																						<td class="formMiddleLeft formMiddleLeft544"></td>
																						<td class="formMiddleCenter formMiddleCenter544 " valign="top">
																							<div class="formMiddleContent formMiddleContent544 fk-formContentOtherPadding" tabstyle="0">
																								<div class="richContent richContent0"><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要咨询" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要咨询</span></a></p><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要委托" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要委托</span></a></p><p><br></p></div></div>
																						</td>
																						<td class="formMiddleRight formMiddleRight544"></td>
																					</tr></tbody></table>
																					<table class="formBottom formBottom544" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left544"></td><td class="center center544"></td><td class="right right544"></td></tr></tbody></table>
																					<div class="clearfloat clearfloat544"></div>
																				</div>
																				</div><div class="mulModuleColStyleLine" style=""></div></td><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol317_cid_3" class="mulMColList"><div id="module412" _modulestyle="1" _moduleid="412" class="form form412 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="317" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
																					<table class="formTop formTop412" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
																					<table class=" formMiddle formMiddle412" style="" cellpadding="0" cellspacing="0"><tbody><tr>
																						<td class="formMiddleLeft formMiddleLeft412"></td>
																						<td class="formMiddleCenter formMiddleCenter412 " valign="top">
																							<div class="formMiddleContent formMiddleContent412 fk-formContentOtherPadding" tabstyle="0">
																								<div class="richContent richContent0"><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要买房" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要买房</span></a></p><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="房屋急售" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">房屋急售</span></a></p></div></div>
																						</td>
																						<td class="formMiddleRight formMiddleRight412"></td>
																					</tr></tbody></table>
																					<table class="formBottom formBottom412" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left412"></td><td class="center center412"></td><td class="right right412"></td></tr></tbody></table>
																					<div class="clearfloat clearfloat412"></div>
																				</div>
																				</div><div class="mulModuleColStyleLine" style=""></div></td><td class="mulColLayout" style=""><div id="mulMCol317_cid_4" class="mulMColList"><div id="module414" _modulestyle="1" _moduleid="414" class="form form414 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="317" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
																					<table class="formTop formTop414" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
																					<table class=" formMiddle formMiddle414" style="" cellpadding="0" cellspacing="0"><tbody><tr>
																						<td class="formMiddleLeft formMiddleLeft414"></td>
																						<td class="formMiddleCenter formMiddleCenter414 " valign="top">
																							<div class="formMiddleContent formMiddleContent414 fk-formContentOtherPadding" tabstyle="0">
																								<div class="richContent richContent0"><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要咨询" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要咨询</span></a></p><p style="line-height:3em;"><a href="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" astyle_h="1" target="_blank" title="我要委托" bstyle="true" _t="103" _i="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" _n="http://shang.qq.com/email/stop/email_stop.html?qq=258506508&amp;sig=eec1fba9cfc0acb5f525513e2f0be884ffc34038ebc49240&amp;tttt=1" style="text-decoration:none;"><span style="font-family:微软雅黑;font-size:16px;color:#646464;">我要委托</span></a></p><p><br></p></div></div>
																						</td>
																						<td class="formMiddleRight formMiddleRight414"></td>
																					</tr></tbody></table>
																					<table class="formBottom formBottom414" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left414"></td><td class="center center414"></td><td class="right right414"></td></tr></tbody></table>
																					<div class="clearfloat clearfloat414"></div>
																				</div>
																				</div></td></tr></tbody></table></div></div>
																		</td>
																		<td class="formMiddleRight formMiddleRight317"></td>
																	</tr></tbody></table>
																	<table class="formBottom formBottom317" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left317"></td><td class="center center317"></td><td class="right right317"></td></tr></tbody></table>
																	<div class="clearfloat clearfloat317"></div>
																</div>


															</div>
															<div class="containerFormsCenterMiddle J_containerFormsCenterMiddle">
																<div id="middleLeftForms" class="column forms mainForms middleLeftForms" style="display:none">

																</div>
																<div id="middleRightForms" class="column forms mainForms middleRightForms" style="display:none">

																</div>
																<div class="clearfloat"></div>
															</div>
															<div id="centerBottomForms" class="column forms mainForms centerBottomForms" style="display:none">

															</div>
														</td>

														<td valign="top" id="containerFormsRight" class="containerFormsRight" style="display:none">
															<div class="containerFormsRightTop">
															</div>
															<div id="rightForms" class="column forms sideForms rightForms">

															</div>
															<div class="containerFormsRightBottom">
															</div>
														</td>
													</tr>
													</tbody></table>

												<div id="bottomForms" class="column forms mainForms bottomForms" style="display:none">

												</div>

												<div id="containerPlaceholder" class="containerPlaceholder" style="height: 0px;"></div>

											</div>

											<div id="containerMiddleCenterBottom" class="containerMiddleCenterBottom">
											</div>

										</td>

										<td id="containerMiddleRight" class="containerMiddleRight"></td>
									</tr>
									</tbody></table>

								<table class="containerBottom" cellpadding="0" cellspacing="0">
									<tbody><tr valign="top">
										<td class="left"></td>
										<td class="center"></td>
										<td class="right"></td>
									</tr>
									</tbody></table>
							</div>

						</div>
					</td>
				</tr>
				</tbody></table>

			<div id="fullmeasureBottomForms" class="fullmeasureContainer forms fk-fullmeasureForms fullmeasureForms fullmeasureBottomForms">
				<div id="module430" _indexclass="formIndex1" _modulestyle="80" _moduleid="430" class="form form430 formIndex1 formStyle80 fk-formFullmeasure " title="" style="height: 508px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false" fmslidestyle="0" fmpage="1" iscarousel="0" displaytime="4" carouselspeed="1">
					<div class="fillContentRelative" style="position: relative; z-index: -1; height: 508px; width: 100%; display: none;"></div><div style="position: static;" class="fullmeasureOuterContentPage fullmeasureOuterContentPage1 J_fullmeasurePageShow" page="1">			<div class="fullmeasureOuterContentBg fullmeasureOuterContentBg430 fullmeasureStyle0"></div><div class="fullmeasureOuterContent fullmeasureOuterContent430">
					<div class="fullmeasureContent fullmeasureContent430" id="fullmeasureContent430_1" moduleid="430"><div class="fullmeasureContentBg fullmeasureContentBg430"></div><div id="module401" _indexclass="formIndex1" _modulestyle="35" _moduleid="401" systempattern="60" class="form form401 formStyle35 layoutModule  formStyle35_2  fk-formCol  jz-moduleColPattern60 formIndex1" title="" style="" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="430" _inpack="0" _autoheight="1" _global="false" _independent="false">
						<table class="formTop formTop401" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
						<table class="formBanner formBanner401 f-colFormBanner " cellpadding="0" cellspacing="0" style=""><tbody><tr>
							<td class="left left401"></td>
							<td class="center center401" valign="top">
								<table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle401"><tbody><tr>
									<td class="titleLeft titleLeft401" valign="top">
									</td>
									<td class="titleCenter titleCenter401" valign="top">
										<div class="titleText titleText401"><span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle401">二手好房</span></div>
									</td>
									<td class="titleRight titleRight401" valign="top">
									</td>
								</tr></tbody></table>
							</td>
							<td class="right right401"></td>
						</tr></tbody></table>
						<table class=" formMiddle formMiddle401" style="" cellpadding="0" cellspacing="0"><tbody><tr>
							<td class="formMiddleLeft formMiddleLeft401"></td>
							<td class="formMiddleCenter formMiddleCenter401  f-colFormMiddleCenter " valign="top">
								<div class="formMiddleContent formMiddleContent401 multiColFormMiddleContent f-colFormMiddleContent  fk-formContentOtherPadding" tabstyle="0">
									<div class="mulMColContent" id="mulMColContent401"><table width="100%" border="0" cellspacing="0" class="mulMColContentTable" cellpadding="0"><tbody><tr><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol401_cid_1" class="mulMColList"><div id="module415" _modulestyle="1" _moduleid="415" class="form form415 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop415" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle415" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft415"></td>
											<td class="formMiddleCenter formMiddleCenter415 " valign="top">
												<div class="formMiddleContent formMiddleContent415 fk-formContentOtherPadding" tabstyle="0">
													<div class="richModuleSlaveImgContainer richTextImg textImg3"><img imgid="uploads/ima05.jpg" imgurl="" imglinktype="1" imgcolid="2" imgpath="/aliveHouse/web/uploads/ima05.jpg" class="richModuleSlaveImg richImg richImg3" alt="" title="" src="/aliveHouse/web/uploads/ima05.jpg"></div><div class="richContent richContent3"><p style="clear:both;"><br></p></div></div>
											</td>
											<td class="formMiddleRight formMiddleRight415"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom415" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left415"></td><td class="center center415"></td><td class="right right415"></td></tr></tbody></table>
										<div class="clearfloat clearfloat415"></div>
									</div>
										<div id="module417" _modulestyle="1" _moduleid="417" class="form form417 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop417" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle417" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft417"></td>
												<td class="formMiddleCenter formMiddleCenter417 " valign="top">
													<div class="formMiddleContent formMiddleContent417 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">中紫海金东苑 &nbsp;东南向两居精装3房1</span></p><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">厅，紧邻地铁8号线 &nbsp;</span></p><p><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;">约130万</span></p><p><br></p></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight417"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom417" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left417"></td><td class="center center417"></td><td class="right right417"></td></tr></tbody></table>
											<div class="clearfloat clearfloat417"></div>
										</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol401_cid_2" class="mulMColList"><div id="module418" _modulestyle="1" _moduleid="418" class="form form418 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop418" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle418" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft418"></td>
											<td class="formMiddleCenter formMiddleCenter418 " valign="top">
												<div class="formMiddleContent formMiddleContent418 fk-formContentOtherPadding" tabstyle="0">
													<div class="richModuleSlaveImgContainer richTextImg textImg3"><img imgid="uploads/ima06.jpg" imgurl="" imglinktype="1" imgcolid="2" imgpath="http://10428547.s61i.faiusr.com/2/uploads/ima06.jpg" class="richModuleSlaveImg richImg richImg3" alt="" title="" src="/aliveHouse/web/uploads/ima06.jpg"></div><div class="richContent richContent3"></div></div>
											</td>
											<td class="formMiddleRight formMiddleRight418"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom418" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left418"></td><td class="center center418"></td><td class="right right418"></td></tr></tbody></table>
										<div class="clearfloat clearfloat418"></div>
									</div>
										<div id="module419" _modulestyle="1" _moduleid="419" class="form form419 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop419" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle419" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft419"></td>
												<td class="formMiddleCenter formMiddleCenter419 " valign="top">
													<div class="formMiddleContent formMiddleContent419 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">中紫海金东苑 &nbsp;东南向两居精装3房1</span></p><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">厅，紧邻地铁8号线 &nbsp;</span></p><p><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;">约150万</span></p><div><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;"><br></span></div><p><br></p></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight419"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom419" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left419"></td><td class="center center419"></td><td class="right right419"></td></tr></tbody></table>
											<div class="clearfloat clearfloat419"></div>
										</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class=" mulColLayout mulColPadding" style="width:290px;"><div id="mulMCol401_cid_3" class="mulMColList"><div id="module421" _modulestyle="1" _moduleid="421" class="form form421 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop421" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle421" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft421"></td>
											<td class="formMiddleCenter formMiddleCenter421 " valign="top">
												<div class="formMiddleContent formMiddleContent421 fk-formContentOtherPadding" tabstyle="0">
													<div class="richModuleSlaveImgContainer richTextImg textImg3"><img imgid="uploads/ima08.jpg" imgurl="" imglinktype="1" imgcolid="2" imgpath="http://10428547.s61i.faiusr.com/2/uploads/ima08.jpg" class="richModuleSlaveImg richImg richImg3" alt="" title="" src="/aliveHouse/web/uploads/ima08.jpg"></div><div class="richContent richContent3"></div></div>
											</td>
											<td class="formMiddleRight formMiddleRight421"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom421" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left421"></td><td class="center center421"></td><td class="right right421"></td></tr></tbody></table>
										<div class="clearfloat clearfloat421"></div>
									</div>
										<div id="module422" _modulestyle="1" _moduleid="422" class="form form422 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop422" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle422" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft422"></td>
												<td class="formMiddleCenter formMiddleCenter422 " valign="top">
													<div class="formMiddleContent formMiddleContent422 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">中紫海金东苑 &nbsp;东南向两居精装3房1</span></p><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">厅，紧邻地铁8号线 &nbsp;</span></p><p><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;">约130万</span></p><div><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;"><br></span></div><p><br></p></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight422"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom422" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left422"></td><td class="center center422"></td><td class="right right422"></td></tr></tbody></table>
											<div class="clearfloat clearfloat422"></div>
										</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class="mulColLayout" style=""><div id="mulMCol401_cid_4" class="mulMColList"><div id="module423" _modulestyle="1" _moduleid="423" class="form form423 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop423" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle423" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft423"></td>
											<td class="formMiddleCenter formMiddleCenter423 " valign="top">
												<div class="formMiddleContent formMiddleContent423 fk-formContentOtherPadding" tabstyle="0">
													<div class="richModuleSlaveImgContainer richTextImg textImg3"><img imgid="uploads/ima02.jpg" imgurl="" imglinktype="1" imgcolid="2" imgpath="http://10428547.s61i.faiusr.com/2/uploads/ima02.jpg" class="richModuleSlaveImg richImg richImg3" alt="" title="" src="/aliveHouse/web/uploads/ima02.jpg"></div><div class="richContent richContent3"></div></div>
											</td>
											<td class="formMiddleRight formMiddleRight423"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom423" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left423"></td><td class="center center423"></td><td class="right right423"></td></tr></tbody></table>
										<div class="clearfloat clearfloat423"></div>
									</div>
										<div id="module424" _modulestyle="1" _moduleid="424" class="form form424 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="401" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop424" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle424" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft424"></td>
												<td class="formMiddleCenter formMiddleCenter424 " valign="top">
													<div class="formMiddleContent formMiddleContent424 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">中紫海金东苑 &nbsp;东南向两居精装3房1</span></p><p><span style="font-family:微软雅黑;font-size:16px;color:#333333;">厅，紧邻地铁8号线 &nbsp;</span></p><p><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;">约180万</span></p><div><span style="font-family:微软雅黑;font-size:14px;color:#ED542A;"><br></span></div><p><br></p></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight424"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom424" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left424"></td><td class="center center424"></td><td class="right right424"></td></tr></tbody></table>
											<div class="clearfloat clearfloat424"></div>
										</div>
									</div></td></tr></tbody></table></div></div>
							</td>
							<td class="formMiddleRight formMiddleRight401"></td>
						</tr></tbody></table>
						<table class="formBottom formBottom401" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left401"></td><td class="center center401"></td><td class="right right401"></td></tr></tbody></table>
						<div class="clearfloat clearfloat401"></div>
					</div>
					</div></div>
					<div class="clearfloat clearfloat430"></div>
				</div></div>

				<div id="module328" _indexclass="formIndex2" _modulestyle="80" _moduleid="328" class="form form328 formIndex2 formStyle80 fk-formFullmeasure " title="" style="" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false" fmslidestyle="0" fmpage="1" iscarousel="0" displaytime="4" carouselspeed="1">
					<div class="fillContentRelative" style="position: relative; z-index: -1; height: 562px; width: 100%; display: none;"></div><div style="position: static;" class="fullmeasureOuterContentPage fullmeasureOuterContentPage1 J_fullmeasurePageShow" page="1">			<div class="fullmeasureOuterContentBg fullmeasureOuterContentBg328 fullmeasureStyle0"></div><div class="fullmeasureOuterContent fullmeasureOuterContent328">
					<div class="fullmeasureContent fullmeasureContent328" id="fullmeasureContent328_1" moduleid="328"><div class="fullmeasureContentBg fullmeasureContentBg328"></div><div id="module543" _indexclass="formIndex1" _modulestyle="35" _moduleid="543" class="form form543 formStyle35 layoutModule  formStyle35_2  fk-formCol  formIndex1" title="" style="" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="328" _inpack="0" _autoheight="1" _global="false" _independent="false">
						<table class="formTop formTop543" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
						<table class=" formMiddle formMiddle543" style="" cellpadding="0" cellspacing="0"><tbody><tr>
							<td class="formMiddleLeft formMiddleLeft543"></td>
							<td class="formMiddleCenter formMiddleCenter543  f-colFormMiddleCenter " valign="top">
								<div class="formMiddleContent formMiddleContent543 multiColFormMiddleContent f-colFormMiddleContent  fk-formContentOtherPadding" tabstyle="0">
									<div class="mulMColContent" id="mulMColContent543"><table width="100%" border="0" cellspacing="0" class="mulMColContentTable" cellpadding="0"><tbody><tr><td class=" mulColLayout mulColPadding" style="width:390px;"><div id="mulMCol543_cid_1" class="mulMColList"><div id="module538" _modulestyle="92" _moduleid="538" class="form form538 formStyle92 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop538" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle538" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft538"></td>
											<td class="formMiddleCenter formMiddleCenter538 " valign="top">
												<div class="formMiddleContent formMiddleContent538 fk-formContentOtherPadding" tabstyle="0">
													<div id="photoSwitch538" class="J_carouselPhotos photoSwitch photoListSwitch carouselPhotosSwitch" style="height: 280px; margin: 0px auto; overflow: hidden; width: 376px;" lalala="280">
														<div class="imageSwitchShowName photoSwitchBg" style="position: absolute; display: block; z-index: 2; height: auto; line-height: 30px; width: 376px; top: auto; bottom: 0px; margin-bottom: 2px; padding-bottom: 0px;"><span class="spanHiddenName spanShowName" style="margin-left: 10px; max-width: 98%; word-wrap: break-word; width: auto;">悦利12000元/平</span></div><div class="imageSwitchBtnArea" style="position: absolute; z-index: 3; display: none; width: 24px; bottom: 8px; top: auto;"><a class="imageSwitchBtn imageSwitchBtnSel"><span>1</span></a></div><div></div><div class="switchGroup" style="width: 376px; position: relative; overflow: hidden; height: 280px;"><a hidefocus="true" style="outline: none; width: 100%; height: 280px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; position: absolute; display: block; float: left; left: 0px; top: 0px;" onclick="return false;" id="photoListuploads/ima12.jpg" href="javascript:;" target="_blank" title=""><img src="/aliveHouse/web/uploads/ima12.jpg" width="376" height="280"></a></div></div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight538"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom538" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left538"></td><td class="center center538"></td><td class="right right538"></td></tr></tbody></table>
										<div class="clearfloat clearfloat538"></div>
									</div>
										<div id="module433" _modulestyle="1" _moduleid="433" class="form form433 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop433" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle433" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft433"></td>
												<td class="formMiddleCenter formMiddleCenter433 " valign="top">
													<div class="formMiddleContent formMiddleContent433 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><table _innercreatetable="true" width="393" align="CENTER" border="0" bordercolor="#000000" class="  noBorderTable" style="border-collapse:collapse;"><tbody><tr><td width="124" valign="top" style="word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">珠江俊景北区</span></td><td width="226" valign="top" style="text-align:right;word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">1室0厅1卫 | 51m² | 精装修</span></td></tr></tbody></table><p style="text-align:right;clear:both;"><br></p></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight433"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom433" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left433"></td><td class="center center433"></td><td class="right right433"></td></tr></tbody></table>
											<div class="clearfloat clearfloat433"></div>
										</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class=" mulColLayout mulColPadding" style="width:390px;"><div id="mulMCol543_cid_2" class="mulMColList"><div id="module539" _modulestyle="92" _moduleid="539" class="form form539 formStyle92 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop539" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle539" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft539"></td>
											<td class="formMiddleCenter formMiddleCenter539 " valign="top">
												<div class="formMiddleContent formMiddleContent539 fk-formContentOtherPadding" tabstyle="0">
													<div id="photoSwitch539" class="J_carouselPhotos photoSwitch photoListSwitch carouselPhotosSwitch" style="height: 280px; margin: 0px auto; overflow: hidden; width: 376px;" lalala="280">
														<div class="imageSwitchShowName photoSwitchBg" style="position: absolute; display: block; z-index: 2; height: auto; line-height: 30px; width: 376px; top: auto; bottom: 0px; margin-bottom: 2px; padding-bottom: 0px;"><span class="spanHiddenName spanShowName" style="margin-left: 10px; max-width: 98%; word-wrap: break-word; width: auto;">锐丰13000元/平</span></div><div class="imageSwitchBtnArea" style="position: absolute; z-index: 3; display: none; width: 24px; bottom: 8px; top: auto;"><a class="imageSwitchBtn imageSwitchBtnSel"><span>1</span></a></div><div></div><div class="switchGroup" style="width: 376px; position: relative; overflow: hidden; height: 280px;"><a hidefocus="true" style="outline: none; width: 100%; height: 280px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; position: absolute; display: block; float: left; left: 0px; top: 0px;" onclick="return false;" id="photoListuploads/ima06.jpg" href="javascript:;" target="_blank" title=""><img src="/aliveHouse/web/uploads/ima06.jpg" width="376" height="280"></a></div></div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight539"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom539" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left539"></td><td class="center center539"></td><td class="right right539"></td></tr></tbody></table>
										<div class="clearfloat clearfloat539"></div>
									</div>
										<div id="module434" _modulestyle="1" _moduleid="434" class="form form434 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop434" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle434" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft434"></td>
												<td class="formMiddleCenter formMiddleCenter434 " valign="top">
													<div class="formMiddleContent formMiddleContent434 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><table _innercreatetable="true" width="393" align="CENTER" border="0" bordercolor="#000000"><tbody><tr><td width="150" valign="top" style="word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">珠江俊景北区</span></td><td width="203" valign="top" style="word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">1室0厅1卫 | 51m² | 精装修<br><br></span></td></tr></tbody></table></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight434"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom434" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left434"></td><td class="center center434"></td><td class="right right434"></td></tr></tbody></table>
											<div class="clearfloat clearfloat434"></div>
										</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class="mulColLayout" style=""><div id="mulMCol543_cid_3" class="mulMColList"><div id="module540" _modulestyle="92" _moduleid="540" class="form form540 formStyle92 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop540" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle540" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft540"></td>
											<td class="formMiddleCenter formMiddleCenter540 " valign="top">
												<div class="formMiddleContent formMiddleContent540 fk-formContentOtherPadding" tabstyle="0">
													<div id="photoSwitch540" class="J_carouselPhotos photoSwitch photoListSwitch carouselPhotosSwitch" style="height: 280px; margin: 0px auto; overflow: hidden; width: 376px;" lalala="280">
														<div class="imageSwitchShowName photoSwitchBg" style="position: absolute; display: block; z-index: 2; height: auto; line-height: 30px; width: 376px; top: auto; bottom: 0px; margin-bottom: 2px; padding-bottom: 0px;"><span class="spanHiddenName spanShowName" style="margin-left: 10px; max-width: 98%; word-wrap: break-word; width: auto;">宝月15000元/平</span></div><div class="imageSwitchBtnArea" style="position: absolute; z-index: 3; display: none; width: 24px; bottom: 8px; top: auto;"><a class="imageSwitchBtn imageSwitchBtnSel"><span>1</span></a></div><div></div><div class="switchGroup" style="width: 376px; position: relative; overflow: hidden; height: 280px;"><a hidefocus="true" style="outline: none; width: 100%; height: 280px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; position: absolute; display: block; float: left; left: 0px; top: 0px;" onclick="return false;" id="photoListuploads/ima06.jpg" href="javascript:;" target="_blank" title=""><img src="/aliveHouse/web/uploads/ima06.jpg" width="376" height="280"></a></div></div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight540"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom540" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left540"></td><td class="center center540"></td><td class="right right540"></td></tr></tbody></table>
										<div class="clearfloat clearfloat540"></div>
									</div>
										<div id="module435" _modulestyle="1" _moduleid="435" class="form form435 formStyle1 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="543" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
											<table class="formTop formTop435" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
											<table class=" formMiddle formMiddle435" style="" cellpadding="0" cellspacing="0"><tbody><tr>
												<td class="formMiddleLeft formMiddleLeft435"></td>
												<td class="formMiddleCenter formMiddleCenter435 " valign="top">
													<div class="formMiddleContent formMiddleContent435 fk-formContentOtherPadding" tabstyle="0">
														<div class="richContent richContent0"><table _innercreatetable="true" width="393" align="CENTER" border="0" bordercolor="#000000"><tbody><tr><td width="153" valign="top" style="word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">珠江俊景北区</span></td><td width="200" valign="top" style="word-break:break-all;"><span style="font-family:微软雅黑;font-size:16px;">1室0厅1卫 | 51m² | 精装修<br><br></span></td></tr></tbody></table></div></div>
												</td>
												<td class="formMiddleRight formMiddleRight435"></td>
											</tr></tbody></table>
											<table class="formBottom formBottom435" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left435"></td><td class="center center435"></td><td class="right right435"></td></tr></tbody></table>
											<div class="clearfloat clearfloat435"></div>
										</div>
									</div></td></tr></tbody></table></div></div>
							</td>
							<td class="formMiddleRight formMiddleRight543"></td>
						</tr></tbody></table>
						<table class="formBottom formBottom543" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left543"></td><td class="center center543"></td><td class="right right543"></td></tr></tbody></table>
						<div class="clearfloat clearfloat543"></div>
					</div>
					</div></div>
					<div class="clearfloat clearfloat328"></div>
				</div></div>

				<div id="module336" _indexclass="formIndex3" _modulestyle="80" _moduleid="336" class="form form336 formIndex3 formStyle80 fk-formFullmeasure " title="" style="height: 667px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false" fmslidestyle="0" fmpage="1" iscarousel="0" displaytime="4" carouselspeed="1">
					<div class="fillContentRelative" style="position: relative; z-index: -1; height: 698px; width: 100%; display: none;"></div><div style="position: static;" class="fullmeasureOuterContentPage fullmeasureOuterContentPage1 J_fullmeasurePageShow" page="1">			<div class="fullmeasureOuterContentBg fullmeasureOuterContentBg336 fullmeasureStyle0"></div><div class="fullmeasureOuterContent fullmeasureOuterContent336">
					<div class="fullmeasureContent fullmeasureContent336" id="fullmeasureContent336_1" moduleid="336"><div class="fullmeasureContentBg fullmeasureContentBg336"></div><div id="module437" _indexclass="formIndex1" _modulestyle="35" _moduleid="437" systempattern="60" class="form form437 formStyle35 layoutModule  formStyle35_2  fk-formCol  jz-moduleColPattern60 formIndex1" title="" style="height: 508px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="336" _inpack="0" _autoheight="0" _global="false" _independent="false">
						<table class="formTop formTop437" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
						<table class="formBanner formBanner437 f-colFormBanner " cellpadding="0" cellspacing="0" style=""><tbody><tr>
							<td class="left left437"></td>
							<td class="center center437" valign="top">
								<table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle437"><tbody><tr>
									<td class="titleLeft titleLeft437" valign="top">
									</td>
									<td class="titleCenter titleCenter437" valign="top">
										<div class="titleText titleText437"><span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle437">最新房源</span></div>
									</td>
									<td class="titleRight titleRight437" valign="top">
									</td>
								</tr></tbody></table>
							</td>
							<td class="right right437"></td>
						</tr></tbody></table>
						<table class=" formMiddle formMiddle437" style="height: 454px;" cellpadding="0" cellspacing="0"><tbody><tr>
							<td class="formMiddleLeft formMiddleLeft437"></td>
							<td class="formMiddleCenter formMiddleCenter437  f-colFormMiddleCenter " valign="top">
								<div class="formMiddleContent formMiddleContent437 multiColFormMiddleContent f-colFormMiddleContent  fk-formContentOtherPadding" tabstyle="0" style="height: 414px; overflow-y: hidden;">
									<div class="mulMColContent" id="mulMColContent437"><table width="100%" border="0" cellspacing="0" class="mulMColContentTable" cellpadding="0"><tbody><tr><td class=" mulColLayout mulColPadding" style="width:789px;"><div id="mulMCol437_cid_1" class="mulMColList"><div id="module438" _modulestyle="13" _moduleid="438" systempattern="60" class="form form438 formStyle13 formInMulMCol  jz-modulePattern60" title="" style="" _side="0" _intab="0" _inmulmcol="437" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop438" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle438" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft438"></td>
											<td class="formMiddleCenter formMiddleCenter438 " valign="top">
												<div class="formMiddleContent formMiddleContent438 fk-formContentOtherPadding" tabstyle="0">
													<div id="productList438" class="productList" picwidth="160" picheight="160" style="overflow: hidden;">
														<table class="productTextListProp g_title" style="table-layout:fixed;width:100%;position:relative;z-index:1;" cellpadding="0" cellspacing="0">
															<tbody><tr>
																<td class="contentLineIcon" style="background:none"></td><td width="30%">
																<div class="propAlignCenter">
																	<span class="propValue"><b>名称</b></span>
																</div>
															</td><td width="17%">
																<div class="propAlignCenter">
																	<span class="propValue"><b>租金</b></span>
																</div>
															</td>
																<td width="17%">
																	<div class="propAlignCenter">
																		<span class="propValue"><b>户型</b></span>
																	</div>
																</td>
																<td width="17%">
																	<div class="propAlignCenter">
																		<span class="propValue"><b>租赁方式</b></span>
																	</div>
																</td>
																<td width="17%">
																	<div class="propAlignCenter">
																		<span class="propValue"><b>更新时间</b></span>
																	</div>
																</td>
															</tr>
															</tbody></table><div id="productTextList438" class="J_productTextList" style="position: relative; height: 382px; top: -0.886788px;"><table topclassname="productListTopIcon" topswitch="on" productid="12" productname="黄村电梯两房家私家电齐全" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product12">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=12&amp;_pp=2_438" target="_blank" title="黄村电梯两房家私家电齐全">黄村电梯两房家私家电齐全</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">3500</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">三房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">整租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/12</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="10" productname="奢侈私家游泳池，私家花园，五星级，享受尽在湖畔豪庭！" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product10">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=10&amp;_pp=2_438" target="_blank" title="奢侈私家游泳池，私家花园，五星级，享受尽在湖畔豪庭！">奢侈私家游泳池，私家花园，五星级，享受尽在湖畔豪庭！</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">8000</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">五房两厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">整租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/15</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="7" productname="同德乡岭南花园两房一低价转租家电齐全" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product7">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=7&amp;_pp=2_438" target="_blank" title="同德乡岭南花园两房一低价转租家电齐全">同德乡岭南花园两房一低价转租家电齐全</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">1800</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">两房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/05</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="8" productname="万科天河御品新房出租白领首选－全新电气家具" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product8">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=8&amp;_pp=2_438" target="_blank" title="万科天河御品新房出租白领首选－全新电气家具">万科天河御品新房出租白领首选－全新电气家具</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">1500</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">一房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/05</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="13" productname="中山大道天河公园对面邮电学院安静舒适、家具家电齐" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product13">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=13&amp;_pp=2_438" target="_blank" title="中山大道天河公园对面邮电学院安静舒适、家具家电齐">中山大道天河公园对面邮电学院安静舒适、家具家电齐</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">3000</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">两房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/14</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="1" productname="马赛国际公寓 赠送半年网费" class="productTextListTable g_item" cellpadding="0" cellspacing="0">
														<tbody><tr id="module438product1">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=1&amp;_pp=2_438" target="_blank" title="马赛国际公寓 赠送半年网费">马赛国际公寓 赠送半年网费</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">2800</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">一房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/25</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="11" productname="广州连锁酒店宜家公寓" class="productTextListTable g_item" cellpadding="0" cellspacing="0" style="display: table;">
														<tbody><tr id="module438product11">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=11&amp;_pp=2_438" target="_blank" title="广州连锁酒店宜家公寓">广州连锁酒店宜家公寓</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">4500</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">两房一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">整租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/29</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="14" productname="贵院岭南花园两房一低价转租家电齐全" class="productTextListTable g_item" cellpadding="0" cellspacing="0" style="display: table;">
														<tbody><tr id="module438product14">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=14&amp;_pp=2_438" target="_blank" title="贵院岭南花园两房一低价转租家电齐全">贵院岭南花园两房一低价转租家电齐全</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">2500</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">两房一低</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/19</span>
																</div>
															</td>
														</tr>
														</tbody></table><table topclassname="productListTopIcon" topswitch="on" productid="9" productname="海珠沤逸景翠园大三居低价出租" class="productTextListTable g_item" cellpadding="0" cellspacing="0" style="display: table;">
														<tbody><tr id="module438product9">
															<td class="contentLineIcon"></td>
															<td class="productNameTd" width="30%">
																<div class="propDiv productName propAlignLeft">
																	<a hidefocus="true" href="http://www.ot13227318.icoc.me/pd.php?id=9&amp;_pp=2_438" target="_blank" title="海珠沤逸景翠园大三居低价出租">海珠沤逸景翠园大三居低价出租</a>
																</div>
															</td><td width="17%">
															<div class="propDiv productName propAlignCenter productProp102">
																<span class="propValue">3500</span>
															</div>
														</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp103">
																	<span class="propValue">三方一厅</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp105">
																	<span class="propValue">合租</span>
																</div>
															</td>
															<td width="17%">
																<div class="propDiv productName propAlignCenter productProp107">
																	<span class="propValue">2016/07/09</span>
																</div>
															</td>
														</tr>
														</tbody></table></div><div class="clearfloat"></div>
													</div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight438"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom438" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left438"></td><td class="center center438"></td><td class="right right438"></td></tr></tbody></table>
										<div class="clearfloat clearfloat438"></div>
									</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class="mulColLayout" style=""><div id="mulMCol437_cid_2" class="mulMColList"><div id="module541" _modulestyle="88" _moduleid="541" class="form form541 formStyle88 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="437" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop541" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle541" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft541"></td>
											<td class="formMiddleCenter formMiddleCenter541 " valign="top">
												<div class="formMiddleContent formMiddleContent541 fk-formContentOtherPadding" tabstyle="0">
													<div class="listPhotosList">
														<div class="clearfloat"></div>
														<div id="photoForms541" style="overflow:hidden;" class="J_photoForms photoForms" picwidth="355" picheight="256">
															<div photoid="0" photoname="" photodisc="" class="J_photoForm photoForm" style="width: 355px; height: 266px;" faiwidth="355" faiheight="256">
																<div class="J_sortDiv"><div id="photoListuploads/ima07.jpg" photoname="" photodisc="" check="3" tmppic="uploads/ima07.jpg" _lide="" class="J_listPhotoImg imgDiv" style="width:355px;height:256px;">
																	<table cellpadding="0" cellspacing="0">
																		<tbody><tr>
																			<td>
																				<div class="J_photoImgPanel" style="width: 355px; height: 256px; position: relative; overflow: hidden; margin: 0px auto;">
																					<img iwidth="355" iheight="256" picsca="0" class="J_photoImg photoImg imageEffectsAnimate_MoveLeft" src="/aliveHouse/web/uploads/ima07.jpg" alt="" style="width: 365px; height: 256px; margin: 0px;">
																				</div>
																			</td>
																		</tr>
																		</tbody></table>
																</div>
																	<div class="parametersDiv">
																		<div class="J_listDesc photoParameters firstLine  " title="" style="text-align: center; height: auto;">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="clearfloat"></div>
													</div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight541"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom541" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left541"></td><td class="center center541"></td><td class="right right541"></td></tr></tbody></table>
										<div class="clearfloat clearfloat541"></div>
									</div>
									</div></td></tr></tbody></table></div></div>
							</td>
							<td class="formMiddleRight formMiddleRight437"></td>
						</tr></tbody></table>
						<table class="formBottom formBottom437" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left437"></td><td class="center center437"></td><td class="right right437"></td></tr></tbody></table>
						<div class="clearfloat clearfloat437"></div>
					</div>
					</div></div>
					<div class="clearfloat clearfloat336"></div>
				</div></div>

				<div id="module346" _indexclass="formIndex4" _modulestyle="80" _moduleid="346" class="form form346 formIndex4 formStyle80 fk-formFullmeasure " title="" style="height: 240px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false" fmslidestyle="0" fmpage="1" iscarousel="0" displaytime="4" carouselspeed="1">
					<div class="fillContentRelative" style="position: relative; z-index: -1; height: 303px; width: 100%; display: none;"></div><div style="position: static;" class="fullmeasureOuterContentPage fullmeasureOuterContentPage1 J_fullmeasurePageShow" page="1">			<div class="fullmeasureOuterContentBg fullmeasureOuterContentBg346 fullmeasureStyle0"></div><div class="fullmeasureOuterContent fullmeasureOuterContent346">
					<div class="fullmeasureContent fullmeasureContent346" id="fullmeasureContent346_1" moduleid="346"><div class="fullmeasureContentBg fullmeasureContentBg346"></div><div id="module347" _indexclass="formIndex1" _modulestyle="1" _moduleid="347" class="form form347 formStyle1 formIndex1" title="" style="" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="346" _inpack="0" _autoheight="1" _global="false" _independent="false">
						<table class="formTop formTop347" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
						<table class=" formMiddle formMiddle347" style="" cellpadding="0" cellspacing="0"><tbody><tr>
							<td class="formMiddleLeft formMiddleLeft347"></td>
							<td class="formMiddleCenter formMiddleCenter347 " valign="top">
								<div class="formMiddleContent formMiddleContent347 fk-formContentOtherPadding" tabstyle="0">
									<div class="richContent richContent0"><p style="text-align:left;line-height:5em;"><strong><span style="font-family:微软雅黑;"><span style="font-family:微软雅黑;font-size:39px;color:#FFFFFF;">买房、租房、卖房一站式服务</span></span></strong><span style="font-family:微软雅黑;"><span style="font-family:微软雅黑;font-size:39px;"></span><br></span></p><p style="text-align:left;line-height:5em;"><span style="font-family:微软雅黑;font-size:22px;color:#FFFFFF;">尽在HOUSING地产</span></p></div></div>
							</td>
							<td class="formMiddleRight formMiddleRight347"></td>
						</tr></tbody></table>
						<table class="formBottom formBottom347" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left347"></td><td class="center center347"></td><td class="right right347"></td></tr></tbody></table>
						<div class="clearfloat clearfloat347"></div>
					</div>
					</div></div>
					<div class="clearfloat clearfloat346"></div>
				</div></div>

				<div id="module348" _indexclass="formIndex5" _modulestyle="80" _moduleid="348" class="form form348 formIndex5 formStyle80 fk-formFullmeasure " title="" style="" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false" fmslidestyle="0" fmpage="1" iscarousel="0" displaytime="4" carouselspeed="1">
					<div class="fillContentRelative" style="position: relative; z-index: -1; height: 619px; width: 100%; display: none;"></div><div style="position: static;" class="fullmeasureOuterContentPage fullmeasureOuterContentPage1 J_fullmeasurePageShow" page="1">			<div class="fullmeasureOuterContentBg fullmeasureOuterContentBg348 fullmeasureStyle0"></div><div class="fullmeasureOuterContent fullmeasureOuterContent348">
					<div class="fullmeasureContent fullmeasureContent348" id="fullmeasureContent348_1" moduleid="348"><div class="fullmeasureContentBg fullmeasureContentBg348"></div><div id="module441" _indexclass="formIndex1" _modulestyle="35" _moduleid="441" systempattern="60" class="form form441 formStyle35 layoutModule  formStyle35_2  fk-formCol  jz-moduleColPattern60 formIndex1" title="" style="height: 529px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="348" _inpack="0" _autoheight="0" _global="false" _independent="false">
						<table class="formTop formTop441" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
						<table class="formBanner formBanner441 f-colFormBanner " cellpadding="0" cellspacing="0" style=""><tbody><tr>
							<td class="left left441"></td>
							<td class="center center441" valign="top">
								<table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle441"><tbody><tr>
									<td class="titleLeft titleLeft441" valign="top">
									</td>
									<td class="titleCenter titleCenter441" valign="top">
										<div class="titleText titleText441"><span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle441">常见问题</span></div>
									</td>
									<td class="titleRight titleRight441" valign="top">
									</td>
								</tr></tbody></table>
							</td>
							<td class="right right441"></td>
						</tr></tbody></table>
						<table class=" formMiddle formMiddle441" style="height: 475px;" cellpadding="0" cellspacing="0"><tbody><tr>
							<td class="formMiddleLeft formMiddleLeft441"></td>
							<td class="formMiddleCenter formMiddleCenter441  f-colFormMiddleCenter " valign="top">
								<div class="formMiddleContent formMiddleContent441 multiColFormMiddleContent f-colFormMiddleContent  fk-formContentOtherPadding" tabstyle="0" style="height: 435px; overflow-y: hidden;">
									<div class="mulMColContent" id="mulMColContent441"><table width="100%" border="0" cellspacing="0" class="mulMColContentTable" cellpadding="0"><tbody><tr><td class=" mulColLayout mulColPadding" style="width:632px;"><div id="mulMCol441_cid_1" class="mulMColList"><div id="module542" _modulestyle="92" _moduleid="542" class="form form542 formStyle92 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="441" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop542" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle542" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft542"></td>
											<td class="formMiddleCenter formMiddleCenter542 " valign="top">
												<div class="formMiddleContent formMiddleContent542 fk-formContentOtherPadding" tabstyle="0">
													<div id="photoSwitch542" class="J_carouselPhotos photoSwitch photoListSwitch carouselPhotosSwitch" style="height: 359px; margin: 0px auto; overflow: hidden; width: 551px;" lalala="359">
														<div class="imageSwitchShowName photoSwitchBg" style="position: absolute; display: block; z-index: 2; height: auto; line-height: 30px; width: 551px; top: auto; bottom: 0px; margin-bottom: 2px; padding-bottom: 0px;"><span class="spanHiddenName spanShowName" style="margin-left: 10px; max-width: 98%; word-wrap: break-word; width: auto;">286亿！中国成美国房产“第一买家”</span></div><div class="imageSwitchBtnArea" style="position: absolute; z-index: 3; display: none; width: 24px; bottom: 8px; top: auto;"><a class="imageSwitchBtn imageSwitchBtnSel"><span>1</span></a></div><div></div><div class="switchGroup" style="width: 551px; position: relative; overflow: hidden; height: 359px;"><a hidefocus="true" style="outline: none; width: 100%; height: 359px; cursor: default; background-position: 50% 50%; background-repeat: no-repeat; overflow: hidden; position: absolute; display: block; float: left; left: 0px; top: 0px;" onclick="return false;" id="photoListuploads/ima15.jpg" href="javascript:;" target="_blank" title=""><img src="/aliveHouse/web/uploads/ima15.jpg" width="551" height="359"></a></div></div>
												</div>
											</td>
											<td class="formMiddleRight formMiddleRight542"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom542" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left542"></td><td class="center center542"></td><td class="right right542"></td></tr></tbody></table>
										<div class="clearfloat clearfloat542"></div>
									</div>
									</div><div class="mulModuleColStyleLine" style=""></div></td><td class="mulColLayout" style=""><div id="mulMCol441_cid_2" class="mulMColList"><div id="module443" _modulestyle="7" _moduleid="443" class="form form443 formStyle7 formInMulMCol " title="" style="" _side="0" _intab="0" _inmulmcol="441" _infullmeasure="0" _inpack="0" _autoheight="1" _global="false" _independent="false">
										<table class="formTop formTop443" cellpadding="0" cellspacing="0"><tbody><tr><td class="left"></td><td class="center"></td><td class="right"></td></tr></tbody></table>
										<table class=" formMiddle formMiddle443" style="" cellpadding="0" cellspacing="0"><tbody><tr>
											<td class="formMiddleLeft formMiddleLeft443"></td>
											<td class="formMiddleCenter formMiddleCenter443 " valign="top">
												<div class="formMiddleContent formMiddleContent443 fk-formContentOtherPadding" tabstyle="0">
													<div>
														<div class="newsList J_newsList  newsNewModuleStyle_three " id="newsList443" _showsetting="0" newslisttype="5" scroll="0">
															<div topclassname="top1" topswitch="on" newsid="14" newsname="二手房过户有什么需要准备的？" class="J_newsListLine line noHover g_item   fk-newsLineHeight   "><div id="lineBody14" class="J_lineBody lineBody newsListLineBody2"><div class="newsCircleOuter"><div class="newsCircle"></div>
															</div>
																<div class="newsTitlePanel">
																	<div class="J_newsTitle newsTitle" style="width: 100%;">
																		<div class="J_newsListTopFlag "></div>
																		<a class="fk-newsListTitle" hidefocus="true" href="http://www.ot13227318.icoc.me/nd.php?id=14&amp;_np=2_443" target="_blank" title="二手房过户有什么需要准备的？">二手房过户有什么需要准备的？</a>
																	</div><div><p class="pic-mixNewsStyleSummary fk-newsListSummary">购买二手房办理过户是重中之重，往往很多纠纷都会出现在过户的环节，所以我们再购买二手房之前先了解一下购房过户手续的一...</p>
																</div></div>
															</div></div>
															<div class="J_separatorLine separatorLine g_separator "></div>
															<div topclassname="top1" topswitch="on" newsid="13" newsname="房企当下拿地 到底是&quot;馅饼&quot;还是&quot;陷阱&quot;？" class="J_newsListLine line noHover g_item   fk-newsLineHeight   "><div id="lineBody13" class="J_lineBody lineBody newsListLineBody2"><div class="newsCircleOuter"><div class="newsCircle"></div>
															</div>
																<div class="newsTitlePanel">
																	<div class="J_newsTitle newsTitle" style="width: 100%;">
																		<div class="J_newsListTopFlag "></div>
																		<a class="fk-newsListTitle" hidefocus="true" href="http://www.ot13227318.icoc.me/nd.php?id=13&amp;_np=2_443" target="_blank" title="房企当下拿地 到底是&quot;馅饼&quot;还是&quot;陷阱&quot;？">房企当下拿地 到底是"馅饼"还是"陷阱"？</a>
																	</div><div><p class="pic-mixNewsStyleSummary fk-newsListSummary">统计显示，仅7月前10天，全国单幅地块成交金额超过5亿的地块达29宗，其中溢价率超50%的地王达18宗。一二线城市...</p>
																</div></div>
															</div></div>
															<div class="J_separatorLine separatorLine g_separator "></div>
															<div topclassname="top1" topswitch="on" newsid="12" newsname="房产中介套路深 虚假宣传渗透交易每个环节" class="J_newsListLine line noHover g_item   fk-newsLineHeight   "><div id="lineBody12" class="J_lineBody lineBody newsListLineBody2"><div class="newsCircleOuter"><div class="newsCircle"></div>
															</div>
																<div class="newsTitlePanel">
																	<div class="J_newsTitle newsTitle" style="width: 100%;">
																		<div class="J_newsListTopFlag "></div>
																		<a class="fk-newsListTitle" hidefocus="true" href="http://www.ot13227318.icoc.me/nd.php?id=12&amp;_np=2_443" target="_blank" title="房产中介套路深 虚假宣传渗透交易每个环节">房产中介套路深 虚假宣传渗透交易每个环节</a>
																	</div><div><p class="pic-mixNewsStyleSummary fk-newsListSummary">一套叫价1.4亿元的所谓“清朝格格府邸”近日成为链家等房产中介网站上的“网红”，甚至引来北京市文物局辟谣：并非登记...</p>
																</div></div>
															</div></div>
															<div class="J_separatorLine separatorLine g_separator "></div>
															<div topclassname="top1" topswitch="on" newsid="11" newsname="楼市上涨效应向二线传导:厦门信贷收紧 南京土地&quot;高烧&quot;" class="J_newsListLine line noHover g_item   fk-newsLineHeight   "><div id="lineBody11" class="J_lineBody lineBody newsListLineBody2"><div class="newsCircleOuter"><div class="newsCircle"></div>
															</div>
																<div class="newsTitlePanel">
																	<div class="J_newsTitle newsTitle" style="width: 100%;">
																		<div class="J_newsListTopFlag "></div>
																		<a class="fk-newsListTitle" hidefocus="true" href="http://www.ot13227318.icoc.me/nd.php?id=11&amp;_np=2_443" target="_blank" title="楼市上涨效应向二线传导:厦门信贷收紧 南京土地&quot;高烧&quot;">楼市上涨效应向二线传导:厦门信贷收紧 南京土地"高烧"</a>
																	</div><div><p class="pic-mixNewsStyleSummary fk-newsListSummary">近日,住建部部长座谈会召开,对于“经济走势仍然分化,新旧发展动力的转换需要一个过程,新动力的成长势头正在加快”,有...</p>
																</div></div>
															</div></div>
															<div class="J_separatorLine separatorLine g_separator  newsListSeparatorLine "></div>
															<div class="clearfloat"></div>
															<div class="J_timeLine newsListTimeLine" style="height: 352px; left: 24px;"></div>
														</div>
													</div></div>
											</td>
											<td class="formMiddleRight formMiddleRight443"></td>
										</tr></tbody></table>
										<table class="formBottom formBottom443" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left443"></td><td class="center center443"></td><td class="right right443"></td></tr></tbody></table>
										<div class="clearfloat clearfloat443"></div>
									</div>
									</div></td></tr></tbody></table></div></div>
							</td>
							<td class="formMiddleRight formMiddleRight441"></td>
						</tr></tbody></table>
						<table class="formBottom formBottom441" cellpadding="0" cellspacing="0"><tbody><tr><td class="left left441"></td><td class="center center441"></td><td class="right right441"></td></tr></tbody></table>
						<div class="clearfloat clearfloat441"></div>
					</div>
					</div></div>
					<div class="clearfloat clearfloat348"></div>
				</div></div>


				<wbr style="display:none;"></div>

			<table class="absBottomTable" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td align="center">
						<div id="absBottomForms" class="forms sideForms absForms">
							<div style="position:absolute;"></div><!-- for ie6 -->

						</div>
					</td>
				</tr>
				</tbody>
			</table>

			<table id="webFooterTable" class="webFooterTable" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td align="center" valign="top" class="fk-moduleZoneWrap">
						<div id="fk-webFooterZone" class="J_moduleZone fk-webFooterZone fk-moduleZone forms sideForms">
							<div class="fk-moduleZoneBg"></div>
							<div id="module555" bannertitle="图片" _indexclass="formIndex1" _modulestyle="79" _moduleid="555" class="form form555 formIndex1 formStyle79 formInZone " title="" style="position: absolute; top: 45px; left: 62px; width: 127px; height: 126px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent555"><div class="floatImg floatImg_J"><a hidefocus="true" class="J_floatImg_jump ">
									<div class="floatImgWrap"><img id="float_img_555" class="float_in_img J_defImage " src="/aliveHouse/web/shadow-buy-house.png" style="height: 126px;"></div></a>
								</div></div>
							</div>

							<div id="module557" bannertitle="图片" _indexclass="formIndex2" _modulestyle="79" _moduleid="557" class="form form557 formIndex2 formStyle79 formInZone " title="" style="position: absolute; top: 44px; left: 368px; width: 127px; height: 126px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent557"><div class="floatImg floatImg_J"><a hidefocus="true" class="J_floatImg_jump ">
									<div class="floatImgWrap"><img id="float_img_557" class="float_in_img J_defImage " src="/aliveHouse/web/shadow-sale-house.png" style="height: 126px;"></div></a>
								</div></div>
							</div>

							<div id="module558" bannertitle="图片" _indexclass="formIndex3" _modulestyle="79" _moduleid="558" class="form form558 formIndex3 formStyle79 formInZone " title="" style="position: absolute; top: 44px; left: 677px; width: 127px; height: 126px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent558"><div class="floatImg floatImg_J"><a hidefocus="true" class="J_floatImg_jump ">
									<div class="floatImgWrap"><img id="float_img_558" class="float_in_img J_defImage " src="/aliveHouse/web/shadow-rent-house.png" style="height: 126px;"></div></a>
								</div></div>
							</div>

							<div id="module559" bannertitle="图片" _indexclass="formIndex4" _modulestyle="79" _moduleid="559" class="form form559 formIndex4 formStyle79 formInZone " title="" style="position: absolute; top: 45px; left: 977px; width: 126px; height: 126px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent559"><div class="floatImg floatImg_J"><a hidefocus="true" class="J_floatImg_jump ">
									<div class="floatImgWrap"><img id="float_img_559" class="float_in_img J_defImage " src="/aliveHouse/web/shadow-manage-money.png" style="height: 126px;"></div></a>
								</div></div>
							</div>

							<div id="module560" bannertitle="文本" _indexclass="formIndex5" _modulestyle="86" _moduleid="560" class="form form560 formIndex5 formStyle86 formInZone  siteEditor " title="" style="position: absolute; top: 194px; left: 37px; width: 162px; height: 40px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent560"><div class="fk-editor simpleText fk-editor-break-word "><span style="color: rgb(255, 255, 255); font-size: 16px; text-align: center; display: block;">Buy-House</span></div></div>
							</div>

							<div id="module561" bannertitle="文本" _indexclass="formIndex6" _modulestyle="86" _moduleid="561" class="form form561 formIndex6 formStyle86 formInZone  siteEditor " title="" style="position: absolute; top: 194px; left: 326px; width: 202px; height: 40px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent561"><div class="fk-editor simpleText fk-editor-break-word "><span style="color: rgb(255, 255, 255); font-size: 16px; text-align: center; display: block;">Sale-House</span></div></div>
							</div>

							<div id="module562" bannertitle="文本" _indexclass="formIndex7" _modulestyle="86" _moduleid="562" class="form form562 formIndex7 formStyle86 formInZone  siteEditor " title="" style="position: absolute; top: 195px; left: 646px; width: 202px; height: 40px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent562"><div class="fk-editor simpleText  "><span style="color: rgb(255, 255, 255); font-size: 16px; text-align: center; display: block;">Rent-Wanted</span></div></div>
							</div>

							<div id="module563" bannertitle="文本" _indexclass="formIndex8" _modulestyle="86" _moduleid="563" class="form form563 formIndex8 formStyle86 formInZone  siteEditor " title="" style="position: absolute; top: 195px; left: 944px; width: 202px; height: 40px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _autoheight="0" _global="false" _independent="false">
								<div class="lightModuleOuterContent lightModuleOuterContent563"><div class="fk-editor simpleText  "><span style="color: rgb(255, 255, 255); font-size: 16px; text-align: center; display: block;">Manage-Money</span></div></div>
							</div>


						</div>
						<div id="webFooter" class="webFooter">
							<div id="footer" class="footer">
								<table class="footerTop" cellpadding="0" cellspacing="0">
									<tbody>
									<tr valign="top">
										<td class="topLeft"></td>
										<td class="topCenter"></td>
										<td class="topRight"></td>
									</tr>
									</tbody>
								</table>
								<table class="footerMiddle" cellpadding="0" cellspacing="0">
									<tbody>
									<tr valign="top">
										<td class="middleLeft"></td>
										<td class="middleCenter" align="center" width="100%">
											<div class="footerContent" style="display: flex;">
												<div style="margin: auto;">
													<div class="footerInfo">
														<p>Copyright<font face="Arial">©</font>2017-2017 活着的房 版权所有</p>
													</div>
													<div class="footerSupport" id="footerSupport">
												<span class="footerMobile">
													<a hidefocus="true" href="http://www.alivehouse.com/" target="_blank">手机版</a>
												</span>
														<span class="footerSep">|</span>
														<span id="footerbeian">
													<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=XXX" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; margin-right:5px;">
														<img src="/aliveHouse/web/beianIcon.png" width="20" height="20" />
														<span style="height:20px;line-height:20px;margin: 0px 5px 0px 0px; color:#898989;"> 备案信息 </span>
													</a>
												</span>
														<span id="footerbeianinfo">
													<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">
														<span style="height:20px;line-height:20px;margin: 0px 5px 0px 0px; color:#898989;"> XXX </span>
													</a>
												</span>

														<span class="footerSep">|</span>
														<span id="footerLogin" class="footerLogin">
													<a name="popupLogin" hidefocus="true" href="/" onclick="Fai.closeTip(&quot;#footerLogin&quot;);">登录</a>
												</span>
														<span class="bgplayerButton" id="bgplayerButton" style="display:none;"></span>
													</div>
												</div>
											</div>
										</td>
										<td class="middleRight"></td>
									</tr>
									</tbody>
								</table>

								<table class="footerBottom" cellpadding="0" cellspacing="0">
									<tbody><tr valign="top">
										<td class="bottomLeft"></td>
										<td class="bottomCenter"></td>
										<td class="bottomRight"></td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>

					</td>
				</tr>
				</tbody></table>

			<div class="clearfloat"></div>

		</div>

	</div>

	<!-- fixed Left-Top -->
	<div class="floatLeftTop" style="top: 0px;">
		<div id="floatLeftTopForms" class="forms sideForms floatForms">

		</div>
	</div>

	<!-- fixed Right-Top -->
	<div class="floatRightTop" style="top: 0px;">
		<div id="floatRightTopForms" class="forms sideForms floatForms">

		</div>
	</div>

	<!-- fixed Left-Bottom -->
	<div class="floatLeftBottom">
		<div id="floatLeftBottomForms" class="forms sideForms floatForms">

		</div>
	</div>

	<!-- fixed Right-Bottom -->
	<div class="floatRightBottom">
		<div id="floatRightBottomForms" class="forms sideForms floatForms">

		</div>
	</div>

	<!-- background music -->
	<div id="bgMusic" class="bgMusic"></div>

	<!-- Load Core CSS -->
	<link type="text/css" href="/aliveHouse/web/fontsIco.min.css" rel="stylesheet">

	<!-- Load Core JS -->
	<script type="text/javascript" src="/aliveHouse/web/jquery-core.min.js"></script>
	<script type="text/javascript" src="/aliveHouse/web/jquery-mousewheel.min.js"></script>
	<script type="text/javascript" src="/aliveHouse/web/fai.min.js"></script>
	<script type="text/javascript" src="/aliveHouse/web/jquery-ui-core.min.js"></script>
	<script type="text/javascript" src="/aliveHouse/web/site.min.js"></script>
	<script type="text/javascript" src="/aliveHouse/web/messageConfig.js"></script>

	<!-- define Core JS -->
	<script type="text/javascript">

        function showYuanDanWindow(){
            var hasShowYuanDanLuckyGuy = $.cookie("hasShowYuanDanLuckyGuy",{path:"/"});
            var _hasGetYuanDanLuckyGuy_ = $.cookie("_hasGetYuanDanLuckyGuy_",{path:"/"});
            var _openbigImg = false;

            if(_openbigImg == true){
                if(hasShowYuanDanLuckyGuy == 'true' || _hasGetYuanDanLuckyGuy_ != 'true' ){
                    Site.isShowThreeDaysLuckyGuy = "true";
                    Site.isTenMinutes = 'true';
                    $.cookie("hasShowYuanDanLuckyGuy",false,{path:"/"});
                    Site.drawLottery();
                }else{

                    Site.sendResult2();
                }
            }
        }
		var fk_sale = new Object();
        fk_sale.cid = 13775917;
        fk_sale.siteVer = 10;
        fk_sale.popupWindowSiteVer = 10;
        fk_sale.isLuckyGuyFlag = false;
        fk_sale.popupWindowEndYear = 2017;
        fk_sale.popupWindowEndMonth = 5;
        fk_sale.popupWindowEndDay = 31;
        fk_sale.popupWindowDays = 16;
        fk_sale.popupWindowMs = 1425837084;
        fk_sale.openDays = 0;
        fk_sale.openMinutes = 83;
        fk_sale.popupWindowEndSignupHours = 720.0;
        fk_sale.url = 'http://www.faisco.cn/portal.php#appId=shop';
        fk_sale.showDomainWindowFlag = false;
        fk_sale.cacct = 'ot13227318';
        fk_sale.imgBigSrc = 'http://jz.faisys.com/image/pro/20170101/salesPromotion.png?v=201701101133';
        fk_sale.imgBigBtn = 'http://jz.faisys.com/image/pro/20170101/btn_buy.png?v=201701101133';
        fk_sale.imgClose = 'http://jz.faisys.com/image/pro/20170101/close.png?v=201701101133';
        fk_sale.siteFirstLogin = true;
        fk_sale.isShowAdvertisementWindowThreeMinute = false;
        fk_sale.textUrl = 'http://www.faisco.cn/portal.php#appId=shop';
        fk_sale.domainImgBigBg = 'http://jz.faisys.com/image/pro/20160101/domainSearchImg.png';
        fk_sale.domainImgClose = 'http://jz.faisys.com/image/pro/20160101/close.png?v=201601181937';
        fk_sale.siteBizBigClose = 'http://jz.faisys.com/image/pro/20160701/close_popup.png';
        fk_sale.siteBizBigBg = 'http://jz.faisys.com/image/pro/20160701/popup02.png';
        fk_sale.showSiteBizWindow = false;
        fk_sale.showSitePopWindow = false;
        fk_sale.openFlyer = false;

	</script>

	<script type="text/javascript">
		// 为了避免用户误操作，在域名结尾输入多余字符导致cookie失效问题，这里校验一下浏览器的host是否与后台拿到的host一致
//        if (window.location.host != 'www.ot13227318.icoc.me') { window.location.href = 'http://' + 'www.ot13227318.icoc.me'; }
//        console.log(window.location.host.lastIndexOf("."));
        var _jsErrCahche = [];

        window.onerror = function(sMsg,sUrl,sLine){
            if (typeof Site == 'undefined') {
                alert('您的网页未加载完成，请尝试按“CTRL+功能键F5”重新加载。');
            }
            if( sLine < 1 || typeof sMsg != 'string' || sMsg.length < 1 ){
                return;
            }

            var log = "Error:" + sMsg + ";Line:" + sLine + ";Url:" + sUrl;
            var alertLog = "Error:"+sMsg+"\n" + "Line:" + sLine + "\n" + "Url:" + sUrl + "\n";
            var encodeUrl = function (url){
                return typeof url === "undefined" ? "" : encodeURIComponent(url);
            };

            var ajax = true;
            var obj = { 'm' : sMsg, 'u' : sUrl, 'l' : sLine };
            for( var i = 0; i < _jsErrCahche.length; i ++ ){
                if( _jsErrCahche[i].m == obj.m && _jsErrCahche[i].u == obj.u && _jsErrCahche[i].l == obj.l  ){
                    ajax = false;
                    break;
                }
            }

            if( ajax ){
                _jsErrCahche.push( obj );
                _faiAjax.ajax({
                    type	: "post",
                    url		: "ajax/logJsErr_h.php?cmd=jsErr",
                    data	: 'msg='+ encodeUrl(log)
                });
            }
            if(false){
                alert( alertLog );
            }
        };

        Fai.top = window;
        var bgmCloseToOpen = false;
        var _debug = false;
        var _isPre = false;
        var _devMode = false;
        var _colOtherStyleData = {"independentList":[],"y":0,"h":0,"layout4Width":0,"layout5Width":0};						// 当前页面的数据
        var _templateOtherStyleData = {"independentList":[],"h":540,"y":0,"layout4Width":0,"layout5Width":0};						// 全局的数据

        var _templateDefLayout = {BANNER_NAV:0,NAV_FLOAT:1,LEFT_NAV_BANNER_RIGHT_HIDE:3,LEFT_NAV_CENTER_BANNER_RIGHT_HIDE:4,LEFT_BANNER_NAV_RIGHT_HIDE:5,LEFT_NAV_EXPEND_CENTER_BANNER:6,CENTER_TOP_BANNER_RIGHT_HIDE:7,LEFT_HIDE_CENTER_TOP_BANNER:8,NAV_FLOAT_ON_BANNER:9,NAV_BANNER:10};

        $(function() {

			//Site.changeTheLogoSize();
			Site.showOrHideMailBox();
			Site.loginSiteInit('ot13227318','faisco.cn', false,"");

			//topBarMember

			// 绑定退出事件
			Site.bindBeforeUnloadEvent(false, false, false);

			Site.initTemplateLayout(_templateDefLayout.NAV_FLOAT, true, false );

			// spider统计

			// ajax统计
			Site.total({colId:2, pdId:-1, ndId:-1, sc:0, rf:"http://m.ot13227318.faisco.cn/index.php"});
			//前端性能数据上报
			//Site.report();
			//保留旧用户的初始化版式区域4 和区域5 中，区域4的padding-right空间
			Site.colLayout45Width();
			//各个模块inc吐出脚本
			Site.initCorpTitleJump();
			Site.hoverChangeImage();Site.hoverStyle();

            Site.initModuleSiteSearch('316');

            Site.initMulColModuleInIE('#module395');

            Site.initBanner({"_open":true,"data":[{"title":"","desc":"","imgWidth":1920,"imgHeight":780,"ot":1,"src":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY.jpg","edgeLeft":"","edgeRight":""},{"title":"","desc":"","imgWidth":1920,"imgHeight":780,"ot":1,"src":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY.jpg","edgeLeft":"","edgeRight":""}],"width":1920,"height":780,"playTime":4000,"animateTime":1500,"from":"banner","btnType":0,"wideScreen":false}, {"_open":false}, 4);
            Site.cacheModuleFunc.init('initFlBtnStyle', {"moduleId":416,"btnNumSystem":103,"btnStyle":{"s":{"t":1,"w":70,"h":26},"bg":{"t":1,"c":"transparent","r":3},"r":{"t":2,"lt":0,"rt":0,"lb":0,"rb":0},"sh":{"t":0,"dx":0,"dy":0,"f":0,"c":"#000000"},"b":{"t":2,"c":"#fe8300","w":1}},"otherStr":{"cc":"#c40000","utc":0,"gcc":"#fff","bcc":"#000","imc":0}});
            Site.adjustFlBtnPos(416);

            Site.cacheModuleFunc.init('initFlBtnStyle', {"moduleId":420,"btnNumSystem":103,"btnStyle":{"s":{"t":1,"w":70,"h":26},"bg":{"t":1,"c":"transparent","r":3},"r":{"t":2,"lt":0,"rt":0,"lb":0,"rb":0},"sh":{"t":0,"dx":0,"dy":0,"f":0,"c":"#000000"},"b":{"t":2,"c":"#fe8300","w":1}},"otherStr":{"cc":"#c40000","utc":0,"gcc":"#fff","bcc":"#000","imc":0}});
            Site.adjustFlBtnPos(420);

            Site.cacheModuleFunc.init('initFlBtnStyle', {"moduleId":425,"btnNumSystem":103,"btnStyle":{"s":{"t":1,"w":70,"h":26},"bg":{"t":1,"c":"transparent","r":3},"r":{"t":2,"lt":0,"rt":0,"lb":0,"rb":0},"sh":{"t":0,"dx":0,"dy":0,"f":0,"c":"#000000"},"b":{"t":2,"c":"#fe8300","w":1}},"otherStr":{"cc":"#c40000","utc":0,"gcc":"#fff","bcc":"#000","imc":0}});
            Site.adjustFlBtnPos(425);

            Site.cacheModuleFunc.init('initFlBtnStyle', {"moduleId":426,"btnNumSystem":103,"btnStyle":{"s":{"t":1,"w":70,"h":26},"bg":{"t":1,"c":"transparent","r":3},"r":{"t":2,"lt":0,"rt":0,"lb":0,"rb":0},"sh":{"t":0,"dx":0,"dy":0,"f":0,"c":"#000000"},"b":{"t":2,"c":"#fe8300","w":1}},"otherStr":{"cc":"#c40000","utc":0,"gcc":"#fff","bcc":"#000","imc":0}});
            Site.adjustFlBtnPos(426);

            Site.cacheModuleFunc.init('initFlBtnStyle', {"moduleId":440,"btnNumSystem":103,"btnStyle":{"s":{"t":1,"w":239,"h":55},"bg":{"t":1,"c":"#ffffff","r":3},"r":{"t":2,"lt":28,"rt":28,"lb":28,"rb":28},"sh":{"t":0,"dx":0,"dy":0,"f":0,"c":"#000000"},"b":{"t":0,"w":1,"c":"#000000"}},"otherStr":{"cc":"#c40000","utc":0,"gcc":"#fff","bcc":"#000","imc":0}});
            Site.adjustFlBtnPos(440);

            Site.initMulColModuleInIE('#module317');

            Site.initMulColModuleInIE('#module401');
            Site.setFullMeasureBgHightInIe6( 430);;$(function(){Site.inFullmeasueAnimation.animateFm(430,0,1,{"c":0,"d":4,"s":1});});
            Site.initModulePhotoSwitch(538, {"data":[{"name":"悦利12000元/平","href":"","target":"_blank","src":"http://10428547.s61i.faiusr.com/2/uploads/ima12.jpg","width":376,"height":280,"widthOr":376,"heightOr":280,"pic":"uploads/ima12.jpg"}],"width":376,"height":280,"playTime":4000,"animateTime":1500,"showImageName":true,"switchWrapName":true,"moduleId":"photoSwitch538","cusPicSize":true,"picScale":false,"manuallyCarousel":false}, 1, 'carouselPhotos');

            Site.initModulePhotoSwitch(539, {"data":[{"name":"锐丰13000元/平","href":"","target":"_blank","src":"http://10428547.s61i.faiusr.com/2/uploads/ima06.jpg","width":376,"height":280,"widthOr":376,"heightOr":280,"pic":"uploads/ima06.jpg"}],"width":376,"height":280,"playTime":4000,"animateTime":1500,"showImageName":true,"switchWrapName":true,"moduleId":"photoSwitch539","cusPicSize":true,"picScale":false,"manuallyCarousel":false}, 1, 'carouselPhotos');

            Site.initModulePhotoSwitch(540, {"data":[{"name":"宝月15000元/平","href":"","target":"_blank","src":"http://10428547.s61i.faiusr.com/2/uploads/ima06.jpg","width":376,"height":280,"widthOr":376,"heightOr":280,"pic":"uploads/ima06.jpg"}],"width":376,"height":280,"playTime":4000,"animateTime":1500,"showImageName":true,"switchWrapName":true,"moduleId":"photoSwitch540","cusPicSize":true,"picScale":false,"manuallyCarousel":false}, 1, 'carouselPhotos');

            Site.initMulColModuleInIE('#module543');
            Site.setFullMeasureBgHightInIe6( 328);;$(function(){Site.inFullmeasueAnimation.animateFm(328,0,1,{"c":0,"d":4,"s":1});});
            Site.loadProductTextList(438);
            Site.productScroll({moduleId:438});

            Site.loadPhotoList(541, 0, true, 7,'listPhotos');
            jzUtils.run({ "name": "ImageEffect.FUNC.BASIC.Init", "callMethod": true }, {"moduleId": 541, "imgEffOption": {"effType":7,"borderType":false,"borderColor":"#000","borderWidth":1,"borderStyle":1,"style":88,"fullMaskCusBg":false,"fullMaskCusDisc":false,"halfMaskCusBg":false,"halfMaskCusDisc":false,"fullMaskOpenDisc":false}, "tagetOption": {"nameHidden":false,"nameWordWrap":false,"targetParent":"photoForm","target":"imgDiv","picScale":0}, "callback": Site.createImageEffectContent_photo, "callbackArgs": []});
            Site.initMulColModuleInIE('#module437');
            Site.setFullMeasureBgHightInIe6( 336);;$(function(){Site.inFullmeasueAnimation.animateFm(336,0,1,{"c":0,"d":4,"s":1});});

            Site.setFullMeasureBgHightInIe6( 346);;$(function(){Site.inFullmeasueAnimation.animateFm(346,0,1,{"c":0,"d":4.0,"s":1.0});});
            Site.initModulePhotoSwitch(542, {"data":[{"name":"286亿！中国成美国房产\u201C第一买家\u201D","href":"","target":"_blank","src":"http://10428547.s61i.faiusr.com/2/uploads/ima15.jpg","width":551,"height":359,"widthOr":551,"heightOr":359,"pic":"uploads/ima15.jpg"}],"width":551,"height":359,"playTime":4000,"animateTime":1500,"showImageName":true,"switchWrapName":true,"moduleId":"photoSwitch542","cusPicSize":true,"picScale":false,"manuallyCarousel":false}, 1, 'carouselPhotos');

            Site.loadNewsList(443, {"y":0,"s":0,"w":1}, false);
            Site.loadNewsNewStyle(443, false,false,false,true,true,false,false,true,false);

            Site.initMulColModuleInIE('#module441');
            Site.setFullMeasureBgHightInIe6( 348);;$(function(){Site.inFullmeasueAnimation.animateFm(348,0,1,{"c":0,"d":4,"s":1});});
            jzUtils.run({ "name": "ImageEffect.FUNC.BASIC.Init", "callMethod": true }, {"moduleId": 555, "imgEffOption": {"effType":1,"borderType":false,"borderColor":"#000","borderWidth":1,"borderStyle":1,"hoverPicPath":"http://0.ss.faisys.com/image/floatImgHoverDef.png","openHoverPic":false,"isFontIcon":false,"ishovFont":false,"hovFont":"faisco-icons-contact2","hovFontColor":"#222222","picPath":"http://10428547.s61i.faiusr.com/4/shadow-buy-house.png","isInit":false}, "tagetOption": {"targetParent":"floatImg_J","target":"floatImg_J"}, "callback": Site.createImageEffectContent_photo, "callbackArgs": []});
            jzUtils.run({ "name": "ImageEffect.FUNC.BASIC.Init", "callMethod": true }, {"moduleId": 557, "imgEffOption": {"effType":1,"borderType":false,"borderColor":"#000","borderWidth":1,"borderStyle":1,"hoverPicPath":"http://0.ss.faisys.com/image/floatImgHoverDef.png","openHoverPic":false,"isFontIcon":false,"ishovFont":false,"hovFont":"faisco-icons-contact2","hovFontColor":"#222222","picPath":"http://10428547.s61i.faiusr.com/4/shadow-sale-house.png","isInit":false}, "tagetOption": {"targetParent":"floatImg_J","target":"floatImg_J"}, "callback": Site.createImageEffectContent_photo, "callbackArgs": []});
            jzUtils.run({ "name": "ImageEffect.FUNC.BASIC.Init", "callMethod": true }, {"moduleId": 558, "imgEffOption": {"effType":1,"borderType":false,"borderColor":"#000","borderWidth":1,"borderStyle":1,"hoverPicPath":"http://0.ss.faisys.com/image/floatImgHoverDef.png","openHoverPic":false,"isFontIcon":false,"ishovFont":false,"hovFont":"faisco-icons-contact2","hovFontColor":"#222222","picPath":"http://10428547.s61i.faiusr.com/4/shadow-rent-house.png","isInit":false}, "tagetOption": {"targetParent":"floatImg_J","target":"floatImg_J"}, "callback": Site.createImageEffectContent_photo, "callbackArgs": []});
            jzUtils.run({ "name": "ImageEffect.FUNC.BASIC.Init", "callMethod": true }, {"moduleId": 559, "imgEffOption": {"effType":1,"borderType":false,"borderColor":"#000","borderWidth":1,"borderStyle":1,"hoverPicPath":"http://0.ss.faisys.com/image/floatImgHoverDef.png","openHoverPic":false,"isFontIcon":false,"ishovFont":false,"hovFont":"faisco-icons-contact2","hovFontColor":"#222222","picPath":"http://10428547.s61i.faiusr.com/4/shadow-manage-money.png","isInit":false}, "tagetOption": {"targetParent":"floatImg_J","target":"floatImg_J"}, "callback": Site.createImageEffectContent_photo, "callbackArgs": []});

            Site.initPage();	// 这个要放在最后，因为模块组初始化时会把一些模块隐藏，导致没有高度，所以要放最后执行

			setTimeout(afterModuleLoaded, 0);
			Site.loadCss("http://2.ss.faisys.com/css/bannerAnimation.min.css?v=201611091646");
			Site.triggerGobalEvent("siteReadyLoad");
        });


        function afterModuleLoaded() {

            Site.initPage2();

            //Site.mallCartInit(_colId);
            //Site.mobiWebInit();

        } // afterModuleLoaded end

        var _lcid = 2052;
        var _siteDomain = 'http://www.ot13227318.icoc.me';
        var _resRoot = 'http://0.ss.faisys.com';
        var _colId = 2;
        var _fromColId = -1;
        var _designAuth = false;
        var _manageMode = false;
        var _oem = false;
        var _siteVer = 10;
        var _manageStatus = false;
        var _webRightBar = false;
        var _isMemberLogin = false;// 会员是否登陆了



        var nav2SubMenu=[];
        var nav109SubMenu=[];
        var nav106SubMenu=[];
        var nav105SubMenu=[];
        var nav108SubMenu=[{"hidden":false,"colId":9,"href":"///home/contact/contact.html","target":" target='_self'","colName":"Contact","html":"<span class='itemName0'>Contact<\/span>","title":"","onclick":"return true;"}];

        var _customBackgroundData = {"styleDefault":true,"s":true,"h":false,"r":3,"o":"","sw":-1,"e":0,"wbh":-1,"wbw":-1,"clw":-1,"crw":-1,"wbws":-1,"wbs":0,"id":"","p":"","bBg":{"y":0,"r":3,"f":"","p":"","c":"#000"},"cBg":{"y":0,"r":3,"f":"","p":"","c":"#000"},"cmBg":{"y":0,"r":3,"f":"","p":"","c":"#000"},"bm":{},"cm":{},"cp":{"y":0}};          //自定义的数据
        var _templateBackgroundData = {"id":"","bBg":{"c":"#000","f":"","r":3,"p":"","y":0},"cBg":{"c":"#000","f":"","r":3,"p":"","y":0},"cmBg":{"c":"#000","f":"","r":3,"p":"","y":0},"sw":1200,"s":true,"h":false,"r":3,"o":"","e":0,"wbh":-1,"wbw":-1,"clw":-1,"crw":-1,"wbws":-1,"wbs":1,"p":"","bm":{},"cm":{},"cp":{"y":0}};// 模版的数据

        var _templateBannerData = {"ce":{},"pl":0,"l":[{"i":"AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY","p":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY.jpg","w":1920,"h":780,"tp":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY!100x100.jpg"},{"i":"AD0Ig8H8BBACGAAg8eaUwgUolPudngQwgA84jAY","p":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUolPudngQwgA84jAY.jpg","w":1920,"h":780,"tp":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUolPudngQwgA84jAY!100x100.jpg"},{"i":"AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY","p":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY.jpg","w":1920,"h":780,"tp":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY!100x100.jpg"}],"n":[{"t":1,"i":"AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY","e":0,"u":"","p":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg7OaUwgUogKCStwUwgA84jAY.jpg","w":1920,"h":780,"el":"","er":""},{"t":1,"i":"AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY","e":0,"u":"","p":"http://10428547.s61i.faiusr.com/2/AD0Ig8H8BBACGAAg8eaUwgUo0MSLnQUwgA84jAY.jpg","w":1920,"h":780,"el":"","er":""}],"s":4,"bt":0,"at":2,"i":4000,"a":1500,"h":false,"o":false,"t":1,"p":0,"pt":0,"ws2":false,"f":{},"c":3,"ws":false};		// 模版的数据

        var _pageBannerData = {"s":0,"i":4000,"a":1500,"h":false,"o":false,"t":1,"p":0,"pt":0,"pl":0,"bt":1,"ws2":false,"l":[],"f":{},"ce":{},"n":[],"c":3,"at":0,"ws":false};					// 当前页面的自定义数据（页面独立样式设置）
        var _bannerData = _templateBannerData;

        var _useTemplateHeaderZone = true;				// 是否使用全局模版
        var _useTemplateFooterZone = true;				// 是否使用全局模版

        var _mallOpen = false;
        var _couponOpen = false

        var toolBoxShowView = false;
        var toolBoxShowSet = false;


        var _navStyleData = {"no":true,"s":0,"ns":{"w":601,"h":-1},"cs":{"w":601,"h":-1},"np":{},"ncp":{"y":1,"t":45,"r":-1,"b":-1,"l":493,"hl":351,"ht":80},"cp":{"y":0,"t":-1,"l":-1},"nis":{"w":-1,"h":-1},"gt":{"f":"微软雅黑","s":16,"w":0,"c":"#4d4d4d","y":0},"ht":{"c":"#ffffff","y":0},"nb":{"c":"#000","f":"","r":0,"p":"","y":0},"cb":{"c":"#000","f":"","r":0,"p":"","y":0},"nib":{"c":"#000","r":0,"f":"","p":"","y":0},"nihb":{"c":"#fe8300","f":"AD0Ig8H8BBAEGAAg6_aUwgUotIO4ggEwZDgo","r":-1,"p":"http://10428547.s61i.faiusr.com/4/AD0Ig8H8BBAEGAAg6_aUwgUotIO4ggEwZDgo.png","y":0},"niss":{"w":-1,"h":-1},"nisb":{"c":"#000","r":0,"f":"","p":"","y":0},"nsigt":{"f":"微软雅黑","s":16,"w":0,"c":"#ffffff","ta":0,"y":0},"nsiht":{"c":"#ffffff","y":0},"nsis":{"w":-1,"h":-1},"nsib":{"c":"#fe8300","r":0,"f":"","p":"","y":0},"nsihb":{"c":"#ff9626","r":0,"f":"","p":"","y":0},"nsiho":0,"nmove":1,"v":2,"ntf":{"t":0,"ht":0},"nsmt":{},"nsmb":{},"nrs":{"n":{"t":0},"c":{"t":0},"i":{"t":0},"smt":{"t":0},"smb":{"t":0},"si":{"t":0},"is":{"t":0},"sis":{"t":0},"tmt":{"t":0},"tmb":{"t":0},"ti":{"t":0},"tis":{"t":0}},"nsw":{"n":{"t":0},"c":{"t":0},"i":{"t":0},"sm":{"t":0},"si":{"t":0},"is":{"t":0},"sis":{"t":0}},"nbr":{"n":{"t":0},"i":{"t":0},"sm":{"t":0},"si":{"t":0},"is":{"t":0},"sis":{"t":0},"tm":{"t":0},"ti":{"t":0},"tis":{"t":0}},"ntmt":{},"ntmb":{}};				      // 栏目导航样式
        var _navHidden =false;                                  //true:隐藏；flase：显示
        var _siteDemo = false;



        var _backToTop = true;
        var _aid = 13775917;
        var _templateLayout = _templateDefLayout.NAV_FLOAT;
        var _webBannerHeight = -1;
        var _isTemplateVersion2 = true;
        var _uiMode= false;

        var _choiceCurrencyVal = "￥";
        var _moduleAnimationPercent = -1;

        var _useTemplateBackground = true;		// 是否使用模版

	</script>

	<script type="text/javascript">
        var fk_old_onload = window.onload;
        window.onload = function(){
            Site.cacheModuleFunc.runSiteInit();
            if(typeof fk_old_onload == "function"){
                fk_old_onload.apply(this, arguments);
            }

            Site.pageOnload();
        };

        Site.beforeUnloadFunc();

        $LAB.script("http://1.ss.faisys.com/js/photoSlide.min.js?v=201702271724");
        $LAB.script("http://1.ss.faisys.com/js/imageEffect.min.js?v=201703131745")
            .wait(function () {
                jzUtils.trigger({
                    "name": "ImageEffect.FUNC.BASIC.Init",
                    "base":Site
                });
            });

	</script>

</body>
</html>
<!-- 右侧主体内容结束 -->