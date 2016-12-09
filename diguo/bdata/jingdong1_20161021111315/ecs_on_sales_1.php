<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_on_sales`;");
E_C("CREATE TABLE `ecs_on_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_ids` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_on_sales` values('1','56','');");
E_D("replace into `ecs_on_sales` values('2','57','');");
E_D("replace into `ecs_on_sales` values('3','58','1,4');");
E_D("replace into `ecs_on_sales` values('4','1','1,8,6,3,5');");
E_D("replace into `ecs_on_sales` values('5','4','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('6','16','1,4');");
E_D("replace into `ecs_on_sales` values('7','9','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('8','15','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('9','37','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('10','75','1');");
E_D("replace into `ecs_on_sales` values('11','93','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('12','98','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('13','100','8');");
E_D("replace into `ecs_on_sales` values('14','109','5');");
E_D("replace into `ecs_on_sales` values('15','119','7');");
E_D("replace into `ecs_on_sales` values('16','121','4');");
E_D("replace into `ecs_on_sales` values('17','122','5');");
E_D("replace into `ecs_on_sales` values('18','133','1');");
E_D("replace into `ecs_on_sales` values('19','128','1,4,5,8');");
E_D("replace into `ecs_on_sales` values('20','162','1');");
E_D("replace into `ecs_on_sales` values('21','136','1,4,5,8,6');");
E_D("replace into `ecs_on_sales` values('22','189','1,4,5,8,6,3');");
E_D("replace into `ecs_on_sales` values('23','96','1,4,5,8,6,3');");
E_D("replace into `ecs_on_sales` values('24','212','1');");
E_D("replace into `ecs_on_sales` values('25','218','1');");
E_D("replace into `ecs_on_sales` values('26','222','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('27','229','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('28','258','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('29','264','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('30','266','5,8');");
E_D("replace into `ecs_on_sales` values('31','228','1,8');");
E_D("replace into `ecs_on_sales` values('32','278','1');");
E_D("replace into `ecs_on_sales` values('33','287','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('34','299','1,4,6');");
E_D("replace into `ecs_on_sales` values('35','309','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('36','313','1');");
E_D("replace into `ecs_on_sales` values('37','314','5,7');");
E_D("replace into `ecs_on_sales` values('38','318','1,3');");
E_D("replace into `ecs_on_sales` values('39','328','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('40','329','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('41','345','1');");
E_D("replace into `ecs_on_sales` values('42','346','7');");
E_D("replace into `ecs_on_sales` values('43','310','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('44','361','1');");
E_D("replace into `ecs_on_sales` values('45','357','1,4');");
E_D("replace into `ecs_on_sales` values('46','208','1');");
E_D("replace into `ecs_on_sales` values('47','373','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('48','375','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('49','396','1');");
E_D("replace into `ecs_on_sales` values('50','403','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('51','412','1,4,5,8,6,3,7');");
E_D("replace into `ecs_on_sales` values('52','438','1,4,5,8,6,3,7,,2');");
E_D("replace into `ecs_on_sales` values('53','460','1,4,5,8,6,3,7,2');");
E_D("replace into `ecs_on_sales` values('54','477','3');");
E_D("replace into `ecs_on_sales` values('55','933','356');");
E_D("replace into `ecs_on_sales` values('56','934','357,356,942,1036,907');");
E_D("replace into `ecs_on_sales` values('57','855','356,1113');");
E_D("replace into `ecs_on_sales` values('58','1136','356');");
E_D("replace into `ecs_on_sales` values('59','1264','356,1113,942,907');");
E_D("replace into `ecs_on_sales` values('60','1303','356,1113,942,907');");
E_D("replace into `ecs_on_sales` values('61','1342','356');");
E_D("replace into `ecs_on_sales` values('62','25','356,1113,942,907');");
E_D("replace into `ecs_on_sales` values('63','1414','356,907,1020,1113,942');");
E_D("replace into `ecs_on_sales` values('64','1428','1126,1127,1128,1131,1129');");

require("../../inc/footer.php");
?>