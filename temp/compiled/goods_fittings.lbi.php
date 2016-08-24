<?php if ($this->_var['fittings']): ?>
<style>
.xm-box {margin-bottom: 10px;background: #fff;_zoom: 1;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
.xm-box .hd {height: 50px;border-bottom: 1px solid #e6e9ed;}
.xm-box .hd .title {float: left;margin: 0;padding-left: 20px;font: 400 18px/50px arial,"Hiragino Sans GB","Microsoft YaHei",SimHei,sans-serif;color: #434a54;}
.xm-box .hd .lnks {float: right;margin: 15px 0 0;}

/*优惠套装*/
.taozhuang,.mod_aider {border: 1px solid #e6e9ed;zoom: 1;position: relative;overflow: hidden;}
.w950 .taozhuang .f_l{overflow: hidden;zoom: 1;float: left;padding: 5px 0;width: 710px; text-align:left; color:#666;}
.taozhuang .f_l{width:933px;}
.taozhuang .f_l ul{width:135px; text-align:center; margin:0; padding: 0px 3px;}
.taozhuang .f_l ul li{width:135px;}
.taozhuang .f_l .div_ul{padding:0 20px; *padding:0 15px;}
.w950 .taozhuang .f_l .div_ul{width:125px; height:180px; text-align:center; margin:0; padding:0 10px; overflow:hidden; background:url(themes/xiaomi/images/jiahao.gif) no-repeat left center;}
.taozhuang .f_l .div_ul li{width:125px;}
.taozhuang .f_l .B_blue{width:110px; height:110px; border:1px solid #eee}
.taozhuang .name{height:32px; width:135px; line-height:16px; display:block; overflow:hidden; color:#666666}
.taozhuang .f_r{border-left: 1px dotted #ccc;padding: 0 13px 0 13px;margin: 10px 0;float: right;height: 155px;color: #777777;}
.taozhuang .f_r div{font-weight:bold; color:#006dc7; padding-bottom:20px;}
.taozhuang .f_r dl{padding-bottom:10px;}
.taozhuang_r{width:780px;}
.w950 .taozhuang_r{float:left;width:555px; overflow:hidden;}
.taozhuang ul.clearfix{float:left; width:140px; overflow:hidden; padding:20px 10px 20px 20px;}
.taozhuang .f_r .f1{color:#ff6f3d}
.f_l{float:left;}
.f_r{float:right;}
ul,li{
margin:0; padding:0; border:none; list-style-type:none;
}
.w950 .shopBtn {width: 161px;}
.shopBtn {float: left; width: 130px;margin: 0px 10px 0 0;_margin: 0px 10px 0 0;position: relative;z-index: 20;font-weight: bold;background-color: #ff6f3d;border: 0;color: #fff;display: inline-block; _height: 20px;
font-size: 14px;height: 30px;line-height: 30px;text-align: center;cursor: pointer;border: 1px solid #e6e9ed;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;padding: 0;}
</style>
<div class=" xm-box taozhuang" >
  <div class="hd">
    <h3 class="title">优惠套装</h3>
  </div>
 <form action="flow.php" method="post" name="ECS_ALL_addcart">
    <div class="f_l">
      <ul class="clearfix" style=" float:left; width:120px; border:none; padding-top:5px;" >
        <li class="goodsimg"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"> <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" class="B_blue" />
          <input name="goods_id" type="hidden"id="goods_id_<?php echo $this->_var['goods']['goods_id']; ?>" value="<?php echo $this->_var['goods']['goods_id']; ?>" >
          </a>
		 </li>
        <li> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="name"> <?php echo $this->_var['goods']['goods_style_name']; ?> </a> <font class="f1"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></font> </li>
      </ul>
     
      <div class="taozhuang_r" style="padding-top:5px">
        <table cellpadding="0" cellspacing="0">
          <tr>
		  
           <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_40777800_1472029980');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_40777800_1472029980']):
?>
		   
            <td>
			
			<div class="div_ul"> 
                <li class="goodsimg"> <a href="<?php echo $this->_var['goods_0_40777800_1472029980']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_40777800_1472029980']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_40777800_1472029980']['name']); ?>" class="B_blue" /></a> </li>
                <li> <a href="<?php echo $this->_var['goods_0_40777800_1472029980']['url']; ?>" class="name" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_40777800_1472029980']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_40777800_1472029980']['short_name']); ?>&nbsp;x1</a> <font class="f1"><?php echo $this->_var['goods_0_40777800_1472029980']['fittings_price']; ?></font>
                <input name="box" type="checkbox" id="goods_ids" value="<?php echo $this->_var['goods_0_40777800_1472029980']['fittings_price_nformat']; ?>"  onClick="qq(<?php echo $this->_var['goods_0_40777800_1472029980']['goods_id']; ?>)">
                 <input name="goods_id" style="display:none;"  type="checkbox" id="goods_id_<?php echo $this->_var['goods_0_40777800_1472029980']['goods_id']; ?>" value="<?php echo $this->_var['goods_0_40777800_1472029980']['goods_id']; ?>" >
		    <input name="shop_price" style="display:none;" type="checkbox" id="shop_price_id_<?php echo $this->_var['goods_0_40777800_1472029980']['goods_id']; ?>" value="<?php echo $this->_var['goods_0_40777800_1472029980']['shop_price_nformat']; ?>" >
                </li>
              </div></td>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </tr>
        </table>
      </div>
    </div>
    <div class="f_r">
      <dl>
        优惠套装价：<b class="f1" id="show_all_price" >  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> <?php echo $this->_var['goods']['promote_price_org']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></b><br>
		节&nbsp;&nbsp;&nbsp;省：
<span class="f1" id="jiesheng">¥0.00</span>
<br>
本店价：
<ins class="f1" id="sum_shop_price"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> <?php echo $this->_var['goods']['promote_price_org']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></ins>
      </dl>
      <p>点击加入购物车一起搭配购买</p>
      
	   <a href="javascript:;" id="suited-goods-cart"  class="shopBtn" style="color:#FFFFFF; text-decoration:none;" onClick="getmousepos(event);fittings_add_cart(); ">添加到购物车</a>
      
    </div>
	<input type="hidden" name="tc_goods_shop_price">
  </form>
</div>
<div class="blank5"></div>
<?php endif; ?>

<script>

function qq(id) {
	var str=document.getElementsByName("box");
	
	if(document.getElementById("goods_id_"+id).checked ==false)
	{
		document.getElementById("goods_id_"+id).checked=true;
		document.getElementById("shop_price_id_"+id).checked=true;
	}
	else
	{
		document.getElementById("goods_id_"+id).checked=false;
		document.getElementById("shop_price_id_"+id).checked=false;
	}
	

	if(<?php echo $this->_var['goods']['is_promote']; ?> && <?php echo $this->_var['goods']['gmt_end_time']; ?>)
	{
		var start_price = <?php echo $this->_var['goods']['promote_price_org']; ?>;
	}
	else
	{
		var start_price = <?php echo $this->_var['goods']['shop_price']; ?>;
	}

	
	var shop_price = start_price;
	
	var org_shop_obj=document.getElementsByName("shop_price");
	
	for(i=0;i<org_shop_obj.length;i++) {
		   if(org_shop_obj[i].type=="checkbox" && org_shop_obj[i].checked) {
                 shop_price = parseFloat(shop_price)+parseFloat(org_shop_obj[i].value);
           }
	}

	document.getElementById("sum_shop_price").innerHTML="￥"+shop_price+"元";

   for(i=0;i<str.length;i++) {
		   if(str[i].type=="checkbox" && str[i].checked) {
                 start_price = parseFloat(start_price)+parseFloat(str[i].value);
           }
	}

	document.getElementById("show_all_price").innerHTML="￥"+start_price+"元";
	
	var jiesheng = (shop_price - start_price);
	
	document.getElementById("jiesheng").innerHTML="￥"+jiesheng+"元";
}





function fittings_add_cart()
{
	var goods_id_obj=document.getElementsByName("goods_id");	
	var goods_arr = new Array();
	var isCheck = false;
	 for(i=0;i<goods_id_obj.length;i++) {
		  if(goods_id_obj[i].type=="checkbox" && goods_id_obj[i].checked) {
		  		goods_arr[i] =  goods_id_obj[i].value;
				isCheck = true;
          }
	}
	
	if (!isCheck){
		alert('请选择套装产品!');
		return;
	}
	
	 $.ajax({
			type:"POST",
			url:"flow.php?step=fittings_to_cart",
			cache:false,
			dataType:'json',     //接受数据格式
			data:'goods_arr=' + goods_arr+"&parent_id="+<?php echo $this->_var['fittings']['0']['parent_id']; ?>,
			success:fittings_add_cart_response
			});
}

function fittings_add_cart_response(result)
{
    
    addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);
	//location.href='flow.php';
}


</script>
