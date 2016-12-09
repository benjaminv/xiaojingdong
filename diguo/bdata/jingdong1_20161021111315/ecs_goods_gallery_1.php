<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `goods_attr_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_attr_image` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `img_sort` tinyint(3) NOT NULL DEFAULT '0' COMMENT '商品图片显示顺序',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`,`goods_attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('1','1','images/201610/goods_img/_P_1476338767660.jpg','','images/201610/thumb_img/_thumb_P_1476338767806.jpg','images/201610/source_img/_P_1476338767350.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('2','2','images/201610/goods_img/_P_1476338844836.jpg','','images/201610/thumb_img/_thumb_P_1476338844067.jpg','images/201610/source_img/_P_1476338844018.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('3','3','images/201610/goods_img/_P_1476338926820.jpg','','images/201610/thumb_img/_thumb_P_1476338926752.jpg','images/201610/source_img/_P_1476338926292.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('4','4','images/201610/goods_img/_P_1476339015226.jpg','','images/201610/thumb_img/_thumb_P_1476339015045.jpg','images/201610/source_img/_P_1476339015750.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('5','5','images/201610/goods_img/_P_1476339078516.jpg','','images/201610/thumb_img/_thumb_P_1476339078657.jpg','images/201610/source_img/_P_1476339078584.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('6','6','images/201610/goods_img/_P_1476339103737.jpg','','images/201610/thumb_img/_thumb_P_1476339103342.jpg','images/201610/source_img/_P_1476339103963.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('7','7','images/201610/goods_img/_P_1476339141003.jpg','','images/201610/thumb_img/_thumb_P_1476339141619.jpg','images/201610/source_img/_P_1476339141526.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('8','8','images/201610/goods_img/_P_1476339178256.jpg','','images/201610/thumb_img/_thumb_P_1476339178930.jpg','images/201610/source_img/_P_1476339178820.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('9','9','images/201610/goods_img/_P_1476339842762.jpg','','images/201610/thumb_img/_thumb_P_1476339842386.jpg','images/201610/source_img/_P_1476339842403.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('10','9','images/201610/goods_img/_P_1476339844974.jpg','','images/201610/thumb_img/_thumb_P_1476339844733.jpg','images/201610/source_img/_P_1476339844546.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('11','9','images/201610/goods_img/_P_1476339844923.jpg','','images/201610/thumb_img/_thumb_P_1476339844127.jpg','images/201610/source_img/_P_1476339844478.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('12','9','images/201610/goods_img/_P_1476339845020.jpg','','images/201610/thumb_img/_thumb_P_1476339845803.jpg','images/201610/source_img/_P_1476339845829.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('13','9','images/201610/goods_img/_P_1476339846166.jpg','','images/201610/thumb_img/_thumb_P_1476339846833.jpg','images/201610/source_img/_P_1476339846397.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('14','10','images/201610/goods_img/_P_1476341501037.jpg','','images/201610/thumb_img/_thumb_P_1476341501441.jpg','images/201610/source_img/_P_1476341501360.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('15','10','images/201610/goods_img/_P_1476341501764.jpg','','images/201610/thumb_img/_thumb_P_1476341501470.jpg','images/201610/source_img/_P_1476341501310.SS2','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('16','10','images/201610/goods_img/_P_1476341502116.jpg','','images/201610/thumb_img/_thumb_P_1476341502735.jpg','images/201610/source_img/_P_1476341502792.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('17','10','images/201610/goods_img/_P_1476341503390.jpg','','images/201610/thumb_img/_thumb_P_1476341503444.jpg','images/201610/source_img/_P_1476341503058.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('18','10','images/201610/goods_img/_P_1476341504953.jpg','','images/201610/thumb_img/_thumb_P_1476341504529.jpg','images/201610/source_img/_P_1476341504925.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('19','11','images/201610/goods_img/_P_1476341879174.jpg','','images/201610/thumb_img/_thumb_P_1476341879909.jpg','images/201610/source_img/_P_1476341879504.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('20','11','images/201610/goods_img/_P_1476341880346.jpg','','images/201610/thumb_img/_thumb_P_1476341880582.jpg','images/201610/source_img/_P_1476341880984.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('21','11','images/201610/goods_img/_P_1476341880701.jpg','','images/201610/thumb_img/_thumb_P_1476341880834.jpg','images/201610/source_img/_P_1476341880803.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('22','11','images/201610/goods_img/_P_1476341881731.jpg','','images/201610/thumb_img/_thumb_P_1476341881252.jpg','images/201610/source_img/_P_1476341881014.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('23','11','images/201610/goods_img/_P_1476341882559.jpg','','images/201610/thumb_img/_thumb_P_1476341882322.jpg','images/201610/source_img/_P_1476341882040.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('24','12','images/201610/goods_img/_P_1476343346963.jpg','','images/201610/thumb_img/_thumb_P_1476343346551.jpg','images/201610/source_img/_P_1476343345029.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('25','12','images/201610/goods_img/_P_1476343346565.jpg','','images/201610/thumb_img/_thumb_P_1476343346560.jpg','images/201610/source_img/_P_1476343346978.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('26','12','images/201610/goods_img/_P_1476343347548.jpg','','images/201610/thumb_img/_thumb_P_1476343347695.jpg','images/201610/source_img/_P_1476343347383.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('27','12','images/201610/goods_img/_P_1476343347144.jpg','','images/201610/thumb_img/_thumb_P_1476343347139.jpg','images/201610/source_img/_P_1476343347638.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('28','12','images/201610/goods_img/_P_1476343348874.jpg','','images/201610/thumb_img/_thumb_P_1476343348413.jpg','images/201610/source_img/_P_1476343348896.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('29','13','images/201610/goods_img/_P_1476343472712.jpg','','images/201610/thumb_img/_thumb_P_1476343472141.jpg','images/201610/source_img/_P_1476343472231.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('30','13','images/201610/goods_img/_P_1476343473030.jpg','','images/201610/thumb_img/_thumb_P_1476343473368.jpg','images/201610/source_img/_P_1476343473137.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('31','13','images/201610/goods_img/_P_1476343474777.jpg','','images/201610/thumb_img/_thumb_P_1476343474548.jpg','images/201610/source_img/_P_1476343474412.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('32','13','images/201610/goods_img/_P_1476343474543.jpg','','images/201610/thumb_img/_thumb_P_1476343474430.jpg','images/201610/source_img/_P_1476343474689.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('33','13','images/201610/goods_img/_P_1476343475119.jpg','','images/201610/thumb_img/_thumb_P_1476343475950.jpg','images/201610/source_img/_P_1476343475823.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('34','14','images/201610/goods_img/_P_1476689840567.jpg','','images/201610/thumb_img/_thumb_P_1476689840927.jpg','images/201610/source_img/_P_1476689840026.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('35','14','images/201610/goods_img/_P_1476689841765.jpg','','images/201610/thumb_img/_thumb_P_1476689841351.jpg','images/201610/source_img/_P_1476689841585.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('36','14','images/201610/goods_img/_P_1476689842716.jpg','','images/201610/thumb_img/_thumb_P_1476689842053.jpg','images/201610/source_img/_P_1476689842689.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('37','14','images/201610/goods_img/_P_1476689843842.jpg','','images/201610/thumb_img/_thumb_P_1476689843818.jpg','images/201610/source_img/_P_1476689843500.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('38','14','images/201610/goods_img/_P_1476689844148.jpg','','images/201610/thumb_img/_thumb_P_1476689844188.jpg','images/201610/source_img/_P_1476689844692.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('39','15','images/201610/goods_img/_P_1476691399490.jpg','','images/201610/thumb_img/_thumb_P_1476691399785.jpg','images/201610/source_img/_P_1476691399003.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('40','16','images/201610/goods_img/_P_1476691434232.jpg','','images/201610/thumb_img/_thumb_P_1476691434038.jpg','images/201610/source_img/_P_1476691434452.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('41','17','images/201610/goods_img/_P_1476691466598.jpg','','images/201610/thumb_img/_thumb_P_1476691466351.jpg','images/201610/source_img/_P_1476691466732.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('42','18','images/201610/goods_img/_P_1476691488622.jpg','','images/201610/thumb_img/_thumb_P_1476691488685.jpg','images/201610/source_img/_P_1476691488961.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('43','19','images/201610/goods_img/_P_1476691544539.jpg','','images/201610/thumb_img/_thumb_P_1476691544953.jpg','images/201610/source_img/_P_1476691544396.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('44','20','images/201610/goods_img/_P_1476692039168.jpg','','images/201610/thumb_img/_thumb_P_1476692039285.jpg','images/201610/source_img/_P_1476692039498.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('45','21','images/201610/goods_img/_P_1476692123030.jpg','','images/201610/thumb_img/_thumb_P_1476692123632.jpg','images/201610/source_img/_P_1476692123156.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('46','22','images/201610/goods_img/_P_1476692203539.jpg','','images/201610/thumb_img/_thumb_P_1476692203449.jpg','images/201610/source_img/_P_1476692203587.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('47','23','images/201610/goods_img/_P_1476692679967.jpg','','images/201610/thumb_img/_thumb_P_1476692679553.jpg','images/201610/source_img/_P_1476692679902.jpg','0','1','0');");
E_D("replace into `ecs_goods_gallery` values('48','23','images/201610/goods_img/_P_1476692680161.jpg','','images/201610/thumb_img/_thumb_P_1476692680797.jpg','images/201610/source_img/_P_1476692680504.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('49','23','images/201610/goods_img/_P_1476692681921.jpg','','images/201610/thumb_img/_thumb_P_1476692681633.jpg','images/201610/source_img/_P_1476692681828.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('50','23','images/201610/goods_img/_P_1476692681492.jpg','','images/201610/thumb_img/_thumb_P_1476692681561.jpg','images/201610/source_img/_P_1476692681314.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('51','23','images/201610/goods_img/_P_1476692682617.jpg','','images/201610/thumb_img/_thumb_P_1476692682706.jpg','images/201610/source_img/_P_1476692682778.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('52','23','images/201610/goods_img/23_P_1476938241413.jpg','','images/201610/thumb_img/23_thumb_P_1476938241967.jpg','images/201610/source_img/23_P_1476938241860.jpg','3','1','0');");
E_D("replace into `ecs_goods_gallery` values('53','23','images/201610/goods_img/23_P_1476938348183.jpg','','images/201610/thumb_img/23_thumb_P_1476938348005.jpg','images/201610/source_img/23_P_1476938348071.jpg','1','1','0');");
E_D("replace into `ecs_goods_gallery` values('54','23','images/201610/goods_img/23_P_1476938403522.jpg','','images/201610/thumb_img/23_thumb_P_1476938403719.jpg','images/201610/source_img/23_P_1476938403710.jpg','2','1','0');");
E_D("replace into `ecs_goods_gallery` values('55','24','images/201610/goods_img/_P_1476939043504.jpg','','images/201610/thumb_img/_thumb_P_1476939043796.jpg','images/201610/source_img/_P_1476939043648.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('56','24','images/201610/goods_img/_P_1476939044160.jpg','','images/201610/thumb_img/_thumb_P_1476939044732.jpg','images/201610/source_img/_P_1476939044583.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('57','24','images/201610/goods_img/_P_1476939045598.jpg','','images/201610/thumb_img/_thumb_P_1476939045794.jpg','images/201610/source_img/_P_1476939045259.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('58','24','images/201610/goods_img/_P_1476939046458.jpg','','images/201610/thumb_img/_thumb_P_1476939046006.jpg','images/201610/source_img/_P_1476939046302.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('59','24','images/201610/goods_img/_P_1476939046686.jpg','','images/201610/thumb_img/_thumb_P_1476939046996.jpg','images/201610/source_img/_P_1476939046591.jpg','0','0','0');");
E_D("replace into `ecs_goods_gallery` values('60','24','images/201610/goods_img/24_P_1476939202293.jpg','','images/201610/thumb_img/24_thumb_P_1476939202550.jpg','images/201610/source_img/24_P_1476939202653.jpg','6','1','0');");
E_D("replace into `ecs_goods_gallery` values('62','24','images/201610/goods_img/24_P_1476939345405.jpg','','images/201610/thumb_img/24_thumb_P_1476939345720.jpg','images/201610/source_img/24_P_1476939345562.jpg','4','1','0');");
E_D("replace into `ecs_goods_gallery` values('63','24','images/201610/goods_img/24_P_1476939376662.jpg','','images/201610/thumb_img/24_thumb_P_1476939376453.jpg','images/201610/source_img/24_P_1476939376826.jpg','5','1','0');");
E_D("replace into `ecs_goods_gallery` values('64','25','images/201610/goods_img/_P_1476939692722.jpg','','images/201610/thumb_img/_thumb_P_1476939692998.jpg','images/201610/source_img/_P_1476939692159.jpg','0','0','0');");

require("../../inc/footer.php");
?>