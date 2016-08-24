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
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="blockw box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>


<div class="blank">
<div class="block clearfix">
  
  <div class="AreaL">
  <?php echo $this->fetch('library/new_articles.lbi'); ?>
    
<?php $this->assign('articles',$this->_var['articles_10']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_10']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>


    
    </div>
  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
  <!--  <h3><span><?php echo $this->_var['cat_name']; ?></span></h3> -->
    <div class="RelaArticle">
    <?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>

    <a class="<?php if ($this->_var['cat_id'] == $this->_var['cat']['id']): ?> select <?php endif; ?> "  href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a> 

      <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat.children'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat.children']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat.children']['iteration']++;
?>
     <!-- <a  class="ww" href="<?php echo $this->_var['child']['url']; ?>" style="background-image:none;"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> -->
	  
	     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </div>
    <div class="boxCenterList">
        
	<div class="on-whole">
	  <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>

   
    <div class="blog-list">
	     <div class="blog-thumb"> 
	    <p class="title"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="f6"><?php echo $this->_var['article']['short_title']; ?></a><p> 
	         <div class="blog-two">  <?php echo $this->_var['article']['author']; ?> | <?php echo $this->_var['article']['add_time']; ?>&nbsp; &nbsp;人气：<?php echo $this->_var['article']['click_count']; ?></div>
	        <p class="image"><a   href="<?php echo $this->_var['article']['url']; ?>" target="_blank"><img    src="<?php echo $this->_var['article']['file_url']; ?> " /></a></p>
	        <p class="text"><a  href="<?php echo $this->_var['article']['url']; ?>" target="_blank"><?php echo sub_str($this->_var['article']['content'],160); ?></a></p>
			<p  class="more"><a href="<?php echo $this->_var['article']['url']; ?>" target="_blank">更多>></a></p>
	  
	       </div>    
	  </div>
 

		
		
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	     <div class="pager">
		 	<?php echo $this->fetch('library/pages.lbi'); ?>
			
  </div>
	 </div>

	
	
    </div>
   </div>
  </div>
  <div class="blank5"></div>
 
  
  
</div>
<div class="blank5"></div>
</div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>  
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
<!--<script  type="text/javascript">
   $(function(){
          $("body").on("click",".oppo-tj",function(){
		 document.oppo-tj.setAttribute("class","oppo-tj1");
		  }); 
	  });
</script>-->
<!--<script type="text/javascript">
$(function(){
    $(".box_1 a").click(function(){
        $(this).addClass("select");
        $(this).siblings().removeClass("select");
		return false; 
    });
});
</script>
-->
</html>
