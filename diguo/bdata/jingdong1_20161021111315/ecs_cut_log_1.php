<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cut_log`;");
E_C("CREATE TABLE `ecs_cut_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cut_id` int(10) NOT NULL DEFAULT '0',
  `act_id` int(10) NOT NULL DEFAULT '0',
  `act_user` mediumint(8) NOT NULL,
  `cut_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cut_user_nickname` varchar(200) NOT NULL,
  `cut_user_head` varchar(200) NOT NULL,
  `cut_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `after_cut_price` decimal(10,2) NOT NULL,
  `cut_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cut_log` values('1','1','3','1','1','u835BWBD4542','','5.00','95.00','1476941674');");

require("../../inc/footer.php");
?>