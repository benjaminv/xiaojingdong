<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_dianpu`;");
E_C("CREATE TABLE `ecs_dianpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dianpu_name` varchar(255) NOT NULL,
  `dianpu_desc` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=254 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_dianpu` values('18','兴发茶业','','13878819545','','','','24');");
E_D("replace into `ecs_dianpu` values('12','兴发茶业','','13878819545','','','','855');");
E_D("replace into `ecs_dianpu` values('13','龙山茶业','','13607719895','','','','1051');");
E_D("replace into `ecs_dianpu` values('188','奉志茶行','','13217778689','','','','1209');");
E_D("replace into `ecs_dianpu` values('27','安记茗茶','',' 13737968800','','','','237');");
E_D("replace into `ecs_dianpu` values('69','静心茶社','','13977871233','','','','236');");
E_D("replace into `ecs_dianpu` values('32','陆羽茗茶','','15977848505','','','','1105');");
E_D("replace into `ecs_dianpu` values('33','陆羽茗茶','','17776197606','','','','1106');");
E_D("replace into `ecs_dianpu` values('36','海棠茶行','','13481800644','','','','1108');");
E_D("replace into `ecs_dianpu` values('41','刘三姐茶叶','','18178859483','','','','93');");
E_D("replace into `ecs_dianpu` values('46','青云茶叶','','13707788247','','','','156');");
E_D("replace into `ecs_dianpu` values('51','高隆茶行','','15949356095','','','','1114');");
E_D("replace into `ecs_dianpu` values('253','大益茶','','18934962181','','','','1115');");
E_D("replace into `ecs_dianpu` values('71','陆羽茶庄','','15277881090','','','','121');");
E_D("replace into `ecs_dianpu` values('66','陶茶居商城','','13877688987','','','','1121');");
E_D("replace into `ecs_dianpu` values('81','鑫海茶行','','15007813737','','','','212');");
E_D("replace into `ecs_dianpu` values('73','诚玟茶行','','15077122015','','','','1139');");
E_D("replace into `ecs_dianpu` values('74','诚丰烟酒茶行','','13347571938','','','','514');");
E_D("replace into `ecs_dianpu` values('76','雅铭茶行','','18907850669','','','','1145');");
E_D("replace into `ecs_dianpu` values('77','宏达茶叶店','','15977596829','','','','1148');");
E_D("replace into `ecs_dianpu` values('79','天成茶叶店','','18776549366','','','','1149');");
E_D("replace into `ecs_dianpu` values('80','四季香茗茶店','','13878583879','','','','719');");
E_D("replace into `ecs_dianpu` values('83','桂平西山碧水茶园','','18894825595','','','','1152');");
E_D("replace into `ecs_dianpu` values('85','茗星阁茶荘','','18978787779','','','','1154');");
E_D("replace into `ecs_dianpu` values('86','鼎龙茶庄','','15077559806','','','','1157');");
E_D("replace into `ecs_dianpu` values('87','林军文','','18376527600','','','','1155');");
E_D("replace into `ecs_dianpu` values('89','天乐茶馆','','13597155881','','','','1159');");
E_D("replace into `ecs_dianpu` values('91','品悦茗茶','','15108055506','','','','1160');");
E_D("replace into `ecs_dianpu` values('95','1','','18111507332','','','','1078');");
E_D("replace into `ecs_dianpu` values('97','瑞来商行','','1348156092','','','','782');");
E_D("replace into `ecs_dianpu` values('99','山里人茶叶','','18977506169','','','','909');");
E_D("replace into `ecs_dianpu` values('101','高峰茶业','','18978728857','','','','902');");
E_D("replace into `ecs_dianpu` values('103','阿飞茶业','','18878797008','','','','933');");
E_D("replace into `ecs_dianpu` values('105','一品香茶行','','15877065006','','','','918');");
E_D("replace into `ecs_dianpu` values('177','杨光齐','','15277039824','','','','1136');");
E_D("replace into `ecs_dianpu` values('214','悠源茶具经营部','','18775710603','','','','499');");
E_D("replace into `ecs_dianpu` values('111','闽福茶行','','13649465879','','','','477');");
E_D("replace into `ecs_dianpu` values('117','旺祥福茶行','','13788712143','','','','728');");
E_D("replace into `ecs_dianpu` values('119','怡翠茗茶行','','15878580080','','','','29');");
E_D("replace into `ecs_dianpu` values('137','联华茶业','','13557709577','','','','471');");
E_D("replace into `ecs_dianpu` values('139','福建茶行','','13387709997','','','','1200');");
E_D("replace into `ecs_dianpu` values('141','清馨茗茶','','18377022225','','','','194');");
E_D("replace into `ecs_dianpu` values('142','论品茶业','','13557700606','','','','192');");
E_D("replace into `ecs_dianpu` values('144','閩福茶業','','15860337257','','','','476');");
E_D("replace into `ecs_dianpu` values('146','云香茶业','','135577008887','','','','453');");
E_D("replace into `ecs_dianpu` values('147','闽南茶庄','','18907706292','','','','188');");
E_D("replace into `ecs_dianpu` values('148','陶陶茶坊','','13557700988','','','','1202');");
E_D("replace into `ecs_dianpu` values('171','荣盛茶行','','18277022996','','','','442');");
E_D("replace into `ecs_dianpu` values('150','壶韵茶庄','','13307732668','','','','85');");
E_D("replace into `ecs_dianpu` values('165','名茶行','','15296134853','','','','441');");
E_D("replace into `ecs_dianpu` values('167','福福茶行','','','','','','649');");
E_D("replace into `ecs_dianpu` values('173','源香茶业','','13557700859','','','','1205');");
E_D("replace into `ecs_dianpu` values('183','中山阁','','1867779883','','','','31');");
E_D("replace into `ecs_dianpu` values('187','山叶山茗茶','','','','','','1208');");
E_D("replace into `ecs_dianpu` values('189','凤鸿茶业','','18290199303','','','','1211');");
E_D("replace into `ecs_dianpu` values('209','新茗盛茶庄','','18977738599','','','','1212');");
E_D("replace into `ecs_dianpu` values('191','张氏茶行','','18677717636','','','','989');");
E_D("replace into `ecs_dianpu` values('215','钦州安溪茶行','','13877730159','','','','905');");
E_D("replace into `ecs_dianpu` values('216','双凤茶业','','15278783130','','','','123');");
E_D("replace into `ecs_dianpu` values('226','柏苑茗茶','','14797776276','','','','410');");
E_D("replace into `ecs_dianpu` values('227','御品轩茶业','','15677755556','','','','408');");
E_D("replace into `ecs_dianpu` values('229','金源盛茶业','','13677777912','','','','1216');");
E_D("replace into `ecs_dianpu` values('232','钦州宏韵茶业','','180777737307','','','','916');");
E_D("replace into `ecs_dianpu` values('233','古香韵茶业','','18977735556','','','','903');");
E_D("replace into `ecs_dianpu` values('250','钦州中闽弘杨茶','','13607772567','','','','404');");
E_D("replace into `ecs_dianpu` values('242','天祥茶具','','15578005812','','','','1213');");
E_D("replace into `ecs_dianpu` values('252','碧岩茶业','','18277189619','','','','934');");
E_D("replace into `ecs_dianpu` values('245','龙祥茶具','','14795399668','','','','1214');");

require("../../inc/footer.php");
?>