
<style type="text/css">
  /*迷你购物车*/
  .shopbox {display: none; position: absolute; width: 300px;  overflow: hidden; padding-bottom: 10px; border: 1px solid #9eb219; background: #fff; font-size: 12px; z-index: 9999;}
  .shopbox a {font-size: 12px; text-decoration: none;}
  .shopbox h2 {height: 25px; margin: 0; padding: 0;}
  .shopbox h2 a {float: right; padding: 5px 10px 0 0;}
  .shopbox h2 a img {float: left; padding: 4px 4px 0 0;}
  .shopbox h2 a span {float: left; color: #FF0000; cursor: pointer;}

  .shopbox .spboxcontent {}
  .shopbox .spboxcontent .shopboxdetail {overflow: hidden;}
  .shopbox .spboxcontent .shopboxdetail .spboxleft {float: left; padding: 0 20px;}
  .shopbox .spboxcontent .shopboxdetail .spboxleft img {}
  .shopbox .spboxcontent .shopboxdetail .spboxright {float: left;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.spboxtitle {font-size: 14px; font-weight: bold;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.blank5 {}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.numstyle {font-weight: bold; color:  #FF0000;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.numstyle2 {font-weight: bold; color:  #FF0000; font-size: 14px;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p {margin: 0; padding: 0;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.num {padding: 10px 0;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv {}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.jxgwbtn {float: left; margin: 0 10px 0 0; color:  #FF0000; font-size: 14px; line-height: 27px;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.track {}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.track img {float: left;}
  .shopbox .spboxcontent .shopboxdetail span.blank15 {display: block; line-height: 0; font-size: 0; height: 0; clear: both;}
  
  .shopbox .spboxcontent .gmlist {padding: 15px 0 0; _padding-top: 10px; clear: both;}
  .shopbox .spboxcontent .gmlist h6 {margin: 0 10px; padding: 10px 0 10px 8px; color:  #FF0000; font-size: 12px; border-top: 1px dotted #C9C9C9;}
  .shopbox .spboxcontent .gmlist h6 a {}
  .shopbox .spboxcontent .gmlist ul {margin: 0; padding: 0 0 0 7px; list-style: none; overflow: hidden; zoom: 1;}
  .shopbox .spboxcontent .gmlist ul li {display: inline; float: left; margin: 0 5px 0 6px; width: 76px;}
  .shopbox .spboxcontent .gmlist ul li .ygmPic {}
  .shopbox .spboxcontent .gmlist ul li .ygmPic a {}
  .shopbox .spboxcontent .gmlist ul li .ygmPic a img {border: 1px solid #B4B4B4;}
  .shopbox .spboxcontent .gmlist ul li .ygmName {display: block; padding: 3px 0 0; line-height: 16px; height: 51px; color: #333; overflow: hidden;}
  .shopbox .spboxcontent .gmlist ul li p {margin: 0; padding: 0;}
  .shopbox .spboxcontent .gmlist ul li p.ygmPrice span {color:  #FF0000;}

	#shoploading {position: absolute; top: 25px; width: 442px; height: 337px; line-height: 337px; text-align: center; background: #fff;}
	#shoploading img {padding: 140px 0 0;}
</style>
<div id="shopbox" class="shopbox">
    <div class="shopboxcon">
        <div id="shoploading" style="display: block;"><img alt="loading" src="themes/xiaomi/images/alert/loading.gif"></div>
        <div style="">
          <h2><a class="track close" name="item-close-cart" href="javascript:;" onclick="document.getElementById('shopbox').style.display='none'"><span>关闭</span></a></h2>
          <div class="spboxcontent">
              <div class="shopboxdetail">
                <div class="spboxleft"><img src="themes/xiaomi/images/alert/DPshopcarIco.gif"></div>
                <div class="spboxright">
                  <span class="spboxtitle">该商品已成功放入购物车</span> <span class="blank5"></span>
                  <p class="num">购物车共 <span id="shopboxcount" class="numstyle"></span> 件商品 合计：<span id="shopboxprice" class="numstyle2"></span> 元</p>
                  <span class="blank5"></span>
                  <p class="spbbtndiv">
                    <a href="javascript:void(0)" name="item-continueshop" class="jxgwbtn track" onclick="document.getElementById('shopbox').style.display='none'" style="color:#666666">&lt;&lt;继续购物</a>
                    
					<input type="button" onclick='location.href="flow.php"' value="去结算>>" style="border:1px solid #fff; background-color:#9eb219; padding:5px 25px; color:#FFFFFF; font-size:14px" />
                  </p>
                </div>
              </div>
            <!--  <div class="gmlist">
                <h6 style="color:#333333">购买过该商品的人还购买过</h6>
                <ul>
               
                <?php $_from = get_cat_best_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'hg');$this->_foreach['nhg'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nhg']['total'] > 0):
    foreach ($_from AS $this->_var['hg']):
        $this->_foreach['nhg']['iteration']++;
?>
                <?php if ($this->_foreach['nhg']['iteration'] < 6): ?>
                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="<?php echo $this->_var['hg']['url']; ?>" name="item-shopping-pap" class="track"><img src="<?php echo $this->_var['hg']['thumb']; ?>" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="<?php echo $this->_var['hg']['url']; ?>" name="item-shopping-pap" class="ygmName track"><?php echo $this->_var['hg']['short_name']; ?></a><p class="ygmPrice"><span><?php if ($this->_var['hg']['promote_price'] != ""): ?>
                      <?php echo $this->_var['hg']['promote_price']; ?>
                      <?php else: ?>
                      <?php echo $this->_var['hg']['shop_price']; ?>
                      <?php endif; ?><!--</span></p></li>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
              </div>
	      -->
          </div>
        </div>
    </div>
</div>  
<script src="themes/xiaomi/js/jquery.json.min.js"></script>	
<script src="themes/xiaomi/js/common.js"></script> 