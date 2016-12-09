<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `split_money` decimal(10,2) NOT NULL,
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `comment_state` tinyint(1) NOT NULL DEFAULT '0',
  `shaidan_state` tinyint(1) NOT NULL DEFAULT '0',
  `package_attr_id` varchar(100) NOT NULL,
  `is_back` tinyint(1) NOT NULL DEFAULT '0',
  `cost_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `exclusive` varchar(255) NOT NULL DEFAULT '-1' COMMENT '手机专享价格',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','23','御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递','CLG000023','0','1','147.60','123.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('2','2','4','ecshop小京东程序升级php5.4,5.5,5.6以上版本错误修复','CLG000004','0','1','60.00','50.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('3','3','23','御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递','CLG000023','0','1','147.60','123.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('4','4','22','ecshop小京东ectouch富友跨境支付，国内支付插件，支持海关推送','CLG000022','0','1','600.00','500.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('5','5','14','威戈瑞士军刀双肩包男士背包大容量15.6寸电脑旅行背包中学生书包','CLG000014','0','1','120.00','100.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('6','6','22','ecshop小京东ectouch富友跨境支付，国内支付插件，支持海关推送','CLG000022','0','1','600.00','500.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");
E_D("replace into `ecs_order_goods` values('7','7','4','ecshop小京东程序升级php5.4,5.5,5.6以上版本错误修复','CLG000004','0','1','60.00','50.00','0.00','','0','1','','0','0','','0','0','','0','0.00','0.00','-1');");

require("../../inc/footer.php");
?>