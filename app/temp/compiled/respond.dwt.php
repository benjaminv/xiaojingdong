<!DOCTYPE html>
<html class="um landscape min-width-240px min-width-320px min-width-480px min-width-768px min-width-1024px">
  <head>
<meta name="Generator" content="JTYP v5" />
    <title>respond</title>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="themes/default/css/public.css"/>
    <link rel="stylesheet" type="text/css" href="themes/default/css/ui-box.css.css"/>
  </head>
  <body class="um-vp bc-bg" ontouchstart>
  <div class="bg-color-w p-all5 ubb border-hui">
        <div class="ub ub-pc m-top5"><span class="ulev0 f-color-zi"><?php echo $this->_var['lang']['system_info']; ?></span></div>
        <p class="umar-t1 tx-c ulev-9 f-color-red"><?php echo $this->_var['message']; ?></p>
        <?php if ($this->_var['virtual_card']): ?>
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
          <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
          	<div class="ulev-9 f-color-zi l-h-2 umar-t1"><?php echo $this->_var['vgoods']['goods_name']; ?></div>
            <div class="ulev-1 f-color-6 l-h-2">
              <?php if ($this->_var['card']['card_sn']): ?><strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><?php echo $this->_var['card']['card_sn']; ?><?php endif; ?> 
              <?php if ($this->_var['card']['card_password']): ?><strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><?php echo $this->_var['card']['card_password']; ?><?php endif; ?> 
            </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?> 
        <div class="ub m-top5 ub-pc" onclick="back_to_user()">
            <div class="btn-red-2 ulev-9">立即返回</div>
        </div>
        <div class="ub ub-pc ulev-1 f-color-6 umar-t1"><span id="count_down_label">3</span>秒后返回</div>
    </div>
  </body>
  <script src="js/server.js"></script>
  <script>
	window.uexOnload = function(type){
		page_type = 'popover'
		page_name = 'pay'
		uexWindow.publishChannelNotification(CHANNEL_PAY_RESPOND, '<?php echo $this->_var['pay_result']; ?>') 
		var t = setInterval(function() {
			var cur = parseInt(document.getElementById('count_down_label').innerHTML) 
			if (cur === 0) {
				clearInterval(t)
				back_to_user()
			} else {
				cur --
			}
			document.getElementById('count_down_label').innerHTML = cur.toString()
		},DUR_SECOND)
	}
  </script>
</html>