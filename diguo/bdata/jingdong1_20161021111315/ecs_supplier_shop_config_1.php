<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_shop_config`;");
E_C("CREATE TABLE `ecs_supplier_shop_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`supplier_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>