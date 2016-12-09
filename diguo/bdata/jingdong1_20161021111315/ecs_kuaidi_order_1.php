<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order`;");
E_C("CREATE TABLE `ecs_kuaidi_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(250) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `send_name` varchar(100) NOT NULL,
  `send_tel` varchar(50) NOT NULL,
  `send_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `send_address` varchar(150) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `to_tel` varchar(50) NOT NULL,
  `to_region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `to_address` varchar(150) NOT NULL,
  `goods_weight` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `goods_name` varchar(200) NOT NULL,
  `package_num` int(5) unsigned NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `money` decimal(5,2) unsigned NOT NULL DEFAULT '0.00',
  `remark` varchar(255) NOT NULL,
  `postman_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL,
  `finish_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kuaidi_order` values('1','请输入快递单号','1428','','','0','','哈哈','18530181714','1603','111','0.00','1','18','1','0','0','0.00','','0','1','1475316788','0');");
E_D("replace into `ecs_kuaidi_order` values('2','请输入快递单号','1428','','','0','','哈哈','18530181714','1603','111','0.00','1','19','1','0','0','0.00','','0','1','1475455532','0');");
E_D("replace into `ecs_kuaidi_order` values('3','请输入快递单号','1428','','','0','','哈哈','18530181714','1603','111','0.00','1','20','1','0','0','0.00','','0','1','1475458983','0');");

require("../../inc/footer.php");
?>