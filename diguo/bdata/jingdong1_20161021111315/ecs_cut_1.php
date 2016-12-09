<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cut`;");
E_C("CREATE TABLE `ecs_cut` (
  `cut_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_nickname` varchar(200) NOT NULL,
  `user_head` varchar(200) NOT NULL,
  `act_id` mediumint(8) NOT NULL,
  `act_type` tinyint(3) NOT NULL,
  `shop_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `max_buy_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `new_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_cut_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_buy_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_times` int(10) unsigned NOT NULL DEFAULT '0',
  `is_finished` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cut_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cut` values('1','1','u835BWBD4542','','3','8','100.00','-1.00','95.00','1476941600','1477114400','1477287200','0','0');");

require("../../inc/footer.php");
?>