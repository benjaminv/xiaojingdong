<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_actlog`;");
E_C("CREATE TABLE `ecs_weixin_actlog` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `createymd` date NOT NULL,
  `createtime` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `issend` tinyint(4) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `uid` (`uid`,`createymd`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_actlog` values('1','1264','1','','2016-08-13','1471077864','','0');");
E_D("replace into `ecs_weixin_actlog` values('2','1264','1','','2016-08-13','1471077869','','0');");
E_D("replace into `ecs_weixin_actlog` values('3','1264','1','','2016-08-13','1471077873','','0');");
E_D("replace into `ecs_weixin_actlog` values('4','1264','1','','2016-08-13','1471077878','','0');");
E_D("replace into `ecs_weixin_actlog` values('5','1264','1','ipad mini','2016-08-13','1471077884','57aeddfc5fe2e','1');");
E_D("replace into `ecs_weixin_actlog` values('6','1264','1','','2016-08-13','1471078013','','0');");
E_D("replace into `ecs_weixin_actlog` values('7','1264','1','','2016-08-13','1471078018','','0');");
E_D("replace into `ecs_weixin_actlog` values('8','1264','1','','2016-08-13','1471078032','','0');");
E_D("replace into `ecs_weixin_actlog` values('9','1264','1','','2016-08-13','1471078037','','0');");
E_D("replace into `ecs_weixin_actlog` values('10','1264','1','','2016-08-13','1471078043','','0');");
E_D("replace into `ecs_weixin_actlog` values('11','1298','1','','2016-08-13','1471094691','','0');");
E_D("replace into `ecs_weixin_actlog` values('12','1298','1','','2016-08-13','1471094696','','0');");
E_D("replace into `ecs_weixin_actlog` values('13','1298','1','','2016-08-13','1471094697','','0');");
E_D("replace into `ecs_weixin_actlog` values('14','1298','1','','2016-08-13','1471094699','','0');");
E_D("replace into `ecs_weixin_actlog` values('15','1298','1','','2016-08-13','1471094702','','0');");
E_D("replace into `ecs_weixin_actlog` values('16','1298','1','','2016-08-13','1471094704','','0');");
E_D("replace into `ecs_weixin_actlog` values('17','1298','1','','2016-08-13','1471094706','','0');");
E_D("replace into `ecs_weixin_actlog` values('18','1298','1','','2016-08-13','1471094712','','0');");
E_D("replace into `ecs_weixin_actlog` values('19','1298','1','','2016-08-13','1471094717','','0');");
E_D("replace into `ecs_weixin_actlog` values('20','1298','1','','2016-08-13','1471094721','','0');");
E_D("replace into `ecs_weixin_actlog` values('21','1264','1','','2016-08-14','1471155433','','0');");
E_D("replace into `ecs_weixin_actlog` values('22','1264','1','','2016-08-14','1471155444','','0');");
E_D("replace into `ecs_weixin_actlog` values('23','1264','1','','2016-08-14','1471163528','','0');");
E_D("replace into `ecs_weixin_actlog` values('24','1264','1','','2016-08-14','1471163533','','0');");
E_D("replace into `ecs_weixin_actlog` values('25','1264','1','','2016-08-14','1471163537','','0');");
E_D("replace into `ecs_weixin_actlog` values('26','1264','1','','2016-08-14','1471163546','','0');");
E_D("replace into `ecs_weixin_actlog` values('27','1264','1','','2016-08-14','1471163557','','0');");
E_D("replace into `ecs_weixin_actlog` values('28','1264','1','','2016-08-14','1471163578','','0');");
E_D("replace into `ecs_weixin_actlog` values('29','1264','1','','2016-08-14','1471163582','','0');");
E_D("replace into `ecs_weixin_actlog` values('30','1264','1','','2016-08-14','1471163586','','0');");
E_D("replace into `ecs_weixin_actlog` values('31','1264','1','','2016-08-20','1471659334','','0');");
E_D("replace into `ecs_weixin_actlog` values('32','1264','1','','2016-08-20','1471659454','','0');");
E_D("replace into `ecs_weixin_actlog` values('33','1264','1','','2016-08-20','1471659479','','0');");
E_D("replace into `ecs_weixin_actlog` values('34','1264','1','','2016-08-20','1471659483','','0');");
E_D("replace into `ecs_weixin_actlog` values('35','1264','1','','2016-08-20','1471659488','','0');");
E_D("replace into `ecs_weixin_actlog` values('36','1264','1','','2016-08-20','1471659493','','0');");
E_D("replace into `ecs_weixin_actlog` values('37','1264','1','','2016-08-20','1471659525','','0');");
E_D("replace into `ecs_weixin_actlog` values('38','1264','1','','2016-08-20','1471659530','','0');");
E_D("replace into `ecs_weixin_actlog` values('39','1264','1','ipad mini','2016-08-20','1471659535','57b7be0f9692e','0');");
E_D("replace into `ecs_weixin_actlog` values('40','1264','1','','2016-08-20','1471659554','','0');");
E_D("replace into `ecs_weixin_actlog` values('41','1364','1','','2016-08-20','1471679559','','0');");
E_D("replace into `ecs_weixin_actlog` values('42','1264','1','','2016-08-21','1471741939','','0');");
E_D("replace into `ecs_weixin_actlog` values('43','1358','1','','2016-08-21','1471770905','','0');");
E_D("replace into `ecs_weixin_actlog` values('44','1325','1','','2016-08-22','1471854582','','0');");
E_D("replace into `ecs_weixin_actlog` values('45','1325','1','','2016-08-22','1471854584','','0');");
E_D("replace into `ecs_weixin_actlog` values('46','1325','1','','2016-08-22','1471854588','','0');");
E_D("replace into `ecs_weixin_actlog` values('47','1325','1','','2016-08-22','1471854589','','0');");
E_D("replace into `ecs_weixin_actlog` values('48','1325','1','','2016-08-22','1471854590','','0');");
E_D("replace into `ecs_weixin_actlog` values('49','1325','1','','2016-08-22','1471854597','','0');");
E_D("replace into `ecs_weixin_actlog` values('50','1325','1','','2016-08-22','1471854598','','0');");

require("../../inc/footer.php");
?>