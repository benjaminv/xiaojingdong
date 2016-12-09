<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_goods_district`;");
E_C("CREATE TABLE `ecs_virtual_goods_district` (
  `district_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(255) DEFAULT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `province` smallint(5) unsigned DEFAULT NULL,
  `city` smallint(5) unsigned DEFAULT NULL,
  `county` smallint(5) unsigned DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL COMMENT '排序',
  `is_show` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>