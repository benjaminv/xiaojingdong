<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_new_remind`;");
E_C("CREATE TABLE `ecs_weixin_new_remind` (
  `id` tinyint(1) NOT NULL,
  `remind_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `templet_id` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_new_remind` values('1','extpintuan_open','开团成功通知','PDSagX5Q2UAhDrp6UonjFfSy2CAt8qhSY1aHryUjKFQ','1');");
E_D("replace into `ecs_weixin_new_remind` values('2','extpintuan_join','参团成功通知','tMnQAhmZfhD9A_4FyC-NQPRhc7IVhFQaBBlYkQONp8U','1');");
E_D("replace into `ecs_weixin_new_remind` values('3','extpintuan_success','拼团成功通知','JvkX6pV268GfG5K9TnjCuPuw6o5xwRrK-uph7L4MKKU','1');");
E_D("replace into `ecs_weixin_new_remind` values('4','extpintuan_fail','拼团失败通知','_XObFFPSpwdvgyleu0q_lRyePNMrBYclFXsK-fN0e9I','1');");
E_D("replace into `ecs_weixin_new_remind` values('5','extpintuan_result','活动结果通知(拼团)','g8gy1LRiTRTm96YW4FUVVF8Yr2VgrhvdvqB3uZeLVjs','1');");

require("../../inc/footer.php");
?>