<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_extpintuan_price`;");
E_C("CREATE TABLE `ecs_extpintuan_price` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `act_id` mediumint(8) NOT NULL,
  `pt_id` int(10) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>