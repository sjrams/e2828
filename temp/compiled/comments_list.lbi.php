<div class="xm-box goods-detail-comment " id="goodsComment">
  <div class="box-hd">
    <div class="title"> 用户评价 </div>
    <div class="more J_comment_order"> </div>
  </div>
  <div class="box-bd" id="J_goods_detail_comment">
    <ul class="com-head clearfix">
      <li class="left">
        <h2 class="star_width">100<b>%</b></h2>
        <p>五星评价率</p>
      </li>
      <li class="middle">
        <div class="item"> <span class="icon-stat icon-stat-5"></span> <span class="num 5star_count">0</span>人 </div>
        <div class="item"> <span class="icon-stat icon-stat-4"></span> <span class="num 4star_count">0</span>人 </div>
        <div class="item"> <span class="icon-stat icon-stat-3"></span> <span class="num 3star_count">0</span>人 </div>
        <div class="item"> <span class="icon-stat icon-stat-2"></span> <span class="num 2star_count">0</span>人 </div>
        <div class="item"> <span class="icon-stat icon-stat-1"></span> <span class="num 1star_count">0</span>人 </div>
      </li>
      <li class="right clearfix">
        <img src="" style=" height:100px" id="J_MigPic" />
		
      </li>
    </ul>
    <div class="com-body">
      <ul class="content">
	  
	  <?php if ($this->_var['comments']): ?>
	   <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
        <li style="min-height:100px">
          <div class="article">
            <h3 class="art_star clearfix">
              <div class="leftPart"> <span class="icon-stat icon-stat-<?php echo $this->_var['comment']['comment_rank']; ?>"></span> </div>
              <div class="rightPart"> <?php echo $this->_var['comment']['add_time']; ?> </div>
            </h3>

            <div class="art_content"> <?php echo $this->_var['comment']['content']; ?> </div>
			<?php if ($this->_var['comment']['re_content']): ?>
            <div class="art_reply"> <i>官方回复：</i><?php echo $this->_var['comment']['re_content']; ?></div>
			<?php endif; ?>
          </div>
          <div class="head_photo"> <a ><img src="themes/xiaomi/images/photo.jpg" alt=""></a> <a>
            <h3 class="name"><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></h3>
            </a> </div>
        </li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <?php echo $this->_var['lang']['no_comments']; ?>
        <?php endif; ?> 
		
      </ul>
      <div style="line-height:35px; float:right">
	  <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style=" margin-right:3px">
        <?php if ($this->_var['pager']['styleid'] == 0): ?>
        <div id="pager">
          <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_89987600_1472031275');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_89987600_1472031275']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_89987600_1472031275']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php else: ?>

        
         <div id="pager" class="pagebar">
          <span class="f_l f6" style="margin-right:10px;"><?php echo $this->_var['lang']['total']; ?> <b><?php echo $this->_var['pager']['record_count']; ?></b> <?php echo $this->_var['lang']['user_comment_num']; ?></span>
          <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>">1 ...</a><?php endif; ?>
          <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
          <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_90087600_1472031275');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_90087600_1472031275']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <span class="page_now"><?php echo $this->_var['key']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['item_0_90087600_1472031275']; ?>">[<?php echo $this->_var['key']; ?>]</a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['pager']['page_count']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_90087600_1472031275');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_90087600_1472031275']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_90087600_1472031275']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
        

        <?php endif; ?>
        </form>
		<script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
	  </div>
    </div>
  </div>
  <div class="box-hd">
    <div class="title"> 我要评价 </div>
    <div class="more J_comment_order"> </div>
  </div>
  <div style="border:1px solid #eee; margin-top:10px; padding-top:10px; padding-bottom:10px">
                  <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
                    <table width="95%" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td width="30%" align="right" style="height:30px">用户名：</td>
                        <td width="70%"><?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></td>
                      </tr>
                      <tr>
                        <td align="right" style="height:30px">E-mail：</td>
                        <td><input type="text" name="email" id="email"  maxlength="100" value="" class="inputBorder"/></td>
                      </tr>
                      <tr>
                        <td align="right" style="height:30px">评价等级：</td>
                        <td><input name="comment_rank" type="radio" value="1" id="comment_rank1" />
                          <img src="themes/xiaomi/images/stars1.gif" />
                          <input name="comment_rank" type="radio" value="2" id="comment_rank2" />
                          <img src="themes/xiaomi/images/stars2.gif" />
                          <input name="comment_rank" type="radio" value="3" id="comment_rank3" />
                          <img src="themes/xiaomi/images/stars3.gif" />
                          <input name="comment_rank" type="radio" value="4" id="comment_rank4" />
                          <img src="themes/xiaomi/images/stars4.gif" />
                          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" />
                          <img src="themes/xiaomi/images/stars5.gif" /></td>
                      </tr>
                      <tr>
                        <td align="right" valign="top">评论内容：</td>
                        <td><textarea name="content" class="inputBorder" style="height:80px; width:500px; font-size:12px;"></textarea>
                          </td>
                      </tr>
					 
					  <?php if ($this->_var['enabled_captcha']): ?>
                      <tr>
                        <td align="right" valign="top" style="height:30px">验证码：</td>
                        <td colspan="2">
						<table>
						<tr><td><input type="text" name="captcha"  class="inputBorder" style="width:50px;"/></td>
						<td><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha"></td></tr>
						</table>
						</td>
                      </tr>
					  <?php endif; ?>
                     
                      <tr>
                        <td style="height:30px"></td>
                        <td><div class="f_l">
						<input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
						<input type="hidden" name="img" value="" />
          <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
                            <input name="" type="submit"  value="提交评论" style="cursor:pointer; border:1px solid #CCCCCC; padding:1px 8px">
                          </div></td>
                      </tr>
                    </table>
                  </form>
                </div>
</div>
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_90087600_1472031275');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_90087600_1472031275']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_90087600_1472031275']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
document.getElementById('J_MigPic').src = document.getElementById('J_BigPic').src;

var cmt = new Object;

function set_comment_rank()
{
	rank_arr = comment_rank.split('-');
	var rank_sum = 0;
	var rank_5 = 0;
	var rank_4 = 0;
	var rank_3 = 0;
	var rank_2 = 0;
	var rank_1 = 0;
	var rank_w5 = 0;
	var rank_w4 = 0;
	var rank_w3 = 0;
	var rank_w2 = 0;
	var rank_w1 = 0;
	for (var i = 0; i < rank_arr.length; i ++){
		rank_sum += rank_arr[i]*1;
	}
	rank_5 = rank_arr[0];
	rank_4 = rank_arr[1];
	rank_3 = rank_arr[2];
	rank_2 = rank_arr[3];
	rank_1 = rank_arr[4];
	
	rank_w5 = 100;
	if (rank_sum > 0){
	rank_w5 = (rank_5/rank_sum)*100;
	}
	
	$('.5star_count').html(rank_5);
	$('.4star_count').html(rank_4);
	$('.3star_count').html(rank_3);
	$('.2star_count').html(rank_2);
	$('.1star_count').html(rank_1);
	
	$('.star_width').html(parseInt(rank_w5)+'%');
	
}

set_comment_rank();

	  
function submitComment(frm)
{
  

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }
   

   
   $.ajax({
						type:"POST",
						url:"comment.php",
						cache:false,
						dataType:'json',     //接受数据格式
						data:'cmt=' + $.toJSON(cmt),
						success:commentResponse
   });
   
   return false;
}


/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }

    }
  }
 function gotoPage(page, id, type)
 {
	  $.ajax({
						type:"GET",
						url:"comment.php?act=gotopage",
						cache:false,
						dataType:'json',     //接受数据格式
						data:'page=' + page + '&id=' + id + '&type=' + type,
						success:gotoPageResponse
					});
					
 } 
 
function gotoPageResponse(result)
{
  document.getElementById("ECS_COMMENT").innerHTML = result.content;
  set_comment_rank();
}


//]]>
</script>