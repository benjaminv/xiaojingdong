<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order_status`;");
E_C("CREATE TABLE `ecs_kuaidi_order_status` (
  `rec_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `status_id` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status_name` varchar(50) NOT NULL DEFAULT '待确认',
  `status_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_kuaidi_order_status` values('1','1','1','待确认','0','1','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('2','1','2','已确认未揽收','0','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('3','1','3','已确认已揽收','0','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('4','1','4','已签收','1','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('5','1','5','拒收','2','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('6','1','6','拒收已退回','2','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('7','1','7','已取消','3','0','1475316788');");
E_D("replace into `ecs_kuaidi_order_status` values('8','2','1','待确认','0','1','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('9','2','2','已确认未揽收','0','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('10','2','3','已确认已揽收','0','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('11','2','4','已签收','1','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('12','2','5','拒收','2','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('13','2','6','拒收已退回','2','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('14','2','7','已取消','3','0','1475455532');");
E_D("replace into `ecs_kuaidi_order_status` values('15','3','1','待确认','0','1','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('16','3','2','已确认未揽收','0','0','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('17','3','3','已确认已揽收','0','0','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('18','3','4','已签收','1','0','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('19','3','5','拒收','2','0','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('20','3','6','拒收已退回','2','0','1475458983');");
E_D("replace into `ecs_kuaidi_order_status` values('21','3','7','已取消','3','0','1475458983');");

require("../../inc/footer.php");
?>