<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_share`;");
E_C("CREATE TABLE `ecs_weixin_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_share` values('1','1','1','1462576781');");
E_D("replace into `ecs_weixin_share` values('2','9','1','1462627589');");
E_D("replace into `ecs_weixin_share` values('3','9','1','1462627594');");
E_D("replace into `ecs_weixin_share` values('4','1','2','1462660891');");
E_D("replace into `ecs_weixin_share` values('5','1','2','1462662748');");
E_D("replace into `ecs_weixin_share` values('6','1','2','1462665137');");
E_D("replace into `ecs_weixin_share` values('7','5','1','1462767369');");
E_D("replace into `ecs_weixin_share` values('8','9','1','1462771614');");
E_D("replace into `ecs_weixin_share` values('9','9','1','1462771719');");
E_D("replace into `ecs_weixin_share` values('10','1','1','1462802452');");
E_D("replace into `ecs_weixin_share` values('11','1','2','1462892042');");
E_D("replace into `ecs_weixin_share` values('12','1','2','1462892332');");
E_D("replace into `ecs_weixin_share` values('13','1','1','1463026652');");
E_D("replace into `ecs_weixin_share` values('14','1','1','1463047724');");
E_D("replace into `ecs_weixin_share` values('15','1','1','1463117591');");
E_D("replace into `ecs_weixin_share` values('16','1','1','1463126527');");
E_D("replace into `ecs_weixin_share` values('17','1','1','1463128247');");
E_D("replace into `ecs_weixin_share` values('18','1','2','1463152314');");
E_D("replace into `ecs_weixin_share` values('19','1','2','1463154700');");
E_D("replace into `ecs_weixin_share` values('20','1','2','1463180183');");
E_D("replace into `ecs_weixin_share` values('21','39','2','1463217550');");
E_D("replace into `ecs_weixin_share` values('22','1','1','1463225053');");
E_D("replace into `ecs_weixin_share` values('23','1','1','1463288585');");
E_D("replace into `ecs_weixin_share` values('24','1','2','1463311081');");
E_D("replace into `ecs_weixin_share` values('25','1','1','1463323697');");
E_D("replace into `ecs_weixin_share` values('26','5','1','1463323862');");
E_D("replace into `ecs_weixin_share` values('27','1','1','1463324045');");
E_D("replace into `ecs_weixin_share` values('28','55','1','1463353595');");
E_D("replace into `ecs_weixin_share` values('29','61','1','1463389709');");
E_D("replace into `ecs_weixin_share` values('30','66','1','1463481816');");
E_D("replace into `ecs_weixin_share` values('31','1','2','1463732172');");
E_D("replace into `ecs_weixin_share` values('32','1','2','1463924993');");
E_D("replace into `ecs_weixin_share` values('33','1','1','1463955923');");
E_D("replace into `ecs_weixin_share` values('34','1','1','1463955944');");
E_D("replace into `ecs_weixin_share` values('35','1','2','1463956248');");
E_D("replace into `ecs_weixin_share` values('36','1','2','1463956263');");
E_D("replace into `ecs_weixin_share` values('37','1','2','1463956393');");
E_D("replace into `ecs_weixin_share` values('38','1','2','1463956432');");
E_D("replace into `ecs_weixin_share` values('39','1','2','1463956464');");
E_D("replace into `ecs_weixin_share` values('40','1','2','1463956519');");
E_D("replace into `ecs_weixin_share` values('41','1','1','1463968294');");
E_D("replace into `ecs_weixin_share` values('42','1','2','1463975284');");
E_D("replace into `ecs_weixin_share` values('43','1','2','1463975495');");
E_D("replace into `ecs_weixin_share` values('44','25','1','1463985760');");
E_D("replace into `ecs_weixin_share` values('45','25','1','1463985881');");
E_D("replace into `ecs_weixin_share` values('46','70','1','1464012829');");
E_D("replace into `ecs_weixin_share` values('47','93','1','1464255168');");
E_D("replace into `ecs_weixin_share` values('48','93','1','1464255286');");
E_D("replace into `ecs_weixin_share` values('49','93','1','1464255373');");
E_D("replace into `ecs_weixin_share` values('50','93','1','1464255694');");
E_D("replace into `ecs_weixin_share` values('51','94','1','1464256009');");
E_D("replace into `ecs_weixin_share` values('52','1','2','1464652608');");
E_D("replace into `ecs_weixin_share` values('53','97','1','1464688921');");
E_D("replace into `ecs_weixin_share` values('54','1','2','1464837458');");
E_D("replace into `ecs_weixin_share` values('55','70','1','1464864619');");
E_D("replace into `ecs_weixin_share` values('56','70','1','1465202484');");
E_D("replace into `ecs_weixin_share` values('57','1','1','1465461744');");
E_D("replace into `ecs_weixin_share` values('58','159','1','1465608960');");
E_D("replace into `ecs_weixin_share` values('59','159','1','1465609029');");
E_D("replace into `ecs_weixin_share` values('60','1','1','1465982680');");
E_D("replace into `ecs_weixin_share` values('61','219','1','1466212982');");
E_D("replace into `ecs_weixin_share` values('62','39','1','1466508175');");
E_D("replace into `ecs_weixin_share` values('63','39','1','1466508274');");
E_D("replace into `ecs_weixin_share` values('64','39','1','1466514735');");
E_D("replace into `ecs_weixin_share` values('65','39','1','1466515548');");
E_D("replace into `ecs_weixin_share` values('66','39','2','1466515737');");
E_D("replace into `ecs_weixin_share` values('67','39','1','1466516129');");
E_D("replace into `ecs_weixin_share` values('68','39','1','1466516573');");
E_D("replace into `ecs_weixin_share` values('69','39','2','1466516605');");
E_D("replace into `ecs_weixin_share` values('70','1','1','1466522561');");
E_D("replace into `ecs_weixin_share` values('71','1','2','1466522577');");
E_D("replace into `ecs_weixin_share` values('72','1','2','1466522585');");
E_D("replace into `ecs_weixin_share` values('73','39','1','1466522912');");
E_D("replace into `ecs_weixin_share` values('74','39','1','1466523467');");
E_D("replace into `ecs_weixin_share` values('75','39','2','1466523648');");
E_D("replace into `ecs_weixin_share` values('76','39','1','1466523946');");
E_D("replace into `ecs_weixin_share` values('77','39','1','1466524046');");
E_D("replace into `ecs_weixin_share` values('78','39','2','1466524251');");
E_D("replace into `ecs_weixin_share` values('79','1','2','1466543631');");
E_D("replace into `ecs_weixin_share` values('80','1','2','1466544943');");
E_D("replace into `ecs_weixin_share` values('81','1','2','1466552475');");
E_D("replace into `ecs_weixin_share` values('82','235','1','1466602632');");
E_D("replace into `ecs_weixin_share` values('83','236','1','1466604773');");
E_D("replace into `ecs_weixin_share` values('84','250','1','1466663830');");
E_D("replace into `ecs_weixin_share` values('85','1','2','1466687919');");
E_D("replace into `ecs_weixin_share` values('86','1','2','1466688273');");
E_D("replace into `ecs_weixin_share` values('87','1','2','1466690787');");
E_D("replace into `ecs_weixin_share` values('88','1','2','1466690832');");
E_D("replace into `ecs_weixin_share` values('89','1','1','1466697276');");
E_D("replace into `ecs_weixin_share` values('90','1','1','1466700216');");
E_D("replace into `ecs_weixin_share` values('91','1','1','1466729034');");
E_D("replace into `ecs_weixin_share` values('92','1','2','1466729097');");
E_D("replace into `ecs_weixin_share` values('93','1','2','1466743831');");
E_D("replace into `ecs_weixin_share` values('94','1','1','1466837125');");
E_D("replace into `ecs_weixin_share` values('95','233','1','1466855824');");
E_D("replace into `ecs_weixin_share` values('96','204','1','1466857145');");
E_D("replace into `ecs_weixin_share` values('97','204','1','1466857182');");
E_D("replace into `ecs_weixin_share` values('98','1','1','1466979670');");
E_D("replace into `ecs_weixin_share` values('99','1','1','1466998366');");
E_D("replace into `ecs_weixin_share` values('100','233','1','1467012254');");
E_D("replace into `ecs_weixin_share` values('186','471','1','1468648895');");
E_D("replace into `ecs_weixin_share` values('185','66','1','1468584640');");
E_D("replace into `ecs_weixin_share` values('184','1','1','1468390849');");
E_D("replace into `ecs_weixin_share` values('183','1','1','1468390791');");
E_D("replace into `ecs_weixin_share` values('182','219','1','1468390432');");
E_D("replace into `ecs_weixin_share` values('181','219','1','1468390356');");
E_D("replace into `ecs_weixin_share` values('180','219','1','1468390342');");
E_D("replace into `ecs_weixin_share` values('179','367','1','1468296908');");
E_D("replace into `ecs_weixin_share` values('178','367','1','1468296735');");
E_D("replace into `ecs_weixin_share` values('171','1','1','1468024659');");
E_D("replace into `ecs_weixin_share` values('170','1','2','1468024616');");
E_D("replace into `ecs_weixin_share` values('177','367','2','1468296700');");
E_D("replace into `ecs_weixin_share` values('176','367','2','1468296679');");
E_D("replace into `ecs_weixin_share` values('175','412','2','1468202306');");
E_D("replace into `ecs_weixin_share` values('174','1','1','1468025460');");
E_D("replace into `ecs_weixin_share` values('173','1','1','1468025428');");
E_D("replace into `ecs_weixin_share` values('172','1','1','1468025410');");
E_D("replace into `ecs_weixin_share` values('187','1397','1','1471938465');");
E_D("replace into `ecs_weixin_share` values('188','1405','1','1472009084');");
E_D("replace into `ecs_weixin_share` values('189','1405','1','1472018842');");
E_D("replace into `ecs_weixin_share` values('190','1310','1','1472045943');");

require("../../inc/footer.php");
?>