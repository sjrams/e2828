<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E家数码</title>
<link rel="stylesheet" href="themes/xiaomi/css/base.min.css?2014050501" />
<script src="themes/xiaomi/js/jquery.js"></script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
var isWidescreen=screen.width<1200;
if (isWidescreen){
document.getElementsByTagName("body")[0].className="w950";
document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
}
</script>
<script src="http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/lx.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<header class="main-header">
    	<div class="navtop">
        	<div class="auto">
            	<span><a href="index.php">欢迎光临汕头E家数码-最新手机报价网</a></span>
                <div class="post">
                    <ul>
                        <li><a href="user.php"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></li>
                     
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo auto">
        	<div class="fixed">
            	<div class="left">
                	<a href="#" class="img"><img src="themes/xiaomi/images/logo.jpg" /></a>
                    <span>|</span>
                </div>
                <div class="left">
                    <p>智能手机</p>
                    <p>品质如一</p>
                </div>
                <div class="form">
			
	<script type="text/javascript">
		
			<!--
				function checkSearchForm()
				{
					if(document.getElementById('search').value)
						{
							return true;
						}
					else
						{
							alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
							return false;
						}
				}
			-->
		
	</script>
	<script language="javascript">
		function drop_cart_goods(id)
			{
				$.ajax({
					type:"POST",
					url:"flow.php?step=drop_cart_goods&id=" + id,
					cache:false,
					dataType:'json',     //接受数据格式
					data:'',
					success:function(result){
						$('#J_miniCartList').html(result.message);
						$('.J_cartNum').html('(' + result.goods_num + ')');
					}
					});
			}
	</script>
	<script type="text/javascript">
		$(function(){
			$(".pp").mouseover(function(){
				$(this).addClass("c").siblings("li");
				}).mouseout(function(){
				$(this).removeClass("c").siblings("li");
			});
		});  	
	</script>
			<form id="J_searchForm"  action="search.php" method="get" onSubmit="return checkSearchForm()" >
				<input  type="search" name="keywords" id="search" autocomplete="off" value="" placeholder="搜索您需要的商品" />
				<input type="submit" id="submit" value="&#xe60c;" />		
			</form>
					
                    <a href="flow.php">购物车(0)</a>
                </div>
            </div>
        </div>
			<div class="nav">
				<div class="wh">
					<div class="top">
						<div class="first"><a href="catalog.php" class="text1">商品总汇</a></div>
						
							<ul>
								<li class="one <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>current<?php endif; ?>"> 
									<a  href="category.php?id=43"><span class="text">手机</span></a>
								</li>
								<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
									<li class="other two_<?php echo $this->_var['sn']; ?> <?php if ($this->_var['nav']['active'] == 1): ?>current<?php endif; ?>"> 
										<a  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>>
											<span class="text"><?php echo $this->_var['nav']['name']; ?></span>
											<!--<span class="arrow"></span>-->
										</a> 
										<?php 
$k = array (
  'name' => 'menu_goods',
  'url' => $this->_var['nav']['url'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
									</li> 
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
							
					</div>
					<div class="bottom"></div>
				</div>
			</div>
			
    </header>
	