<div class="xm-line-box goods-list-box">
    <div class="box-hd">
      <div class="filter-lists">
        <dl class="xm-filter-list xm-filter-list-first category-filter-list clearfix">
          <dd>
            <ul id="typeOrder" class="clearfix">
              <li class="<?php if ($this->_var['pager']['sort'] == 'sell_number'): ?>current<?php endif; ?> first"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sell_number&order=<?php if ($this->_var['pager']['sort'] == 'sell_number' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" rel="nofollow">销量</a></li>
              <li class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>current<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" rel="nofollow">最新</a></li>
              <li class="<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>current<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=DESC#goods_list" rel="nofollow">价格从高到低</a></li>
              <li class="<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>current<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=ASC#goods_list" rel="nofollow">价格从低到高</a></li>
              <li class="<?php if ($this->_var['pager']['sort'] == 'click_count'): ?>current<?php endif; ?>"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_count&order=DESC#goods_list" rel="nofollow">关注度</a></li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="more">
        
      </div>
    </div>
	
	<?php if ($this->_var['goods_list']): ?>
    <div class="box-bd">
      <div class="goods-list-section">
        <div class="xm-goods-list-wrap xm-goods-list-wrap-col20">
          <ul class="xm-goods-list clearfix">
		  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
            <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?> " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a> </span>
                  <div class="item-price"> <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?><span class="sep">|</span><del><?php echo $this->_var['goods']['market_price']; ?></del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments"><?php 
$k = array (
  'name' => 'goods_comment',
  'id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="<?php echo $this->_var['goods']['url']; ?>"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> <?php 
$k = array (
  'name' => 'goods_save_rate',
  'id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div> 
		 
                </div>
              </div>
            </li>
		<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
           
           
          </ul>
        </div>
        <div class="xm-pagenavi"> 
		<?php if ($this->_var['pager']['page_prev']): ?>
		<a class="numbers first iconfont" href="<?php echo $this->_var['pager']['page_prev']; ?>">&#xe604;</a>
		<?php else: ?>
		<span class="numbers first iconfont">&#xe604;</span>
		<?php endif; ?>
		<?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
		<span class="numbers current"><?php echo $this->_var['key']; ?></span>
		<?php else: ?>
		<a class="numbers" href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a>
		<?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['pager']['page_next']): ?>
		<a class="numbers last iconfont" href="<?php echo $this->_var['pager']['page_next']; ?>">&#xe605;</a> 
		<?php else: ?>
		<span class="numbers last iconfont">&#xe605;</span>
		<?php endif; ?>
		</div>
      </div>
    </div>
	<?php else: ?>
	<div class="xm-box search-title-box" style="margin-top:10px" >
        <div class="box-bd">
            <h3 class="search-title">抱歉，无相关的商品</h3>
         </div>
    </div>
	<?php endif; ?>
  </div>
 
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<script type="text/javascript">
    jQuery(function($) {
        var $goodsList = $('.xm-goods-list');

        $goodsList.on({
            'mouseenter': function() {
                $(this).addClass('active');
            },
            'mouseleave': function() {
                $(this).removeClass('active');
            }
        }, 'li');

        
    });
</script>