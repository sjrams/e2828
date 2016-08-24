<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script src="themes/xiaomi/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/goods-detail.min.css?2014050401" />
<script type="text/javascript" src="themes/xiaomi/js/jquery.json.min.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?> 
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980goods.css'>");
}

</script>
<script type="text/javascript">
var goodsConfig={
    CommentTotal:"",
    // 商品ID
    GoodsId:"",
    // 产品ID
    ProductId:"",
    GoodsName:"",
    GoodsCommentPic:"",
    // 货品ID
    DataGid:"",
    NeedChioce:"0",
    // 二级规格名称
    GoodsStyle:"",
    // 是否缺货
    IsCos : "0",
    IsPackage : "0",
    ScenarioId : "1"
};
var jiangpeiKey={
    closeSubscribe : false,
    closeCommentAdd : false,
    closeGoodsGuestYouLike : false,
    closeGoodsCommentList : false,
    closeGoodsFaq : false
};


</script>


<div class="container breadcrumbs"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>

<div class="goods-detail container">
  <div class="goods-detail-info row clearfix">
    <div class="span14 J_mi_goodsPic_block">
      <div class="goods-pic-box  " id="J_mi_goodsPicBox">
        <div class="goods-big-pic" > <img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>"  class="J_goodsBigPic" id="J_BigPic" /> </div>
        <div class="goods-small-pic clearfix">
          <ul id="goodsPicList" >
		  <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['pictures'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pictures']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['pictures']['iteration']++;
?>
            <li <?php if ($this->_foreach['pictures']['iteration'] == 1): ?>class="current"<?php endif; ?>><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" data-src="<?php echo $this->_var['picture']['img_url']; ?>"  data-src-b="<?php echo $this->_var['picture']['img_url']; ?>"/></li>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
           
          </ul>
        </div>
        <span class="icon-slides icon-slides-prev" title="上一张" id="goodsPicPrev">上一张</span> <span class="icon-slides icon-slides-next" title="下一张" id="goodsPicNext">下一张</span> </div>
    </div>
    <div class="span6 goods-info-rightbox">
      <dl class="goods-info-box ">
	  <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
        <dt class="goods-info-head">
          <dl>
            <dt id="goodsName"><?php echo $this->_var['goods']['goods_style_name']; ?></dt>
			
            <dd class="goods-info-head-price clearfix">
			<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
              <div class="left-part"> <b  class="J_mi_goodsPrice"><?php echo $this->_var['goods']['promote_price']; ?></b><i></i> <del><span class="J_mi_marketPrice"><?php echo $this->_var['goods']['market_price']; ?></span></del> </div>
              <div class="right-part"> </div>
			<?php else: ?>  
			  <div class="left-part"> <b  class="J_mi_goodsPrice"><?php echo $this->_var['goods']['shop_price_formated']; ?></b><i></i> <del><span class="J_mi_marketPrice"><?php echo $this->_var['goods']['market_price']; ?></span></del> </div>
              <div class="right-part"> </div>
			<?php endif; ?>  
			  
            </dd>
            <dd class="goods-info-head-userfaq">
              <ul>
                <li class="mobile"><?php echo $this->_var['goods']['goods_brief']; ?></li>
                <li class="faq J_pro_related_btns"> <span class="icon-stat icon-stat-<?php echo $this->_var['goods']['comment_rank']; ?> J_mi_goods_starNum" ></span> <a href="#goodsComment"><?php 
$k = array (
  'name' => 'goods_comment',
  'id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>人评价</a></li>
                
                
              </ul>
            </dd>
			<style>
		    .catt{width:85%;height:auto;overflow:hidden;padding-bottom:5px;}
			.catt a{border: #7E7E7E 1px solid;  text-align: center; background-color: #fff; margin-
			left:0px;margin-top:6px;padding-left: 10px;padding-right: 10px;display: block; white-space: nowrap;
			color:#000; text-decoration:none; float:left; margin-right:5px}
			.catt a:hover {border:#ED0036 1px solid;}
			.catt a:focus {outline-style:none;}
			.catt .cattsel {border:#ED0036 1px solid; background: url("themes/xiaomi/images/test.gif") no-repeat
			bottom right; background-color:#FFFFFF}
			.catt .cattsel a:hover {border: #ED0036 1px solid;background: url("themes/xiaomi/images/test.gif") no-
			repeat bottom right;}
		  </style>
		  <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
            <dd class="goods-info-head-colors clearfix"> <span>可选<?php echo $this->_var['spec']['name']; ?>：</span>
              <div class="catt">
			<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
			<a <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this,<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>)"
			href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?><input style="display:none"
			id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>
			checked<?php endif; ?> /></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
            </dd>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		  <script language="javascript">
		  
		  function changeAtt(t,a,goods_id) {
			t.lastChild.checked='checked';
			for (var i = 0; i<t.parentNode.childNodes.length;i++) {
			if (t.parentNode.childNodes[i].className == 'cattsel') {
			t.parentNode.childNodes[i].className = '';
			}
			}
			t.className = "cattsel";

			changePrice();
			}
		  </script>
		  <dd class="goods-info-head-colors clearfix" style=" border-top:0px"> <span>数量：</span>
              <input type="text" value="1" style="width:50px" name="number" id="buy_num" maxlength="5" onblur="changePrice()" >
			  
			  <strong style="margin-left:20PX"><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" style="font-size:18PX; color:#FF0000; font-weight:bold"></font>
            </dd>
            <dd class="goods-info-head-cart" id="goodsDetailBtnBox"> <a onclick="getmousepos(event)" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" id="goodsDetailAddCartBtn" class="btn btn-primary goods-add-cart-btn"> <i class="iconfont ">&#xe624;</i>加入购物车</a> <a id="goodsDetailCollectBtn" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn btn-dake  goods-collect-btn"> <i class="iconfont">&#xe60a;</i> </a> </dd>
          </dl>
        </dt>
	  </form>	
        <dd class="goods-info-head-intro"> </dd>
        <dd class="goods-info-foot"> <span class="iconfont">&#xe602;</span> <a href="category.php?id=<?php echo $this->_var['goods']['cat_id']; ?>">查看更多<?php 
$k = array (
  'name' => 'cat_name',
  'id' => $this->_var['goods']['cat_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a> </dd>
      </dl>
    </div>
	
	
  </div>
  <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
  <div class="row goods-detail-desc">
    
    
    <div class="span5">
  <?php echo $this->fetch('library/history.lbi'); ?>
  <div class="xm-box goods-alsobuy xm-goods-side-list" id="goodsAlsoBuy">
    <div class="box-hd">
      <div class="title"> 买过的人还买了 </div>
    </div>
    <div class="box-bd">
      <ul>
	  
	  <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <li> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank">
          <h2><?php echo $this->_var['releated_goods_data']['short_name']; ?></h2>
          <h2><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?></h2>
          <div class="star"> <span class="icon-stat icon-stat-5"></span> </div>
          <img class="leftImg" src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>"  alt=""> </a>
		  </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
      </ul>
    </div>
  </div>
</div>
    
    <div class="span15">
      
      <div class="xm-box  goods-detail-box " id="goodsDetail">
        <div class="box-hd">
          <ul class="items clearfix J_pro_related_btns">
            <li class="current"> <a href="#goodsDesc">详细信息</a> </li>
            <li> <a href="#goodsParam">规格参数</a> </li>
            <li> <a href="#goodsComment">评价晒单</a> </li>
    
            <li> <a href="#serQue">售后服务</a> </li>
          </ul>
        </div>
        <div class="box-bd" id="goodsDesc">
          
		  <?php echo $this->_var['goods']['goods_desc']; ?>
		  
        </div>
      </div>
      
      
      <div class="xm-box goods-detail-standard" id="goodsParam">
        <div class="box-hd">
          <div class="title"> 规格参数 </div>
        </div>
        <div class="box-bd">
          <table>
            <thead>
            </thead>
            <tbody>
			<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
			<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <!--<th ><?php echo htmlspecialchars($this->_var['property']['name']); ?></th>-->
                <td ><?php echo $this->_var['property']['value']; ?></td>
              </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            </tbody>
          </table>
        </div>
      </div>
      
	  <script language="javascript">
			var comment_rank = "<?php 
$k = array (
  'name' => 'comments_rank',
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>";
		</script>
      
      <div id="ECS_COMMENT"> <?php echo $this->fetch('library/comments.lbi'); ?></div>

      
    
      
      <div class="common-question" style="margin-top:10px">
        <div class="question-hd clearfix">
          <div class="title_a"><a id="serQue">售后服务</a></div>
          <div class="title_b"></div>
        </div>
        <div class="question-bd">
          <ul class="content">
            <li>
              <h3>如何挑选商品？</h3>
              <p>点击页面上方“加入购物车”按钮或页面下拉时顶部导航上的“加入购物车”按钮将商品加入购物车，再点击页面右上角的“购物车”前往购物车页面进行结算。</p>
            </li>
            <li>
              <h3>收藏商品功能</h3>
              <p>点击“收藏按钮”后，按钮中的白心亮起,背景由黑色变为黄色代表收藏成功，再次点击取消收藏。您可在“个人中心”中的我的收藏查看所有收藏商品。</p>
            </li>
            <li>
              <h3>维修网点销售配件吗？</h3>
              <p>所有授权维修网点具备维修手机标配里配件的功能，部分指定授权维修网点可销售标配及部分官网配件，具体销售的产品及价格请以修网点信息为准。</p>
            </li>
            <li>
              <h3>退换货办理流程</h3>
              <p>您可拨打小米客服中心400-100-5678与客服人员沟通，或登录小米网“我的订单” ->“订单详情”下方点击“申请售后服务”并填写相应信息，小米看到您的申请，会安排工作人员与您进行退换货质量确认并办理相关事宜.</p>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="goods-sub-bar " id="goodsSubBar">
  <div class="container">
    <div class="row">
      <div class="span5">
        <dl class="goods-sub-bar-info clearfix">
          <dt><img src="<?php echo $this->_var['pictures']['0']['thumb_url']; ?>"></dt>
          <dd> <strong><?php echo $this->_var['goods']['goods_style_name']; ?></strong>
            <p> <em><span class="J_mi_goodsPrice"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></span></em> <del><span class="J_mi_marketPrice"></span></del> </p>
          </dd>
        </dl>
      </div>
      <div class="span15">
        <div class="fr" id="goodsSubBarBtnBox"> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn btn-primary goods-add-cart-btn" id="goodsSubBarAddCartBtn"> <i class="iconfont">&#xe624;</i>加入购物车</a> </div>
        <div class="goods-desc-menu" id="goodsSubMenu">
          <ul class="items clearfix J_pro_related_btns">
            <li class="current"> <a href="#goodsDesc">详细信息</a> </li>
            <li> <a href="#goodsParam">规格参数</a> </li>
            <li> <a href="#goodsComment">评价晒单</a> </li>
           
            <li> <a href="#serQue">售后服务</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modal-faq" class="modal-faq modal hide">
  <div class="modal-header faq-header"> <a type="button" data-dismiss="modal" class="close"><i class="iconfont">&#xe617;</i></a>
    <h3>售后服务与退换货流程</h3>
  </div>
  <div class="modal-body faq-body" >
    <iframe frameborder="0"  src="" width="695"  height="489" ></iframe>
  </div>
</div>
<div class="layer-goodsBackDrop hide J_mi_layer_goods" > </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/shop_alert.lbi'); ?>
<script type="text/javascript" src="themes/xiaomi/js/goodsdetail.min.js?2014042903"></script>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;



/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  
  $.ajax({
			type:"GET",
			url:"goods.php",
			cache:false,
			dataType:'json',     //接受数据格式
			data:'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty,
			success:changePriceResponse
			});

  
}
changePrice();
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}




</script>
</body>
</html>
