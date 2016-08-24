<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/goods-category.min.css?ver=2013120301" />
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="container breadcrumbs"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>

<div class="container">
  <div class="accessories-list-box">
    <div class="box-hd">
      <h2 class="title"><a>全部商品分类</a></h2>
    </div>
    <div class="box-bd">
      <div class="accessories-home-list">
        <ul class="clearfix">
		
		<?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
          <li class="acc-list">
            <div class="acc-list-item">
              <div class="item-title"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></div>
              <div class="item-list">
                <ul>
                  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['yy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['yy']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['yy']['iteration']++;
?>
		  <?php if ($this->_foreach['yy']['iteration'] < 5): ?>  
              <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
	      <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
               <ul style="position:relative; left:90px;top:-145px;">
                  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['yy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['yy']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['yy']['iteration']++;
?>
				 <?php if ($this->_foreach['yy']['iteration'] > 6 && $this->_foreach['yy']['iteration'] < 13): ?>  
            <!--  <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li> -->
			  <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
               <ul style="position:relative; left:170px;top:-290px;">
                  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['yy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['yy']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['yy']['iteration']++;
?>
				 <?php if ($this->_foreach['yy']['iteration'] > 12): ?>  
           <!--   <li><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li> -->
			  <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
              </div>
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  
        </ul>
      </div>
    </div>
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
