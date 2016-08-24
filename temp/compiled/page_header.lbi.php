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

<div class="site-topbar">
  <div class="container">
    <div class="topbar-nav">
      <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
      <a href="<?php echo $this->_var['nav']['url']; ?>" 
      <?php if ($this->_var['nav']['opennew'] == 1): ?>
      target="_blank"
      <?php endif; ?>
      ><?php echo $this->_var['nav']['name']; ?></a>
      <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
      <span class="sep">|</span>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div class="topbar-info J_userInfo"> <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
  </div>
</div>

<div class="site-header container" id="site_header">
  <div class="site-logo"> <a class="logo" href="index.php"><img src="themes/xiaomi/images/logo.gif" /> </a><span>|</span>
    <li>
       <p>智能手机</p>
       <p>品质如一</p>
    </li>
   </div>
  <div class="header-info">
    <div class="search-section">
      <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
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
      <form id="J_searchForm" class="search-form clearfix" action="search.php" method="get" onSubmit="return checkSearchForm()" >
        <input class="search-text" type="search" name="keywords" id="keyword" autocomplete="off" value="" placeholder="搜索您需要的商品" />
        <input type="submit" class="search-btn iconfont" value="&#xe630;" />
        <!--[if IE 6]><div class="ie6-fix"></div><![endif]-->
        <div class="hot-words"> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
      </form>
    </div>
    <div class="cart-section"> <a id="J_miniCart" class="mini-cart" href="flow.php"><i class="iconfont">&#xe609;</i>购物车<span class="mini-cart-num J_cartNum">(<?php 
$k = array (
  'name' => 'cart_count',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>)</span></a>
      <div id="J_miniCartList" class="mini-cart-list">
        		<?php 
$k = array (
  'name' => 'cart_data',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
    </div>
  </div>
  <div class="header-nav clearfix">
    <div id="J_categoryContainer" class="nav-category"> <a class="btn-category-list" href="catalog.php">商品总汇</a>
      <div class="nav-category-section" style="display: none;">
        <ul class="nav-category-list">
          <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'cat');$this->_foreach['cat_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_tree']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['cat']):
        $this->_foreach['cat_tree']['iteration']++;
?>
		  <li class="nav-category-item <?php if ($this->_foreach['cat_tree']['iteration'] == 0): ?>nav-category-item-first<?php endif; ?>">
            <div class="nav-category-content"><a id="uu"  class="title_<?php echo $this->_var['sn']; ?>" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
           
		    <!--  <div class="links">
			  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
			<!--  <?php if ($this->_foreach['cat_cat_id']['iteration'] < 3): ?>
			  <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
			  <?php endif; ?>
			  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<!--  </div>
			  -->
			  <?php if ($this->_var['cat']['cat_id']): ?>
              <div class="nav-category-children">
                <ul class="children-list">
				<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
                                <?php if ($this->_foreach['cat_cat_id']['iteration'] < 7): ?>
                  <li><a href="<?php echo $this->_var['child']['url']; ?>"><img src="themes/xiaomi/images/index/cat_<?php echo $this->_var['child']['id']; ?>.jpg" alt=""><span class="text"><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>
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
                  <li><a href="<?php echo $this->_var['child']['url']; ?>"><img src="themes/xiaomi/images/index/cat_<?php echo $this->_var['child']['id']; ?>.jpg" alt=""><span class="text"><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>   
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
                  <li><a href="<?php echo $this->_var['child']['url']; ?>"><img src="themes/xiaomi/images/index/cat_<?php echo $this->_var['child']['id']; ?>.jpg" alt=""><span class="text"><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>   
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
                  <li><a href="<?php echo $this->_var['child']['url']; ?>"><img src="themes/xiaomi/images/index/cat_<?php echo $this->_var['child']['id']; ?>.jpg" alt=""><span class="text"><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>   
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
                  <li><a href="<?php echo $this->_var['child']['url']; ?>"><img src="themes/xiaomi/images/index/cat_<?php echo $this->_var['child']['id']; ?>.jpg" alt=""><span class="text"><?php echo htmlspecialchars($this->_var['child']['name']); ?></span></a></li>   
				    <?php endif; ?>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                 </ul>
					

                
              </div>
			  <?php endif; ?>
            </div>
          </li>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
    </div>
    <div class="nav-main">
      <ul class="nav-main-list J_menuNavMain clearfix">
        <li class="nav-main-item1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>current<?php endif; ?>"> <a  href="category.php?id=43"><span class="text">手机</span></a> </li>
        <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
        <li class="nav-main-item <?php if ($this->_var['nav']['active'] == 1): ?>current<?php endif; ?>"> <a  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><span class="text"><?php echo $this->_var['nav']['name']; ?></span><!--<span class="arrow"></span>--></a> <?php 
$k = array (
  'name' => 'menu_goods',
  'url' => $this->_var['nav']['url'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
	<div class="button"></div>
  </div>
   
  <div class="open-buy-info"></div>
 
</div>

