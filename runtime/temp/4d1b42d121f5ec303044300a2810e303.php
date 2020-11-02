<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"./template/pc/rainbow/user\coupon.html";i:1495107366;s:38:"./template/pc/rainbow/user\header.html";i:1495107366;s:36:"./template/pc/rainbow/user\menu.html";i:1495107366;s:46:"./template/pc/rainbow/public\footer_index.html";i:1495107366;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>我的优惠券</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body class="bg-f5">
<script src="__PUBLIC__/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="__PUBLIC__/static/js/layer/layer.js" type="text/javascript"></script>
<style>
	.list1 li{float:left;}
</style>
<div class="top-hander home-index-top p">
	<div class="w1224 pr">
		<div class="fl">
			<?php if(!(empty($user) || (($user instanceof \think\Collection || $user instanceof \think\Paginator ) && $user->isEmpty()))): ?>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/index'); ?>"><?php echo $user['nickname']; ?></a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/message_notice'); ?>">
					消息<?php if($user_message_count > 0): ?>（<span class="red"> <?php echo $user_message_count; ?> </span>）<?php endif; ?>
				</a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/logout'); ?>">退出</a>
			</div>
			<?php else: ?>
			<div class="fl ler">
		        <a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
		        <span class="spacer"></span>
		        <a href="<?php echo U('Home/user/reg'); ?>">注册</a>
		    </div>
			<?php endif; ?>
			<div class="fl spc"></div>
			<div class="sendaddress pr fl">
				<!-- 收货地址，物流运费 -start-->
				<ul class="list1">
					<li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
					<li class="summary-stock though-line" style="margin-top:2px">
						<div class="dd" style="border-right:0px;">
							<div class="store-selector add_cj_p">
								<div class="text" style="width: 150px;background: inherit;top: 2px;border-left: 0"><div></div><b style="top: 2px"></b></div>
								<div onclick="$(this).parent().removeClass('hover')" class="close"></div>
							</div>
						</div>
					</li>
				</ul>
				<!--<i class="jt-x"></i>-->
				<!-- 收货地址，物流运费 -end-->
				<!--<span>深圳<i class="jt-x"></i></span>-->
			</div>
		</div>
		<div class="top-ri-header fr">
			<ul>
				<li><a href="<?php echo U('/Home/User/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('/Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li><a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">客户服务</a></li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="jt-x"></i>
						<div class="conta-hv-nav">
							<ul>
								<li>
									<a href="<?php echo U('/Home/Activity/group_list'); ?>">团购</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo">
			<a href="/" class="logo"> <img src="__STATIC__/images/logo2.png"></a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="shopingcar-index fr">
			<div class="u-g-cart fr fixed" id="hd-my-cart">
				<a href="<?php echo U('Home/Cart/cart'); ?>">
					<p class="c-n fl">我的购物车</p>

					<p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity">0</span>)
						<i class="i-c oh"></i>
					</p>
				</a>

				<div class="u-fn-cart u-mn-cart" id="show_minicart">
					<div class="minicartContent" id="minicart">
					</div>
					<!--有商品时-e-->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->

<div class="home-index-middle">
    <div class="w1224">
        <div class="g-crumbs">
            <a href="<?php echo U('Home/User/index'); ?>">我的商城</a>
            <i class="litt-xyb"></i>
            <span>我的优惠券</span>
        </div>
        <div class="home-main">
            <div class="le-menu fl">
	<div class="menu-ul">
		<ul>
			<li class="ma"><i class="account-acc1"></i>交易中心</li>
			<li><a href="<?php echo U('Home/User/order_list'); ?>">我的订单</a></li>
			<!--<li><a href="">我的预售</a></li>-->
			<li><a href="<?php echo U('Home/User/comment'); ?>">我的评价</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc2"></i>资产中心</li>
			<li><a href="<?php echo U('Home/User/coupon'); ?>">我的优惠券</a></li>
			<!--<li><a href="">我的购物卡</a></li>-->
			<li><a href="<?php echo U('Home/User/recharge'); ?>">账户余额</a></li>
			<li><a href="<?php echo U('Home/User/account'); ?>">我的积分</a></li>
			<!--<li><a href="">积分换券明细</a></li>-->
		</ul>
		<ul>
			<li class="ma"><i class="account-acc3"></i>关注中心</li>
			<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
			<!--<li><a href="">曾经购买</a></li>-->
			<li><a href="<?php echo U('Home/User/visit_log'); ?>">我的足迹</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc4"></i>个人中心</li>
			<li><a href="<?php echo U('Home/User/info'); ?>">个人信息</a></li>
			<!--<li><a href="<?php echo U('Home/User/bind_auth'); ?>">账号绑定</a></li>-->
			<li><a href="<?php echo U('Home/User/address_list'); ?>">地址管理</a></li>
			<!--<li><a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a></li>-->
		</ul>
		<ul>
			<li class="ma"><i class="account-acc5"></i>服务中心</li>
			<!--<li><a href="">我的发票</a></li>-->
			<li><a href="<?php echo U('Home/User/return_goods_list'); ?>">退货管理</a></li>
		</ul>
	</div>
</div>
            <div class="ri-menu fr">
                <div class="menumain p">
                    <div class="coup-tit p">
                        <h1>我的优惠券</h1>
                        <div class="tu">
                            <!--<div class="sclq lqs">-->
                                <!--<i class="top-up"></i>-->
                                <!--<span><a href="">充值优惠券</a></span>-->
                            <!--</div>-->
                            <!--<div class="sclq">-->
                                <!--<i class="top-up lq"></i>-->
                                <!--<span><a href="">领取更多优惠券</a></span>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="menumain p me-matin">
                    <div class="cp-type-tit p">
                        <div class="type p">
                            <ul class="ty-fir">
                                <li>优惠券类型：</li>
                                <!--<li class="coupon-t-s">-->
                                    <!--<a href="javascript:void(0);"><span class="alltype">全部类型</span><i class="jt-x"></i></a>-->
                                    <!--<ul class="sec-ul">-->
                                        <!--<li class="red">-->
                                            <!--<a href="javascript:void(0);">全部类型</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">自营</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">商城</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">环球购</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">抵用券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">免邮券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">礼品券</a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);">以旧换新券</a>-->
                                        <!--</li>-->
                                    <!--</ul>-->
                                <!--</li>-->
                                <li class="coupon-t-s sbs">
                                    <a href="javascript:void(0);"><span class="alltype"><?php if(\think\Request::instance()->param('type') == 1): ?>已使用<?php elseif(\think\Request::instance()->param('type') == 2): ?>已失效<?php else: ?>未使用<?php endif; ?></span><i class="jt-x"></i></a>
                                    <ul class="sec-ul">
                                        <li <?php if(\think\Request::instance()->param('type') == ''): ?>class="red"<?php endif; ?>>
                                        <a href="<?php echo U('Home/User/coupon'); ?>">未使用</a>
                                        </li>
                                        <li <?php if(\think\Request::instance()->param('type') == 1): ?>class="red"<?php endif; ?>>
                                            <a href="<?php echo U('Home/User/coupon',array('type'=>1)); ?>">已使用</a>
                                        </li>
                                        <li <?php if(\think\Request::instance()->param('type') == 2): ?>class="red"<?php endif; ?>>
                                            <a href="<?php echo U('Home/User/coupon',array('type'=>2)); ?>">已失效</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="ty-las">
                                <!--<li class="red">-->
                                    <!--<a href="javascript:void(0);">默认</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="javascript:void(0);">最近到账</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<a href="javascript:void(0);">即将过期</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="howuse">
                        <a href="" style="display: none">如何使用优惠券？</a>
                    </div>
                    <?php if(empty($coupon_list) || (($coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator ) && $coupon_list->isEmpty())): ?>
                        <p class="norecode" style="font-size: 12px;color: #999999;padding: 50px 0;text-align: center;">没有记录！</p>
                    <?php endif; ?>
                    <div class="coupon-items">
                        <?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?>
                        <div class="coupon-item <?php if(\think\Request::instance()->param('type') == ''): ?>coupon-item-d<?php else: ?>coupon-item-dgray<?php endif; ?>">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong><?php echo $coupon['money']; ?></strong>
                                </div>
                                <div class="c-limit">
                                    【<?php echo $coupon['name']; ?>】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">
                                    <?php if(\think\Request::instance()->param('type') == 1): ?>
                                        使用时间：<?php echo date("Y.m.d",$coupon['use_time']); else: ?>
                                        有效期至：<?php echo date("Y.m.d",$coupon['use_end_time']); endif; ?>

                                </div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">订单满<?php echo $coupon['condition']; ?>使用</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item" style="display: none">
                                        <span class="label">券编号：</span>
                                        <span class="txt"><?php echo $coupon['code']; ?></span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <?php if(\think\Request::instance()->param('type') == 1): ?>
                                        <a class="btncoupon" ><span class="txt">已使用</span><b></b></a>
                                    <?php elseif(\think\Request::instance()->param('type') == 2): ?>
                                        <a class="btncoupon" ><span class="txt">已失效</span><b></b></a>
                                    <?php else: ?>
                                        <a class="btncoupon" href="/"><span class="txt">立即使用</span><b></b></a>
                                    <?php endif; ?>
                                </div>
                                <?php if(\think\Request::instance()->param('type') == 1): ?>
                                    <div class="ftx-03 ac mt5">此优惠券已使用</div>
                                <?php elseif(\think\Request::instance()->param('type') == 2): ?>
                                    <div class="ftx-03 ac mt5">此优惠券已失效</div>
                                <?php else: ?>
                                    <div class="ftx-03 ac mt5">此优惠券可以使用</div>
                                <?php endif; ?>
                            </div>
                            <div class="c-del"></div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="page p">
                    <?php echo $page; ?>
                </div>
                <!--好券推荐-s-->
                <!--<div class="menumain ma-to-20 p">
                    <div class="goodpiece">
                        <h1>好卷推荐</h1>
                        <a href=""><span>更多<i class="top-up tu_more"></i></span></a>
                    </div>
                    <div class="coupon-items ma-to-20">
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-item coupon-item-d">
                            <div class="c-type">
                                <div class="c-price">
                                    <em>¥</em>
                                    <strong>20</strong>
                                </div>
                                <div class="c-limit">
                                    【满21可用】
                                </div>
                                <div class="c-time">&nbsp;&nbsp;</div>
                                <div class="c-time">2017.03.28-2017.03.30</div>
                                <div class="c-type-top"></div>
                                <div class="c-type-bottom"></div>
                            </div>
                            <div class="c-msg">
                                <div class="c-range">
                                    <div class="range-item">
                                        <span class="label">限品类：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">限平台：</span>
                                        <span class="txt">全平台</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">券编号：</span>
                                        <span class="txt">9754238363</span>
                                    </div>
                                    <div class="range-item">
                                        <span class="label">&nbsp;&nbsp;</span>
                                        <span class="txt">&nbsp;&nbsp;</span>
                                    </div>
                                </div>
                                <div class="op-btns">
                                    <a class="btncoupon" href=""><span class="txt">立即领取</span><b></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--好券推荐-s-->
            </div>
        </div>
    </div>
</div>
<!--footer-s-->
<div class="footer p">
    <div class="mod_service_inner">
        <div class="w1224">
            <ul>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_duo">多</h5>
                        <p>品类齐全，轻松购物</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_kuai">快</h5>
                        <p>多仓直发，极速配送</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_hao">好</h5>
                        <p>正品行货，精致服务</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_sheng">省</h5>
                        <p>天天低价，畅选无忧</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="w1224">
    <div class="footer-ewmcode">
        <div class="foot-list-fl">
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <ul>
                    <li class="foot-th">
                        <?php echo $v[cat_name]; ?>
                    </li>
                    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,1);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                        <li>
                            <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </div>
        <div class="QRcode-fr">
            <ul>
                <li class="foot-th">客户端</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
            <ul>
                <li class="foot-th">微信</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
        </div>
    </div>
    <div class="mod_copyright p">
        <div class="grid-top">
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
                <span>|</span>
            <?php endforeach; ?>
            <a href="javascript:void (0);">客服热线:<?php echo $tpshop_config['shop_info_phone']; ?></a>
        </div>
        <p>Copyright © 2016-2025 TPshop商城 版权所有 保留一切权利 备案号:粤00-123456号</p>

        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
        </p>
    </div>
</div>
</div>
<!--footer-e-->
<script type="text/javascript">
    $(function() {
        $('.sec-ul li').click(function() {
            var text = $(this).find('a').text();
            $(this).parent().siblings().find('.alltype').text(text);
            $(this).addClass('red').siblings().removeClass('red');
        })
        $('.ty-las li').click(function() {
            $(this).addClass('red').siblings().removeClass('red');
        })
    })
    $(function(){
        $('.coupon-items .coupon-item').hover(function(){
            $(this).addClass('coupon-item-hover');
        },function(){
            $(this).removeClass('coupon-item-hover');
        })
    })
</script>
</body>
</html>