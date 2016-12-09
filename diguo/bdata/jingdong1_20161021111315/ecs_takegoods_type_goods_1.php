<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_type_goods`;");
E_C("CREATE TABLE `ecs_takegoods_type_goods` (
  `tg_type_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_ids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tg_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>