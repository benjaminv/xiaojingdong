<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_role`;");
E_C("CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_role` values('1','测试','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage,topic_manage,ad_manage,gift_manage,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,attention_list,email_list,magazine_list,view_sendlist,send_mail,sms_send,supplier_manage,supplier_rank,supplier_rebate,supplier_tag,weixin_config,weixin_addconfig,weixin_menu,weixin_notice,weixin_keywords,weixin_fans,weixin_news,weixin_addqcode,weixin_qcode,weixin_reg,pickup_point_manage,pickup_point_batch','测试      ');");
E_D("replace into `ecs_role` values('2','摄影部','goods_manage,attr_manage,brand_manage,picture_batch,goods_export,flash_manage,topic_manage,ad_manage,gift_manage,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order','摄影部 ');");
E_D("replace into `ecs_role` values('3','采购部','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,picture_batch,goods_export,scan_store','采购部');");
E_D("replace into `ecs_role` values('4','门店管理','goods_manage,cat_manage,tag_manage,goods_type,goods_auto,question_manage,shaidan_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage','门店管理');");
E_D("replace into `ecs_role` values('5','财务部','order_os_edit,order_ps_edit,order_ss_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view','财务部');");

require("../../inc/footer.php");
?>