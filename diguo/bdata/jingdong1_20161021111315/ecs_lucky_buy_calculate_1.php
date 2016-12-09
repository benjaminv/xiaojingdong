<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_lucky_buy_calculate`;");
E_C("CREATE TABLE `ecs_lucky_buy_calculate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lucky_buy_id` int(11) NOT NULL DEFAULT '0',
  `act_id` mediumint(8) NOT NULL DEFAULT '0',
  `schedule_id` int(11) NOT NULL DEFAULT '0',
  `code` int(11) NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `used_time` int(11) unsigned NOT NULL DEFAULT '0',
  `used_time_millisecond` int(3) NOT NULL DEFAULT '0',
  `calculate_number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `act_id` (`act_id`,`schedule_id`,`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>