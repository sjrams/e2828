<div class="left-1">
<h3 ><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></h3>
<ul class="left-top">

<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');$this->_foreach['articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articles']['total'] > 0):
    foreach ($_from AS $this->_var['article_item']):
        $this->_foreach['articles']['iteration']++;
?>

<li <?php if ($this->_foreach['articles']['iteration'] == 1): ?>class="first"<?php endif; ?>><a  href="<?php echo $this->_var['article_item']['url']; ?>"><span class="dot1"><?php echo $this->_foreach['articles']['iteration']; ?></span><?php echo sub_str($this->_var['article_item']['short_title'],13); ?><i class="iconfont"></i></a></li>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>