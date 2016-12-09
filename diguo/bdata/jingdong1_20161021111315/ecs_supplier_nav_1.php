<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_nav`;");
E_C("CREATE TABLE `ecs_supplier_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_nav` values('3','c','2','支付插件','1','2','0','supplier.php?go=category&amp;suppId=25&amp;id=2','middle','25');");
E_D("replace into `ecs_supplier_nav` values('4','c','0','功能插件','1','4','0','supplier.php?go=category&amp;suppId=25&amp;id=3','middle','25');");
E_D("replace into `ecs_supplier_nav` values('5','c','0','设计服务','1','6','0','supplier.php?go=category&amp;suppId=25&amp;id=5','middle','25');");
E_D("replace into `ecs_supplier_nav` values('6','c','0','天猫采集评论','1','8','0','supplier.php?go=category&amp;suppId=25&amp;id=6','middle','25');");
E_D("replace into `ecs_supplier_nav` values('7','c','0','二次开发','1','10','0','supplier.php?go=category&amp;suppId=25&amp;id=7','middle','25');");
E_D("replace into `ecs_supplier_nav` values('8','c','4','ecshop模板','1','12','0','supplier.php?go=category&amp;suppId=25&amp;id=4','middle','25');");

require("../../inc/footer.php");
?>