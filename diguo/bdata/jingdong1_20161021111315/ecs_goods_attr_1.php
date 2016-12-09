<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','23','121','白色','');");
E_D("replace into `ecs_goods_attr` values('2','23','121','粉色','');");
E_D("replace into `ecs_goods_attr` values('3','23','121','红色','');");
E_D("replace into `ecs_goods_attr` values('4','24','121','蓝色','');");
E_D("replace into `ecs_goods_attr` values('5','24','121','白色','');");
E_D("replace into `ecs_goods_attr` values('6','24','121','红色','');");

require("../../inc/footer.php");
?>