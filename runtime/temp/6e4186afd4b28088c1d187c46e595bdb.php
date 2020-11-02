<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"./template/pc/rainbow/user\account.html";i:1495107366;s:38:"./template/pc/rainbow/user\header.html";i:1495107366;s:36:"./template/pc/rainbow/user\menu.html";i:1495107366;s:46:"./template/pc/rainbow/public\footer_index.html";i:1495107366;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的积分-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
		<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<link href="__PUBLIC__/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
		<script src="__PUBLIC__/plugins/daterangepicker/moment.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
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
			       	<span>我的积分</span>
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
							<div class="goodpiece">
								<h1>我的积分</h1>
								<!--<a href=""><span class="co_blue">积分规则</span></a>-->
							</div>
							<div class="shopcard myjfhg ma-to-20 p">
								<div class="cuschan">
									<span class="kycha"><i class="kyjf"></i>目前可用积分：</span>
									<span class="co"><?php echo $user['pay_points']; ?></span>
									<a class="jfhg" href="<?php echo U('Home/Goods/integralMall'); ?>">积分换购</a>
								</div>
								<div class="cuschan">
									<span class="kycha"><i class="dsxjf"></i>目前可用余额：</span>
									<span class="co"><?php echo $user['user_money']; ?></span>
								</div>
						<!--		<div class="cuschan">
									<span class="kycha"><i class="gqjf"></i>即将过期积分：</span>
									<span class="co">0</span>
								</div>-->
							</div>
							<div class="time-sala timsearch">
								<ul>
									<li class="<?php if(\think\Request::instance()->param('type') == null OR \think\Request::instance()->param('type') == 0): ?>red<?php else: ?>mal-l<?php endif; ?>"><a href="<?php echo U('Home/User/account'); ?>">积分明细</a></li>
									<!--<li class="<?php if(\think\Request::instance()->param('type') == 1): ?>red<?php else: ?>mal-l<?php endif; ?>"><a href="<?php echo U('Home/User/account',array('type'=>1)); ?>">积分累计</a></li>-->
                                    <!--<li class="<?php if(\think\Request::instance()->param('type') == 2): ?>red<?php else: ?>mal-l<?php endif; ?>"><a href="<?php echo U('Home/User/account',array('type'=>2)); ?>">积分消费</a></li>-->
								</ul>

								<div class="time-qjc" style="display: block;">
									  <!--下单时间：<input type="text" id="order_start" name="order_start" value="<?php echo \think\Request::instance()->param('order_start'); ?>">-->
									  <!--<span>至</span>-->
									  <!--<input type="text" id="order_end" name="order_end" value="<?php echo \think\Request::instance()->param('order_end'); ?>">-->
									  <!--<input class="cx_subb" type="submit" onclick="time_search();"  value="查询" />-->
								</div>
								<!--<div class="search-ss-lit">-->
									<!--<input type="text" id="order_sn" value="<?php echo \think\Request::instance()->param('order_sn'); ?>" placeholder="输入订单号查询">-->
									<!--<i class="litt-sexx" onclick="order_search();"></i>-->
								<!--</div>-->
							</div>
							<div class="he"></div>

							<!--<div class="searc_sx">
								<span>快捷筛选：</span>
								<a class="red" href="javascript:void(0);">全部</a>
								<a href="<?php echo U('Home/User/account',array_merge(array('type'=>I('type',0)),array('desc'=>'下单赠送积分'))); ?>">下单赠送积分</a>
								<a href="<?php echo U('Home/User/account',array_merge(array('type'=>I('type',0)),array('desc'=>'下单消费'))); ?>">下单消费</a>
								<a href="<?php echo U('Home/User/account',array_merge(array('type'=>I('type',0)),array('desc'=>'订单退货'))); ?>">订单退货</a>
								<a href="<?php echo U('Home/User/account',array_merge(array('type'=>I('type',0)),array('desc'=>'退款到用户余额'))); ?>">退款到用户余额</a>
							</div>-->
							<div class="card-list accbala bor-acc">
								<ul>
									<li><a href="javascript:void(0);">积分</a></li>
									<li><a href="javascript:void(0);">订单编号</a></li>
									<li><a href="javascript:void(0);">详情</a></li>
									<li><a href="javascript:void(0);">时间</a></li>
								</ul>
							</div>
							<?php if(empty($account_log) || (($account_log instanceof \think\Collection || $account_log instanceof \think\Paginator ) && $account_log->isEmpty())): ?>
								<p class="ncyekjl">--暂无记录--</p>
							<?php endif; if(is_array($account_log) || $account_log instanceof \think\Collection || $account_log instanceof \think\Paginator): $i = 0; $__LIST__ = $account_log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;if($log['pay_points'] != 0): ?>
									<div class="card-list c_contan accbala-list">
										<ul>
											<li class="<?php if($log[pay_points] > 0): ?>green_car<?php else: ?>red_car<?php endif; ?>">
												<a href="javascript:void(0);">
													<?php if($log[pay_points] > 0): ?>+<?php endif; ?>
													<?php echo $log['pay_points']; ?>
												</a>
											</li>
											<li><a href="javascript:void(0);"><?php echo (isset($log['order_sn']) && ($log['order_sn'] !== '')?$log['order_sn']:'无'); ?></a></li>
											<li><a href="javascript:void(0);"><?php echo $log['desc']; ?></a></li>
											<li><a href="javascript:void(0);"><?php echo date('Y-m-d H:i',$log['change_time']); ?></a></li>
										</ul>
									</div>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<div class="operating fixed" id="bottom">
								<div class="fn_page clearfix">
									<?php echo $page; ?>
								</div>
							</div>
						</div>
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
//			$(function(){
//				$('.time-sala ul li').click(function(){
//					$(this).addClass('red').siblings().removeClass('red');
//				})
//				$('.searc_sx a').click(function(){
//					$(this).addClass('red').siblings('a').removeClass('red');
//				})
//				$('#order_start').daterangepicker({
//					format:"YYYY-MM-DD",
//					singleDatePicker: true,
//					showDropdowns: true,
//					minDate:'2016-01-01',
//					maxDate:'2030-01-01',
//					startDate:"<?php echo date('Y-m-d,$now'); ?>",
//					locale : {
//						applyLabel : '确定',
//						cancelLabel : '取消',
//						fromLabel : '起始时间',
//						toLabel : '结束时间',
//						customRangeLabel : '自定义',
//						daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
//						monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
//						firstDay : 1
//					}
//				});
//				$('#order_end').daterangepicker({
//					format:"YYYY-MM-DD",
//					singleDatePicker: true,
//					showDropdowns: true,
//					minDate:'2016-01-01',
//					maxDate:'2030-01-01',
//					startDate:"<?php echo date('Y-m-d,$now'); ?>",
//					locale : {
//						applyLabel : '确定',
//						cancelLabel : '取消',
//						fromLabel : '起始时间',
//						toLabel : '结束时间',
//						customRangeLabel : '自定义',
//						daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
//						monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
//						firstDay : 1
//					}
//				});
//				$('.daterangepicker').hide();
//			})
//            //搜索订单号
//			function order_search()
//			{
//				var order_sn = $('#order_sn').val();
//				if(order_sn == ''){
//					layer.msg('请输入订单号', {icon: 2});
//				}
//				window.location.href="<?php echo U('Home/User/account',array('type'=>I('type',0)),''); ?>"+"/order_sn/"+order_sn;
//			}
//			function time_search()
//			{
//				var order_start = $('#order_start').val();
//				var order_end = $('#order_end').val();
//				if(order_start == '' || order_end == ''){
//					layer.msg('请输入完整的时间间隔', {icon: 2});
//				}
//				window.location.href="<?php echo U('Home/User/account',array('type'=>I('type',0)),''); ?>"+"/order_start/"+order_start+"/order_end/"+order_end;
//			}
		</script>
	</body>
</html>