<!-- $Id: extpintuan_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js,../js/utils.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'selectzone_bd.js')); ?>

<!-- 商品搜索 -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <!-- 分类 -->
    <select name="cat_id"><option value="0"><?php echo $this->_var['lang']['all_cat']; ?></caption><?php echo $this->_var['cat_list']; ?></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0"><?php echo $this->_var['lang']['all_brand']; ?></caption><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
    <!-- 关键字 -->
    <input type="text" name="keyword" size="20" />
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>

<form method="post" action="extpintuan.php?act=insert_update" name="theForm" onsubmit="return validate()">
<div class="main-div">
<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td style="text-align:right; font-weight:bold"  ><?php echo $this->_var['lang']['label_goods_name']; ?></td>
    <td><select name="goods_id" id="goods_id" onchange="javascript:change_good_products();">
      <option value="<?php echo $this->_var['extpintuan']['goods_id']; ?>" selected="selected"><?php echo $this->_var['extpintuan']['goods_name']; ?></option>
    </select>
    <select name="product_id" <?php if ($this->_var['cut']['product_id'] <= 0): ?>style="display:none"<?php endif; ?>>
        <?php echo $this->html_options(array('options'=>$this->_var['good_products_select'],'selected'=>$this->_var['extpintuan']['product_id'])); ?>
        </select></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">活动名称：</td>
    <td><input type="text" name="act_name" maxlength="60" size="60" value="<?php echo $this->_var['extpintuan']['act_name']; ?>" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">显示在前台页面,例如可使用【拼团】+商品名称，不设置默认使用商品标题</span></td>
  </tr>

  <tr>
    <td style="text-align:right; font-weight:bold"><?php echo $this->_var['lang']['label_start_date']; ?></td>
    <td>
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['extpintuan']['start_time']; ?>' readonly="readonly" /><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold"><?php echo $this->_var['lang']['label_end_date']; ?></td>
    <td>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['extpintuan']['end_time']; ?>' readonly="readonly" /><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>


  <?php $_from = $this->_var['extpintuan']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  <?php if ($this->_var['key'] == 0): ?>
  <tr>
    <td style="text-align:right; font-weight:bold">拼团阶梯：</td>
    <td><?php echo $this->_var['lang']['notice_ladder_amount']; ?> <input type="text" name="ladder_amount[]" value="<?php echo $this->_var['item']['amount']; ?>" style="min-width:10px;" size="4" />&nbsp;&nbsp;
      拼团价格<input type="text" name="ladder_minprice[]" value="<?php echo $this->_var['item']['minprice']; ?>" style="min-width:10px;" size="4" />
      <!--每人开团次数<input type="text" name="ladder_orderlimit[]" value="<?php echo $this->_var['item']['orderlimit']; ?>" style="min-width:10px;" size="4"  />-->
      团长折扣<input type="text" name="ladder_tuanzhangdis[]" value="<?php echo $this->_var['item']['tuanzhangdis']; ?>" style="min-width:10px;" size="4"  />
      分成金额<input type="text" name="ladder_fencheng[]" value="<?php echo $this->_var['item']['fencheng']; ?>" style="min-width:10px;" size="4"  />
      <a href="javascript:;" onclick="addLadder(this)"><strong>[+]</strong></a>    <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php else: ?>
  <tr>
    <td></td>
    <td><?php echo $this->_var['lang']['notice_ladder_amount']; ?> <input type="text" name="ladder_amount[]" value="<?php echo $this->_var['item']['amount']; ?>" style="min-width:10px;" size="4"  />&nbsp;&nbsp;
      拼团价格<input type="text" name="ladder_minprice[]" value="<?php echo $this->_var['item']['minprice']; ?>" style="min-width:10px;" size="4" />
      <!--每人开团次数<input type="text" name="ladder_orderlimit[]" value="<?php echo $this->_var['item']['orderlimit']; ?>" style="min-width:10px;" size="4"  />-->
      团长折扣<input type="text" name="ladder_tuanzhangdis[]" value="<?php echo $this->_var['item']['tuanzhangdis']; ?>" style="min-width:10px;" size="4"  />
      分成金额<input type="text" name="ladder_fencheng[]" value="<?php echo $this->_var['item']['fencheng']; ?>" style="min-width:10px;" size="4"  />
      <a href="javascript:;" onclick="removeLadder(this)"><strong>[-]</strong></a>    </td>
  </tr>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <td></td>
    <td><span class="notice-span">注意：成团人数必须大于等于2。 可只设置一个或多个阶梯，活动开始后请不要修改成团人数。<br />
        团长价格=(拼团价格)X团长折扣。任何人拼团最低需支付0.01元。团长折扣默认为10时，则不打折，支持小数点。<br />
        分成金额为客户购买本商品，其推荐人能够通过分成获得的金额基数。该商品必须加入分销。否则填0即可。</span> </td>
  </tr>

  
  <tr>
     <td style="text-align:right; font-weight:bold">是否允许单独购买：</td>
      <td>
        <input type="radio" name="single_buy" value="1" <?php if ($this->_var['extpintuan']['single_buy'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="single_buy" value="0" <?php if ($this->_var['extpintuan']['single_buy'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">单独购买时的价格：</td>
    <td><input type="text" name="single_buy_price" value="<?php echo empty($this->_var['extpintuan']['single_buy_price']) ? '0' : $this->_var['extpintuan']['single_buy_price']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">市场价：</td>
    <td><input name="market_price" type="text"  value="<?php echo empty($this->_var['extpintuan']['market_price']) ? '0' : $this->_var['extpintuan']['market_price']; ?>" size="30"><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">折扣：</td>
    <td><input name="discount" type="text"  value="<?php echo empty($this->_var['extpintuan']['discount']) ? '0' : $this->_var['extpintuan']['discount']; ?>" size="30">
    <br /><span class="notice-span">填写商品拼团价约为市场价的多少折</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">虚拟销量基数：</td>
    <td><input type="text" name="virtual_sold" value="<?php echo empty($this->_var['extpintuan']['virtual_sold']) ? '0' : $this->_var['extpintuan']['virtual_sold']; ?>" size="30" />
    <br /><span class="notice-span">前台显示的销量为：虚拟销量+实际销量</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">拼团限时：</td>
    <td><input type="text" name="time_limit" value="<?php echo empty($this->_var['extpintuan']['time_limit']) ? '0' : $this->_var['extpintuan']['time_limit']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">小时制，支持小数点，建议整数。超过限定小时后，拼团未成功则判为失败</span></td>
  </tr>
  


  <tr>
     <td style="text-align:right; font-weight:bold">是否可以选择商品数量：</td>
      <td>
        <input type="radio" name="choose_number" value="1" <?php if ($this->_var['extpintuan']['choose_number'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="choose_number" value="0" <?php if ($this->_var['extpintuan']['choose_number'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
     <td class="narrow-label">是否限量抽奖团</td>
      <td>
        <input type="radio" name="lucky_extpintuan" value="1" <?php if ($this->_var['extpintuan']['lucky_extpintuan'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="lucky_extpintuan" value="0" <?php if ($this->_var['extpintuan']['lucky_extpintuan'] == 0): ?>checked<?php endif; ?>> 否
      <br /><span class="notice-span">如果选择是，那么该活动结束后将进行抽奖，仅对中奖订单发货。</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">抽奖限定数量：</td>
    <td><input type="text" name="lucky_limit" value="<?php echo empty($this->_var['extpintuan']['lucky_limit']) ? '10' : $this->_var['extpintuan']['lucky_limit']; ?>" size="30" />
    <br />（<span class="notice-span">从拼团成功的订单中抽取的幸运订单数。中奖的才发货，不中奖的退款。）</span></td>
  </tr>
  <tr>
     <td class="narrow-label">微信未关注用户参与拼团弹出引导关注图片二维码</td>
      <td>
        <input type="radio" name="need_follow" value="1" <?php if ($this->_var['extpintuan']['need_follow'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="need_follow" value="0" <?php if ($this->_var['extpintuan']['need_follow'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>

  <tr>
    <td style="text-align:right; font-weight:bold">分享标题</td>
    <td><input type="text" name="share_title"  size="60" value="<?php echo $this->_var['extpintuan']['share_title']; ?>" />
    <br /><span class="notice-span">用于分享到微信朋友圈或者微信好友时显示，不设置默认使用商品标题</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">分享描述</td>
    <td><input type="text" name="share_brief"  size="60" value="<?php echo $this->_var['extpintuan']['share_brief']; ?>" />
    <br /><span class="notice-span">用于分享给微信好友时显示，不设置默认使用商品标题</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">分享图片URL</td>
    <td><input type="text" name="share_img"  size="60" value="<?php echo $this->_var['extpintuan']['share_img']; ?>" />
    <br /><span class="notice-span">用于微信分享时显示，不设置默认使用商品主图（URL是绝对地址，请使用http开头的地址）</span></td>
  </tr>
  
  <tr>
    <td style="text-align:right; font-weight:bold">商品简介</td>
    <td><textarea name="goods_brief" cols="40" rows="3"><?php echo htmlspecialchars($this->_var['extpintuan']['goods_brief']); ?></textarea>
    <br /><span class="notice-span">商品简介</span></td>
  </tr>

  <tr>
    <td colspan="2" >
			<table >
				<tr>
					<td >活动简介</td>
					<td ><?php echo $this->_var['FCKeditor']; ?></td>
				</tr>
			</table>
    </td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">&nbsp;</td>
    <td>
      <input name="act_id" type="hidden" id="act_id" value="<?php echo $this->_var['extpintuan']['act_id']; ?>">
      <input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
 </td>
  </tr>
</table>
</div>
</form>
<script language="JavaScript">
<!--


// 检查新订单
startCheckOrder();

/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  var eles = document.forms['theForm'].elements;

  var goods_id = eles['goods_id'].value;
  if (goods_id <= 0)
  {
    validator.addErrorMsg(error_goods_null);
  }
  validator.isNumber('deposit', error_deposit, false);
  validator.isInt('restrict_amount', error_restrict_amount, false);
  validator.isInt('gift_integral', error_gift_integral, false);
  return validator.passed();
}

/**
 * 搜索商品
 */
function searchGoods()
{
  var filter = new Object;
  filter.cat_id   = document.forms['searchForm'].elements['cat_id'].value;
  filter.brand_id = document.forms['searchForm'].elements['brand_id'].value;
  filter.keyword  = document.forms['searchForm'].elements['keyword'].value;

  Ajax.call('extpintuan.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
	return;
  }

  var sel = document.forms['theForm'].elements['goods_id'];

  sel.length = 0;

  /* 创建 options */
  var goods = result.content;
  if (goods)
  {
    for (i = 0; i < goods.length; i++)
    {
      var opt = document.createElement("OPTION");
      opt.value = goods[i].goods_id;
      opt.text  = goods[i].goods_name;
      sel.options.add(opt);
    }
  }
  else
  {
    var opt = document.createElement("OPTION");
    opt.value = 0;
    opt.text  = search_is_null;
    sel.options.add(opt);
  }

  return;
}
/**
 * 新增一个价格阶梯
 */
function addLadder(obj, amount, price)
{
  var src  = obj.parentNode.parentNode;
  var idx  = rowindex(src);
  var tbl  = document.getElementById('group-table');
  var row  = tbl.insertRow(idx + 1);
  var cell = row.insertCell(-1);
  cell.innerHTML = '';
  var cell = row.insertCell(-1);
  cell.innerHTML = src.cells[1].innerHTML.replace(/(.*)(addLadder)(.*)(\[)(\+)/i, "$1removeLadder$3$4-");;
}

/**
 * 删除一个价格阶梯
 */
function removeLadder(obj)
{
  var row = rowindex(obj.parentNode.parentNode);
  var tbl = document.getElementById('group-table');

  tbl.deleteRow(row);
}

//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>