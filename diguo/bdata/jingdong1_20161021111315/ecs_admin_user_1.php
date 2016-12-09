<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1','admin','chaligou@qq.com','f4f778d19ad5b829ab3f35687f7fc0af','8841','1469243200','1476990569','0.0.0.0','all','','','0','0','','0');");
E_D("replace into `ecs_admin_user` values('2','茶立购汉古','123@qq.com','40169ffc042e7d7a702e935b848d2f6a','2376','1470960952','1472089990','222.216.20.134','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage','','','0','0','','0');");
E_D("replace into `ecs_admin_user` values('3','包装部','122@qq.com','2835be6ba59fef38238e18f4dec6516e','8192','1471127598','1472076044','222.216.22.143','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,picture_batch,goods_export,goods_batch,gen_goods_script,question_manage,shaidan_manage,scan_store,order_comment_priv,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,invoice_manage','','','0','0','','0');");
E_D("replace into `ecs_admin_user` values('4','摄影部','123456@qq.com','9b27221c182be04d0579c8e621b33a31','6908','1471742929','1471742937','222.216.22.40','goods_manage,attr_manage,brand_manage,picture_batch,goods_export,flash_manage,topic_manage,ad_manage,gift_manage,bonus_manage,auction,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order','','','0','0','','2');");

require("../../inc/footer.php");
?>