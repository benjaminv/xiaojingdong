<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan_img`;");
E_C("CREATE TABLE `ecs_shaidan_img` (
  `img_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `shaidan_id` mediumint(8) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>