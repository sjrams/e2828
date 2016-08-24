<style>
.goods-recent .box-bd {
	padding-left:0px
}
.goods-recent {
	border:none
}
.goods-recent .box-hd .title {
	margin:0px;
	line-height:55px
}
.goods-recent .box-bd {
	padding-bottom:35px
}
.goods-recent .box-bd ul li {
	float:left;
	_display:inline;
	width:79px;
	height:79px;
	margin-right:10px;
	margin-top:10px
}
.goods-recent .box-bd ul li img {
	width:78px;
	height:78px;
	border:1px solid #fff
}
.goods-recent .box-bd ul li:hover img {
	border:1px solid #dfdfdf
}
</style>
<div class="xm-box goods-recent" id="goodsRectScan">
    <div class="box-hd">
      <div class="title"> 最近浏览 </div>
    </div>
    <div class="box-bd">
      <ul class="clearfix">
	  <?php $_from = get_history(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['historys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['historys']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['historys']['iteration']++;
?>
        <li> <a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"> <img src="<?php echo $this->_var['item']['goods_thumb']; ?>"> </a> </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
      </ul>
    </div>
  </div>
<div class="blank5"></div>
