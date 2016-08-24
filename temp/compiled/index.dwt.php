<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E家数码</title>
<script src="http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="themes/xiaomi/js/lx.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />

</head>

<body>
	<?php echo $this->fetch('library/page_header.lbi'); ?>
    <main class="main-content">
			<div class=" mainsds auto">
				<div class="navleft">
				
				
					<ul class="ul" > 
						<?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'cat');$this->_foreach['cat_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_tree']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['cat']):
        $this->_foreach['cat_tree']['iteration']++;
?> 
							                      
							<li  class="li"><div  class="pp"><a id="a" class="img<?php echo $this->_var['sn']; ?>" href="<?php echo $this->_var['cat']['url']; ?>" ><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
								<?php if ($this->_var['cat']['cat_id']): ?>
									<div class="nav-category-children">
										  <ul class="children-list">
												<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
													 <?php if ($this->_foreach['cat_cat_id']['iteration'] < 7): ?>
														 <li ><a href="<?php echo $this->_var['child']['url']; ?>"><span ><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
													 <?php endif; ?>
											   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										  </ul>
										   <ul class="children-list">
												<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
													 <?php if ($this->_foreach['cat_cat_id']['iteration'] > 6 && $this->_foreach['cat_cat_id']['iteration'] < 13): ?>
														 <li ><a href="<?php echo $this->_var['child']['url']; ?>"><span ><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
													 <?php endif; ?>
											   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										  </ul>
										   <ul class="children-list">
												<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
													 <?php if ($this->_foreach['cat_cat_id']['iteration'] > 12 && $this->_foreach['cat_cat_id']['iteration'] < 19): ?>
														 <li ><a href="<?php echo $this->_var['child']['url']; ?>"><span ><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
													 <?php endif; ?>
											   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										  </ul>
										   <ul class="children-list">
												<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
													 <?php if ($this->_foreach['cat_cat_id']['iteration'] > 18 && $this->_foreach['cat_cat_id']['iteration'] < 25): ?>
														 <li ><a href="<?php echo $this->_var['child']['url']; ?>"><span ><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
													 <?php endif; ?>
											   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										  </ul>
										   <ul class="children-list">
												<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
													 <?php if ($this->_foreach['cat_cat_id']['iteration'] > 24): ?>
														 <li ><a href="<?php echo $this->_var['child']['url']; ?>"><span ><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
													 <?php endif; ?>
											   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										  </ul>
									</div>
								<?php endif; ?>  
							</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>      
					  </ul>
				  
				</div>
				<div class="right">
					<div class="top">
						<div class="slideShow">
							<ul>
							<?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?>
								<li><a href="<?php echo $this->_var['playerdb']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['playerdb']['src']; ?>" /></a></li>
							 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
							</ul>
							<span class="left"></span>
							<span class="right"></span>
						</div>        
						<div class="showNav">          
							<ul>
							 
							<?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?>
							    <?php if ($this->_var['sn'] == 0): ?>
								<li class="active">
									<button  type="button" data-role="none"></button>
								</li>
								<?php else: ?>
								<li>
									<button  type="button" data-role="none"></button>
								</li>
								<?php endif; ?>
							 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
							</ul>
						</div>
					</div>
					<div class="bottom">
					 <?php $_from = get_advlist_by_id(1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
						<div class="bottomlitte"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img alt="3" src="<?php echo $this->_var['ad']['image']; ?>" /></a></div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
					</div>
				</div>
				<div style="clear:both"></div>
			</div>
        <div class="mainnr auto">
        	<p class="bktj">爆款推荐</p>
            <div class="line">
            	<ul>
                	<li style="width:96px"><a href="#" style="width:95px">默认排序</a></li>
                    <li><a href="#">销量</a></li>
                    <li><a href="#">人气</a></li>
                    <li><a href="#">制式</a></li>
                    <li><a href="#">总价</a></li>
                </ul>
                <div class="input">
                    <input /> -
                    <input />
                </div>
                <div>
					
                </div>
            </div>
            <div class="mainbk">
            	<div class="left">
					<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
					<?php if ($this->_foreach['index_image']['iteration'] == 1): ?>                	
                    <div class="ring"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
					 <?php endif; ?>	
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
						<?php if ($this->_foreach['new_goods']['iteration'] == 1): ?>
							<div class="mring mring1">
								<span class="label">
									<span class="title">
										<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
											<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
										</a>
									</span>
									<span class="jiage">
										<?php if ($this->_var['goods']['promote_price'] != ""): ?>
											<?php echo $this->_var['goods']['promote_price']; ?>
										<?php else: ?>
											<?php echo $this->_var['goods']['shop_price']; ?>
										<?php endif; ?>
									</span>
								</span>
								<span class="bigimg">
									<a  href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/>
									</a>
								</span>
							</div>
						<?php endif; ?>	
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<div class="mring">
					<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
						<?php if ($this->_foreach['new_goods']['iteration'] == 2): ?>
								<div class="min">
									<span class="label minlabel">
										<span class="title">
											<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
												<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
											</a>
										</span>
										<span class="jiage">
											<?php if ($this->_var['goods']['promote_price'] != ""): ?>
												<?php echo $this->_var['goods']['promote_price']; ?>
											<?php else: ?>
												<?php echo $this->_var['goods']['shop_price']; ?>
											<?php endif; ?>
										</span>
									</span>
									<span class="minimg">
										<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
											<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
										</a>
									</span>
								</div>
							
						<?php endif; ?>	
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
						<?php if ($this->_foreach['new_goods']['iteration'] == 3): ?>
							
								<div class="min">
									<span class="label minlabel">
										<span class="title">
											<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
												<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
											</a>
										</span>
										<span class="jiage">
											<?php if ($this->_var['goods']['promote_price'] != ""): ?>
												<?php echo $this->_var['goods']['promote_price']; ?>
											<?php else: ?>
												<?php echo $this->_var['goods']['shop_price']; ?>
											<?php endif; ?>
										</span>
									</span>
									<span class="minimg">
										<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
											<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
										</a>
									</span>
								</div>
							
						<?php endif; ?>	
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<div class="mring">
						<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
							<?php if ($this->_foreach['new_goods']['iteration'] == 4): ?>
								<span class="label">
									<span class="title">
										<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
											<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
										</a>
									</span>
									<span class="jiage">
										<?php if ($this->_var['goods']['promote_price'] != ""): ?>
											<?php echo $this->_var['goods']['promote_price']; ?>
										<?php else: ?>
											<?php echo $this->_var['goods']['shop_price']; ?>
										<?php endif; ?>
									</span>
								</span>
								<span class="bigimg">
									<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
									</a>
								</span>
							<?php endif; ?>	
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
                    <div class="mring">
						<?php $_from = get_cat_new_goods(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
							<?php if ($this->_foreach['new_goods']['iteration'] == 5): ?>
								<span class="label">
									<span class="title">
										<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
											<?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
										</a>
									</span>
									<span class="jiage">
										<?php if ($this->_var['goods']['promote_price'] != ""): ?>
											<?php echo $this->_var['goods']['promote_price']; ?>
										<?php else: ?>
											<?php echo $this->_var['goods']['shop_price']; ?>
										<?php endif; ?>
									</span>
								</span>
								<span class="bigimg">
									<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"  />
									</a>
								</span>
							<?php endif; ?>	
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
                <div class="right">
                	<div class="crbb">
                    	<span class="img"><img src="themes/xiaomi/images/175×175.jpg" /></span>
                        <span class="bg"><img src="themes/xiaomi/images/标志/CRBB.png" /></span>
                    </div>
                    <div class="jjsy">
                    	<span class="img"><img src="themes/xiaomi/images/175×175.jpg" /></span>
                        <span class="bg"><img src="themes/xiaomi/images/标志/JJSY.png" /></span>
                    </div>
                    <div class="jyjx">
                    	<span class="img"><img src="themes/xiaomi/images/175×175.jpg" /></span>
                        <span class="bg"><img src="themes/xiaomi/images/标志/JYJX.png" /></span>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="yjzp">
            	<div class="zplogo"><img src="themes/xiaomi/images/海报图/E家智品logo.jpg" /></div>
                <div class="zplogo"><img src="themes/xiaomi/images/海报图/e家智品1.jpg" /></div>
                <div class="zplogo"><img src="themes/xiaomi/images/海报图/e家智品2.jpg" /></div>
                <div class="zplogo"><img src="themes/xiaomi/images/海报图/e家智品3.jpg" /></div>
            </div>
            <div style="clear:both"></div>
            <div class="zxzxsb">
            	<div class="zxsbleft">
                	<div class="top">资讯新闻</div>
                    <div class="bottom">
                    	<div class="img"><img src="themes/xiaomi/images/资讯图.jpg" /></div>
                        <div>
                        	<dl>
                            	<dt>用大屏才过瘾是的飞机上的浪费</dt>
                                <dd>是的方式发放</dd>
                                <dd>防登革热个人</dd>
                                <dd>何为婚姻家庭日记</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="zxsbright">               	
                    <div class="mring mring1">
                    	<span class="label">
                        	<span class="title">苹果ipone SE</span>
                            <span class="jiage">¥2820.00 销量:110件</span>
                        </span>
                        <span class="bigimg"><img src="themes/xiaomi/images/226×226.jpg" /></span>
                    </div>
                    <div class="ring"><img src="themes/xiaomi/images/海报图/资讯配件.jpg" /></div>
                    <div class="mring">
                    	<div class="min">
                        	<span class="label minlabel">
                        		<span class="title">苹果ipone SE</span>
                           	 	<span class="jiage">¥2820.00 销量:110件</span>
                        	</span>
                        	<span class="minimg"><img src="themes/xiaomi/images/128×128.jpg" /></span>
                        </div>
                        <div class="min">
                        	<span class="label minlabel">
                        		<span class="title">苹果ipone SE</span>
                            	<span class="jiage">¥2820.00 销量:110件</span>
                        	</span>
                        	<span class="minimg"><img src="themes/xiaomi/images/128×128.jpg" /></span>
                        </div>
                    </div>
                    <div class="mring">
                    	<span class="label">
                        	<span class="title">苹果ipone SE</span>
                            <span class="jiage">¥2820.00 销量:110件</span>
                        </span>
                        <span class="bigimg"><img src="themes/xiaomi/images/226×226.jpg" /></span>
                    </div>
                    <div class="mring">
                    	<span class="label">
                        	<span class="title">苹果ipone SE</span>
                            <span class="jiage">¥2820.00 销量:110件</span>
                        </span>
                        <span class="bigimg"><img src="themes/xiaomi/images/226×226.jpg" /></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="main-footer">
    	<div class="service">
        	<div class="auto">
            	<ul>
                	<li>
                    	<img src="themes/xiaomi/images/正品保障.png" />
                    	<span>正品保障</span>
                    </li>
                    <li>
                    	<img src="themes/xiaomi/images/价钱.png" />
                    	<span>价格实惠</span>
                    </li>
                    <li>
                    	<img src="themes/xiaomi/images/维修.png" />
                    	<span>免费保修</span>
                    </li>
                    <li>
                    	<img src="themes/xiaomi/images/定位.png" />
                    	<span>互联网＋实体店</span>
                    </li>
                    <li>
                    	<img src="themes/xiaomi/images/闪电.png" />
                    	<span>百城速达</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="info auto">
        	<ul class="title">
            	<li class="titleli">
                	<p>购物指南</p>
                    <ul>
                    	<li>我的会员</li>
                        <li>购物流程图</li>
                        <li>补发货流程</li>
                        <li>验收及签收</li>
                    </ul>
                </li>
                <li class="titleli">
                	<p>支付方式</p>
                     <ul>
                    	<li>支付宝</li>
                        <li>微信支付</li>
                        <li>网银支付</li>
                        <li>门店伏线</li>
                    </ul>               
                </li>
                <li class="titleli">
                	<p>配送方式</p>
                     <ul>
                    	<li>门店自提</li>
                        <li>快递上门</li>
                    </ul>
                </li>
                <li class="titleli">
                	<p>售后服务</p>
                     <ul>
                    	<li>客户服务帮助</li>
                        <li>手机保修条例</li>
                        <li>E家保障</li>
                        <li>退换货流程</li>
                    </ul>
                </li>               
                <li class="titleli">
                	<p>关于我们</p>
                     <ul>
                    	<li>E家智品</li>
                        <li>诚聘英才</li>
                        <li>商业合作</li>
                        <li>联系我们</li>
                        <li>实体店面</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div style="clear:both"></div>
        <div class="copy">
        	<p>E家数码-高邦电子科技有限公司版权所有 粤ICP备15080705号</p>
            <p>Copyright 2009-2014,All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
