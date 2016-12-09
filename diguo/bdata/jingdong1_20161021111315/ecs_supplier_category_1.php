<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_category`;");
E_C("CREATE TABLE `ecs_supplier_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_show_cat_pic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cat_pic` varchar(255) NOT NULL DEFAULT '',
  `cat_pic_url` varchar(100) NOT NULL DEFAULT '',
  `cat_goods_limit` smallint(3) unsigned NOT NULL DEFAULT '4',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`,`supplier_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_category` values('2','支付插件','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('3','功能插件','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('4','ecshop模板','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('5','设计服务','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('6','天猫采集评论','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('7','二次开发','','','0','50','','','1','','1','0','','25','0','','','8');");
E_D("replace into `ecs_supplier_category` values('8','微信支付','','','2','50','','','0','','1','0','','25','1','','','8');");
E_D("replace into `ecs_supplier_category` values('9','支付宝支付','','','2','50','','','0','','1','0','','25','0','','','8');");

require("../../inc/footer.php");
?>