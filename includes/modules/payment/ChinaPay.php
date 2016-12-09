<?php


/**
* ECSHOP 上海银联电子支付插件
* ============================================================================
* 版权所有 2005-2008 上海商派网络科技有限公司，并保留所有权利。
* 网站地址: http://www.ecshop.com；
* ----------------------------------------------------------------------------
* 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
* 使用；不允许对程序代码以任何形式任何目的的再发布。
* ============================================================================
* $Author:linys $
* $Id: chinapay.php 15013 2009-07-28 09:31:42Z linys $
*/

if (!defined('IN_ECS'))
{
die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/ChinaPay.php';



if (file_exists($payment_lang))
{
global $_LANG;

include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
$i = isset($modules) ? count($modules) : 0;

/* 代码 */
$modules[$i]['code'] = basename(__FILE__, '.php');

/* 描述对应的语言项 */
$modules[$i]['desc'] = 'chinapay_desc';

/* 是否支持货到付款 */
$modules[$i]['is_cod'] = '0';

/* 是否支持在线支付 */
$modules[$i]['is_online'] = '1';

/* 支付费用 */
$modules[$i]['pay_fee'] = '1.5%';

/* 作者 */
$modules[$i]['author'] = '怕冷哥哥';

/* 网址 */
$modules[$i]['website'] = 'http://www.chinapay.com';

/* 版本号 */
$modules[$i]['version'] = '1.0.0';

/* 配置信息 */
$modules[$i]['config'] = array(

array('name' => 'chinapay_account', 'type' => 'text', 'value' => ''),

);

return;
}

/**
* 类
*/
class chinapay
{
/**
* 构造函数
*
* @access public
* @param
*
* @return void
*/
function chinapay()
{
}

function __construct()
{
$this->chinapay();
}

/**
* 生成支付代码
* @param array $order 订单信息
* @param array $payment 支付方式信息
*/
function get_code($order, $payment)
{
  
  include_once(ROOT_PATH ."chinapay/SecssUtil.class.php");
  $securityPropFile=ROOT_PATH."chinapay/security.properties";




   $param=array(
  'MerId' =>  trim($payment['chinapay_account']),
  'MerOrderNo' => str_repeat('0', 16 - strlen($order['order_sn'])) . $order['order_sn'],
  'OrderAmt' => $order['order_amount']*100,
  'TranDate' =>  date('Ymd'), 
  'TranTime' =>  date('Hms') ,
  'TranType' => '0001' 	,
  'BusiType' => '0001' ,
  'Version' =>  '20140728' ,
  'MerPageUrl' => return_url(basename(__FILE__, '.php')),
  'MerBgUrl' =>  $GLOBALS['ecs']->url()."chinapay/huidiao.php",
  'MerResv' => $order['log_id']

 );
  
$qianming=new SecssUtil;





$qianming->init($securityPropFile);




$qianming->sign($param);



 if("00"!=$qianming->getErrCode()){
echo"签名过程发生错误，错误信息为-->".$qianming.getErrMsg();
	exit;
}
$signature=$qianming->getSign();



$param['Signature']	=  $signature;



$def_url = "<br /><form style='text-align:center;' method='post' action='https://payment.chinapay.com/CTITS/service/rest/page/nref/000000000017/0/0/0/0/0' target='_blank'>";

foreach ($param as $k=>$v){
$def_url .= "<input type=HIDDEN name='".$k."' value='".$v."'/>"; 
}
$def_url .= "<input type=submit value='" .$GLOBALS['_LANG']['pay_button']. "'>";
$def_url .= "</form>";

return $def_url;
}


/**
* 响应操作
*/

function respond()
{

 include_once(ROOT_PATH ."chinapay/SecssUtil.class.php");
 $securityPropFile=ROOT_PATH."chinapay/security.properties";

 $log_id = trim($_POST['MerResv']);

        $secssUtil = new SecssUtil();
       
        $secssUtil->init($securityPropFile);
       
        if ($secssUtil->verify($_POST)) {
           
         

		   order_paid($log_id,2);
				
		    return true;
        } else {
           return false;
        }



}
}















?>