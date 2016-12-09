<!-- $Id: lucky_buy_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
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

<form method="post" action="lucky_buy.php?act=insert_update" name="theForm" onsubmit="return validate()">
<div class="main-div">
<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_goods_name']; ?></td>
    <td><select name="goods_id">
      <?php if ($this->_var['lucky_buy']['act_id']): ?>
      <option value="<?php echo $this->_var['lucky_buy']['goods_id']; ?>"><?php echo $this->_var['lucky_buy']['goods_name']; ?></option>
      <?php else: ?>
      <option value="0"><?php echo $this->_var['lang']['notice_goods_name']; ?></option>
      <?php endif; ?>
    </select>    </td>
  </tr>
  <tr>
    <td class="label">自定义标题</td>
    <td><input name="act_name" type="text" id="act_name" value="<?php echo $this->_var['lucky_buy']['act_name']; ?>" size="60">
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticRestrict">如不设置自定义标题则默认使用商品标题。例如可以写【一元云购】iPhone6s。</span>   </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_start_date']; ?></td>
    <td>
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['lucky_buy']['start_time']; ?>' readonly="readonly" /><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['label_end_date']; ?></td>
    <td>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['lucky_buy']['end_time']; ?>' readonly="readonly" /><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
    </td>
  </tr>


  <tr>
    <td class="label">每份单价</td>
    <td><input name="oneprice" type="text" id="oneprice" onchange="checknum('oneprice')" value="<?php echo empty($this->_var['lucky_buy']['oneprice']) ? '0' : $this->_var['lucky_buy']['oneprice']; ?>" size="30"><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">总份数</td>
    <td><input name="number" type="text" id="number" onchange="checknum('number')" value="<?php echo empty($this->_var['lucky_buy']['number']) ? '0' : $this->_var['lucky_buy']['number']; ?>" size="30"><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">商品总价</td>
    <td><input name="allprice" type="text" id="allprice" onchange="checknum('allprice')" value="<?php echo empty($this->_var['lucky_buy']['allprice']) ? '0' : $this->_var['lucky_buy']['allprice']; ?>" size="30"><?php echo $this->_var['lang']['require_field']; ?>
        <br /><span class="notice-span" > 每份单价 X 总份数 = 商品总价  请谨慎填写以上三项。</span>  </td>
  </tr>
  <!--tr>
    <td class="label"><?php echo $this->_var['lang']['label_deposit']; ?></td>
    <td><input name="deposit" type="text" id="deposit" value="<?php echo empty($this->_var['lucky_buy']['deposit']) ? '0' : $this->_var['lucky_buy']['deposit']; ?>" size="30"></td>
  </tr-->
  <!--tr>
    <td class="label"><a href="javascript:showNotice('noticRestrict');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['label_restrict_amount']; ?></td>
    <td><input type="text" name="restrict_amount" value="<?php echo empty($this->_var['lucky_buy']['restrict_amount']) ? '0' : $this->_var['lucky_buy']['restrict_amount']; ?>" size="30" />
      <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticRestrict"><?php echo $this->_var['lang']['notice_restrict_amount']; ?></span>    </td>
  </tr-->
  <tr>
     <td class="narrow-label">微信未关注用户参与云购弹出引导关注图片二维码</td>
      <td>
        <input type="radio" name="need_follow" value="1" <?php if ($this->_var['lucky_buy']['need_follow'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="need_follow" value="0" <?php if ($this->_var['lucky_buy']['need_follow'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
    <td class="label">分享标题</td>
    <td><input type="text" name="share_title"  size="60" value="<?php echo $this->_var['lucky_buy']['share_title']; ?>" />
    <br /><span class="notice-span">用于分享到微信朋友圈或者微信好友时显示，不设置默认使用商品标题</span></td>
  </tr>
  <tr>
    <td class="label">分享描述</td>
    <td><input type="text" name="share_brief"  size="60" value="<?php echo $this->_var['lucky_buy']['share_brief']; ?>" />
    <br /><span class="notice-span">用于分享给微信好友时显示，不设置默认使用商品标题</span></td>
  </tr>
  <tr>
    <td class="label">分享图片URL</td>
    <td><input type="text" name="share_img"  size="60" value="<?php echo $this->_var['lucky_buy']['share_img']; ?>" />
    <br /><span class="notice-span">用于微信分享时显示，不设置默认使用商品主图（URL是绝对地址，请使用http开头的地址）</span></td>
  </tr>


  <tr>
    <td colspan="2" >
			<table >
				<tr>
					<td >活动说明</td>
					<td ><?php echo $this->_var['FCKeditor']; ?></td>
				</tr>
			</table>
    </td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td>
      <input name="act_id" type="hidden" id="act_id" value="<?php echo $this->_var['lucky_buy']['act_id']; ?>">
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

  Ajax.call('lucky_buy.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
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
function checknum(input){
	var val = document.getElementById(input).value;
	if(isNaN(val)){
	   alert("请输入数字");
	   document.getElementById(input).value='0';
	}
	if(input=='number' && val>10000){
	   alert("禁止超过10000份");
	   document.getElementById(input).value='1';
	}
	
	var val1 = document.getElementById('oneprice').value;
	var val2 = document.getElementById('number').value;
	document.getElementById('allprice').value=val1*val2;

}

//-->

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>