<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_extpintuan_orders`;");
E_C("CREATE TABLE `ecs_extpintuan_orders` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pt_id` int(10) unsigned NOT NULL DEFAULT '0',
  `act_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `act_user` mediumint(8) NOT NULL,
  `follow_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `follow_user_nickname` varchar(200) NOT NULL,
  `follow_user_head` varchar(200) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL,
  `order_sn` varchar(64) NOT NULL,
  `lucky_order` int(1) NOT NULL DEFAULT '0',
  `follow_time` int(10) unsigned NOT NULL DEFAULT '0',
  `notify` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>