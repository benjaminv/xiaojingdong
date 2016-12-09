<?php $_from = $this->_var['shop_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shop');if (count($_from)):
    foreach ($_from AS $this->_var['shop']):
?>
<div class="uc-a1 ub ub-ac ub-pc f-color-zi p-all5 bg-color-w m-btm1 ubb border-hui shop" supplier_id="<?php echo $this->_var['shop']['supplierid']; ?>">
  <div class="ub ub-ac ub-pc shop_image">
    <div class="ulev-1"><img src="<?php echo $this->_var['url']; ?><?php echo $this->_var['shop']['shop_logo']; ?>" style="width:6em; height:3em"/></div>
  </div>
  <div class="ub-f1 p-l-r2 shop_image">
    <div class="ulev-1 m-btm1">店铺名称：<?php echo $this->_var['shop']['shop_name']; ?></div>
    <div class="ulev-2 sc-text-hui">商家名称：<?php echo htmlspecialchars($this->_var['shop']['supplier_name']); ?></div>
  </div>
  <div class="bc-text-head ub ub-ac ub-pc delete">
    <div class="ulev-1"><img src="img/icons/del.png" style="width:1.6em; height:1.6em;"></div>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>