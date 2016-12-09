<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_sign`;");
E_C("CREATE TABLE `ecs_weixin_sign` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` int(11) NOT NULL,
  `signtime` int(11) NOT NULL,
  `signymd` date NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `wxid` (`wxid`,`signymd`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_sign` values('1','22','1458288806','2016-03-18');");
E_D("replace into `ecs_weixin_sign` values('2','129','1458384947','2016-03-19');");
E_D("replace into `ecs_weixin_sign` values('3','12','1462552127','2016-05-07');");
E_D("replace into `ecs_weixin_sign` values('4','1','1462558224','2016-05-07');");
E_D("replace into `ecs_weixin_sign` values('5','3','1462579467','2016-05-07');");
E_D("replace into `ecs_weixin_sign` values('6','6','1462681287','2016-05-08');");
E_D("replace into `ecs_weixin_sign` values('7','10','1462684705','2016-05-08');");
E_D("replace into `ecs_weixin_sign` values('8','10','1462727395','2016-05-09');");
E_D("replace into `ecs_weixin_sign` values('9','1','1462840848','2016-05-10');");
E_D("replace into `ecs_weixin_sign` values('10','10','1463013208','2016-05-12');");
E_D("replace into `ecs_weixin_sign` values('11','6','1463027707','2016-05-12');");
E_D("replace into `ecs_weixin_sign` values('12','1','1463055721','2016-05-12');");
E_D("replace into `ecs_weixin_sign` values('13','41','1463161111','2016-05-14');");
E_D("replace into `ecs_weixin_sign` values('14','1','1463201628','2016-05-14');");
E_D("replace into `ecs_weixin_sign` values('15','10','1463209525','2016-05-14');");
E_D("replace into `ecs_weixin_sign` values('16','52','1463301004','2016-05-15');");
E_D("replace into `ecs_weixin_sign` values('17','57','1463394912','2016-05-16');");
E_D("replace into `ecs_weixin_sign` values('18','67','1463755659','2016-05-20');");
E_D("replace into `ecs_weixin_sign` values('19','73','1463871280','2016-05-22');");
E_D("replace into `ecs_weixin_sign` values('20','30','1463978189','2016-05-23');");
E_D("replace into `ecs_weixin_sign` values('21','96','1464279626','2016-05-27');");
E_D("replace into `ecs_weixin_sign` values('22','94','1464301622','2016-05-27');");
E_D("replace into `ecs_weixin_sign` values('23','63','1464350920','2016-05-27');");
E_D("replace into `ecs_weixin_sign` values('24','105','1464419817','2016-05-28');");
E_D("replace into `ecs_weixin_sign` values('25','110','1464589190','2016-05-30');");
E_D("replace into `ecs_weixin_sign` values('26','111','1464589944','2016-05-30');");
E_D("replace into `ecs_weixin_sign` values('27','115','1464653613','2016-05-31');");
E_D("replace into `ecs_weixin_sign` values('28','118','1464774673','2016-06-01');");
E_D("replace into `ecs_weixin_sign` values('29','129','1464786767','2016-06-01');");
E_D("replace into `ecs_weixin_sign` values('30','130','1464841097','2016-06-02');");
E_D("replace into `ecs_weixin_sign` values('31','118','1464937263','2016-06-03');");
E_D("replace into `ecs_weixin_sign` values('32','135','1464968605','2016-06-03');");
E_D("replace into `ecs_weixin_sign` values('33','48','1465138797','2016-06-05');");
E_D("replace into `ecs_weixin_sign` values('34','1','1465469268','2016-06-09');");
E_D("replace into `ecs_weixin_sign` values('35','147','1465474070','2016-06-09');");
E_D("replace into `ecs_weixin_sign` values('36','130','1465522871','2016-06-10');");
E_D("replace into `ecs_weixin_sign` values('37','162','1465573678','2016-06-10');");
E_D("replace into `ecs_weixin_sign` values('38','167','1465786298','2016-06-13');");
E_D("replace into `ecs_weixin_sign` values('39','171','1465807780','2016-06-13');");
E_D("replace into `ecs_weixin_sign` values('40','175','1465881808','2016-06-14');");
E_D("replace into `ecs_weixin_sign` values('41','58','1465962373','2016-06-15');");
E_D("replace into `ecs_weixin_sign` values('42','86','1465987971','2016-06-15');");
E_D("replace into `ecs_weixin_sign` values('43','191','1466068669','2016-06-16');");
E_D("replace into `ecs_weixin_sign` values('44','201','1466258562','2016-06-18');");
E_D("replace into `ecs_weixin_sign` values('45','202','1466324303','2016-06-19');");
E_D("replace into `ecs_weixin_sign` values('46','203','1466348566','2016-06-19');");
E_D("replace into `ecs_weixin_sign` values('47','208','1466499703','2016-06-21');");
E_D("replace into `ecs_weixin_sign` values('48','41','1466512993','2016-06-21');");
E_D("replace into `ecs_weixin_sign` values('49','215','1466593899','2016-06-22');");
E_D("replace into `ecs_weixin_sign` values('50','221','1466650557','2016-06-23');");
E_D("replace into `ecs_weixin_sign` values('51','63','1466723172','2016-06-24');");
E_D("replace into `ecs_weixin_sign` values('52','6','1466754485','2016-06-24');");
E_D("replace into `ecs_weixin_sign` values('53','245','1466780326','2016-06-24');");
E_D("replace into `ecs_weixin_sign` values('54','246','1466814944','2016-06-25');");
E_D("replace into `ecs_weixin_sign` values('55','254','1467023084','2016-06-27');");
E_D("replace into `ecs_weixin_sign` values('56','258','1467035429','2016-06-27');");
E_D("replace into `ecs_weixin_sign` values('57','207','1467069487','2016-06-28');");
E_D("replace into `ecs_weixin_sign` values('58','264','1467116643','2016-06-28');");
E_D("replace into `ecs_weixin_sign` values('59','268','1467180482','2016-06-29');");
E_D("replace into `ecs_weixin_sign` values('60','273','1467193549','2016-06-29');");
E_D("replace into `ecs_weixin_sign` values('61','277','1467254073','2016-06-30');");
E_D("replace into `ecs_weixin_sign` values('62','268','1467355080','2016-07-01');");
E_D("replace into `ecs_weixin_sign` values('63','287','1467449437','2016-07-02');");
E_D("replace into `ecs_weixin_sign` values('64','297','1467458343','2016-07-02');");
E_D("replace into `ecs_weixin_sign` values('65','299','1467479702','2016-07-03');");
E_D("replace into `ecs_weixin_sign` values('66','1','1467504463','2016-07-03');");
E_D("replace into `ecs_weixin_sign` values('67','306','1467522146','2016-07-03');");
E_D("replace into `ecs_weixin_sign` values('68','283','1467546452','2016-07-03');");
E_D("replace into `ecs_weixin_sign` values('69','276','1467632599','2016-07-04');");
E_D("replace into `ecs_weixin_sign` values('70','319','1467646493','2016-07-04');");
E_D("replace into `ecs_weixin_sign` values('71','321','1467677681','2016-07-05');");
E_D("replace into `ecs_weixin_sign` values('72','199','1467696564','2016-07-05');");
E_D("replace into `ecs_weixin_sign` values('73','326','1467774910','2016-07-06');");
E_D("replace into `ecs_weixin_sign` values('74','326','1467854485','2016-07-07');");
E_D("replace into `ecs_weixin_sign` values('75','190','1467913392','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('76','326','1467939497','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('77','336','1467957394','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('78','345','1467962318','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('79','346','1467963166','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('80','350','1467967679','2016-07-08');");
E_D("replace into `ecs_weixin_sign` values('81','363','1468089281','2016-07-10');");
E_D("replace into `ecs_weixin_sign` values('82','326','1468112697','2016-07-10');");
E_D("replace into `ecs_weixin_sign` values('83','366','1468115691','2016-07-10');");
E_D("replace into `ecs_weixin_sign` values('84','10','1468206139','2016-07-11');");
E_D("replace into `ecs_weixin_sign` values('85','388','1468254505','2016-07-12');");
E_D("replace into `ecs_weixin_sign` values('86','389','1468256070','2016-07-12');");
E_D("replace into `ecs_weixin_sign` values('87','392','1468285948','2016-07-12');");
E_D("replace into `ecs_weixin_sign` values('88','336','1468295198','2016-07-12');");
E_D("replace into `ecs_weixin_sign` values('89','397','1468330358','2016-07-12');");
E_D("replace into `ecs_weixin_sign` values('90','326','1468369937','2016-07-13');");
E_D("replace into `ecs_weixin_sign` values('91','403','1468420549','2016-07-13');");
E_D("replace into `ecs_weixin_sign` values('92','326','1468469913','2016-07-14');");
E_D("replace into `ecs_weixin_sign` values('93','316','1468487044','2016-07-14');");
E_D("replace into `ecs_weixin_sign` values('94','410','1468492504','2016-07-14');");
E_D("replace into `ecs_weixin_sign` values('95','112','1468543994','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('96','413','1468545170','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('97','326','1468546830','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('98','416','1468557030','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('99','417','1468558949','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('100','419','1468563754','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('101','332','1468565801','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('102','422','1468590216','2016-07-15');");
E_D("replace into `ecs_weixin_sign` values('103','326','1468630669','2016-07-16');");
E_D("replace into `ecs_weixin_sign` values('104','429','1468648721','2016-07-16');");
E_D("replace into `ecs_weixin_sign` values('105','326','1468711870','2016-07-17');");
E_D("replace into `ecs_weixin_sign` values('106','38','1468744533','2016-07-17');");
E_D("replace into `ecs_weixin_sign` values('107','336','1468756323','2016-07-17');");
E_D("replace into `ecs_weixin_sign` values('108','326','1468793507','2016-07-18');");
E_D("replace into `ecs_weixin_sign` values('109','147','1468797350','2016-07-18');");
E_D("replace into `ecs_weixin_sign` values('110','434','1468800720','2016-07-18');");
E_D("replace into `ecs_weixin_sign` values('111','283','1468892146','2016-07-19');");
E_D("replace into `ecs_weixin_sign` values('112','6','1471076332','2016-08-13');");
E_D("replace into `ecs_weixin_sign` values('113','26','1471167744','2016-08-14');");
E_D("replace into `ecs_weixin_sign` values('114','17','1471426086','2016-08-17');");
E_D("replace into `ecs_weixin_sign` values('115','68','1471591762','2016-08-19');");
E_D("replace into `ecs_weixin_sign` values('116','6','1471659472','2016-08-20');");
E_D("replace into `ecs_weixin_sign` values('117','81','1471679551','2016-08-20');");
E_D("replace into `ecs_weixin_sign` values('118','46','1471854409','2016-08-22');");
E_D("replace into `ecs_weixin_sign` values('119','36','1472093802','2016-08-25');");
E_D("replace into `ecs_weixin_sign` values('120','6','1472109328','2016-08-25');");

require("../../inc/footer.php");
?>