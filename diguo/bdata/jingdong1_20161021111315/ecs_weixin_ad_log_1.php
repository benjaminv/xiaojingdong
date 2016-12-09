<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_ad_log`;");
E_C("CREATE TABLE `ecs_weixin_ad_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `ad_id` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '收益状态',
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_ad_log` values('1','1','33','0','1468372669');");
E_D("replace into `ecs_weixin_ad_log` values('2','1','33','1','1468372745');");
E_D("replace into `ecs_weixin_ad_log` values('3','1','33','0','1468372745');");
E_D("replace into `ecs_weixin_ad_log` values('4','1','33','1','1468372789');");
E_D("replace into `ecs_weixin_ad_log` values('5','1','33','0','1468372789');");
E_D("replace into `ecs_weixin_ad_log` values('6','1','33','0','1468373184');");
E_D("replace into `ecs_weixin_ad_log` values('7','1','33','0','1468373243');");
E_D("replace into `ecs_weixin_ad_log` values('8','1','33','1','1468373629');");
E_D("replace into `ecs_weixin_ad_log` values('9','1','33','0','1468373629');");
E_D("replace into `ecs_weixin_ad_log` values('10','1','33','0','1468373653');");
E_D("replace into `ecs_weixin_ad_log` values('11','1','33','0','1468373653');");
E_D("replace into `ecs_weixin_ad_log` values('12','1','33','0','1468373655');");
E_D("replace into `ecs_weixin_ad_log` values('13','1','33','0','1468373655');");
E_D("replace into `ecs_weixin_ad_log` values('14','1','33','0','1468373658');");
E_D("replace into `ecs_weixin_ad_log` values('15','1','33','0','1468373658');");
E_D("replace into `ecs_weixin_ad_log` values('16','1','33','0','1468373659');");
E_D("replace into `ecs_weixin_ad_log` values('17','1','33','0','1468373659');");
E_D("replace into `ecs_weixin_ad_log` values('18','1','33','1','1468373841');");
E_D("replace into `ecs_weixin_ad_log` values('19','1','33','0','1468373871');");
E_D("replace into `ecs_weixin_ad_log` values('20','1','33','0','1468374846');");
E_D("replace into `ecs_weixin_ad_log` values('21','1','34','0','1468375323');");
E_D("replace into `ecs_weixin_ad_log` values('22','0','34','1','1468375324');");
E_D("replace into `ecs_weixin_ad_log` values('23','0','34','1','1468375333');");
E_D("replace into `ecs_weixin_ad_log` values('24','1','10','0','1468396636');");
E_D("replace into `ecs_weixin_ad_log` values('25','1','15','0','1468405003');");
E_D("replace into `ecs_weixin_ad_log` values('26','0','33','0','1468500528');");
E_D("replace into `ecs_weixin_ad_log` values('27','0','33','0','1468500643');");
E_D("replace into `ecs_weixin_ad_log` values('28','0','0','0','1468500700');");
E_D("replace into `ecs_weixin_ad_log` values('29','0','33','0','1468500712');");
E_D("replace into `ecs_weixin_ad_log` values('30','0','33','0','1468500713');");
E_D("replace into `ecs_weixin_ad_log` values('31','0','0','0','1468500718');");
E_D("replace into `ecs_weixin_ad_log` values('32','0','33','0','1468500719');");
E_D("replace into `ecs_weixin_ad_log` values('33','0','33','0','1468500720');");
E_D("replace into `ecs_weixin_ad_log` values('34','0','0','0','1468500726');");
E_D("replace into `ecs_weixin_ad_log` values('35','0','33','0','1468500733');");
E_D("replace into `ecs_weixin_ad_log` values('36','0','33','0','1468500793');");
E_D("replace into `ecs_weixin_ad_log` values('37','0','33','0','1468587577');");
E_D("replace into `ecs_weixin_ad_log` values('38','0','33','0','1468587852');");
E_D("replace into `ecs_weixin_ad_log` values('39','0','33','0','1468589581');");

require("../../inc/footer.php");
?>