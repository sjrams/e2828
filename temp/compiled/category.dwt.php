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
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/goods-category.min.css?ver=2013120301" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980category.css'>");
}

</script>
<div class="container breadcrumbs"> <?php echo $this->fetch('library/ur_here.lbi'); ?></div>

<div class="container">
  <div class="xm-line-box filter-box">
    <div class="box-hd">
      <h3 class="title"><?php 
$k = array (
  'name' => 'cat_name',
  'id' => $this->_var['category'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></h3>
    </div>
    <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <div class="box-bd">
      <div class="filter-lists">
        <?php if ($this->_var['brands']['1']): ?>
        <dl class="xm-filter-list xm-filter-list-first category-filter-list clearfix">
          <dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
          <dd>
            <ul id="typeCat" class="clearfix">
              <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands']['iteration']++;
?>
              <li class="<?php if ($this->_foreach['brands']['iteration'] == 1): ?>first<?php endif; ?> <?php if ($this->_var['brand']['selected']): ?>current<?php endif; ?>"> <a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a> </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </dd>
        </dl>
        <?php endif; ?>
        <?php if ($this->_var['price_grade']['1']): ?>
        <dl class="xm-filter-list  category-filter-list clearfix">
          <dt><?php echo $this->_var['lang']['price']; ?>：</dt>
          <dd>
            <ul id="typeAdapt" class="clearfix">
              <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['price_grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price_grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['price_grade']['iteration']++;
?>
              <li class="<?php if ($this->_foreach['price_grade']['iteration'] == 1): ?>first<?php endif; ?> <?php if ($this->_var['grade']['selected']): ?>current<?php endif; ?>"> <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a> </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </dd>
        </dl>
        <?php endif; ?>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_77424100_1472007283');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_77424100_1472007283']):
?>
        <dl class="xm-filter-list  category-filter-list clearfix">
          <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_77424100_1472007283']['filter_attr_name']); ?>：</dt>
          <dd>
            <ul id="typeAdapt" class="clearfix">
              <?php $_from = $this->_var['filter_attr_0_77424100_1472007283']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['filter_attr']['iteration']++;
?>
              <li class="<?php if ($this->_foreach['filter_attr']['iteration'] == 1): ?>first<?php endif; ?> <?php if ($this->_var['attr']['selected']): ?>current<?php endif; ?>"> <a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a> </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php echo $this->fetch('library/goods_list.lbi'); ?> </div>
<?php echo $this->fetch('library/shop_alert.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
