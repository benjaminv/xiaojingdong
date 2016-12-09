<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','23','2','CLG000023g_p1','100');");
E_D("replace into `ecs_products` values('2','23','3','CLG000023g_p2','100');");
E_D("replace into `ecs_products` values('3','23','1','CLG000023g_p3','100');");
E_D("replace into `ecs_products` values('4','24','4','CLG000024g_p4','122');");
E_D("replace into `ecs_products` values('5','24','5','CLG000024g_p5','122');");
E_D("replace into `ecs_products` values('6','24','6','CLG000024g_p6','122');");

require("../../inc/footer.php");
?>