<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.ztree.all-3.5.min.js,category_selecter.js')); ?>

<link href="styles/zTree/zTreeStyle.css" rel="stylesheet" type="text/css" />
<div id="tabbody-div">
<form name="theForm" method="get" action="gettaobao.php">
  <table width="100%">
  <tbody>
  <tr>
    <td class="label">淘宝/天猫商品URL：</td>
    <td><input type="text" name="id" value="" style="width:80%"><br>（例如：任意天猫店铺的商品完整链接，直接复制过来即可）</td>
  </tr>
  <tr>

<tr>
    <td class="label">商品价格：</td>
    <td><input type="text" name="price" value=""><br>（例如：商品价格）</td>
  </tr>
  <tr>

<tr>
    <td class="label">商品库存：</td>
    <td><input type="text" name="kucun" value=""><br>（例如：商品库存）</td>
  </tr>
 
<tr>
    <td class="label">虚拟销量：</td>
    <td><input type="text" name="ghost_count" value=""><br>前台的销量等于实际销量加设置的</td>
  </tr>
 
	<tr>
					<td class="label">商品分类</td>
					<td>
						<input type="text" id="cat_name" name="cat_name" nowvalue="<?php echo $this->_var['goods_cat_id']; ?>" value="<?php echo $this->_var['goods_cat_name']; ?>">
						<input type="hidden" id="cat_id" name="cat_id" value="<?php echo $this->_var['goods_cat_id']; ?>">
						 <?php echo $this->_var['lang']['require_field']; ?>
						<script type="text/javascript">
                		$().ready(function(){
							// $("#cat_name")为获取分类名称的jQuery对象，可根据实际情况修改
							// $("#cat_id")为获取分类ID的jQuery对象，可根据实际情况修改
							// "<?php echo $this->_var['goods_cat_id']; ?>"为被选中的商品分类编号，无则设置为null或者不写此参数或者为空字符串
							$.ajaxCategorySelecter($("#cat_name"), $("#cat_id"), "<?php echo $this->_var['goods_cat_id']; ?>");
						});
            			</script>
					</td>
				</tr>


    <td class="label">保存到相册中的图片数量:</td>
    <td><input type="text" name="num" value="10"><br>(图片会下载到服务器本地，部分商品图片可能很多导致执行超时 建议控制一下数量)</td>
  </tr>
  <tr>
    <td class="label">操作:</td>
    <td><input type="radio" name="do" checked value="1">导入 <input type="radio" name="do" value="2">预览</td>
  </tr>
  <tr>
    <td class="label">使用淘宝商品名称：</td>
    <td><input type="radio" name="istitle" checked="checked" value="1">是<input type="radio" name="istitle"  value="0">否</td>
  </tr>
  <tr>
    <td class="label">抓取评价并伪造为购买记录：</td>
    <td><input type="text" name="cnum" value="20">条（请填写20的倍数,例如20 40 80）</td>
  </tr>
  <tr>
  <input type="hidden" name="gid" value="<?php echo $this->_var['gid']; ?>">
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
    <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</tbody></table>
</form>
</div>

<?php echo $this->fetch('pagefooter.htm'); ?>