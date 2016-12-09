<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_menu`;");
E_C("CREATE TABLE `ecs_ecsmart_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_img` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_menu` values('1','商品分类','images/201603/1458379366066881920.png','catalog.php','1');");
E_D("replace into `ecs_ecsmart_menu` values('2','促销活动','images/201603/1458379393020351679.png','pro_search.php','2');");
E_D("replace into `ecs_ecsmart_menu` values('21','手机预售','images/201609/1473759193462484653.png','pre_sale.php','8');");
E_D("replace into `ecs_ecsmart_menu` values('4','优惠活动','images/201603/1458379433548978373.png','activity.php','3');");
E_D("replace into `ecs_ecsmart_menu` values('20','新版砍价','images/201609/1473758737218696255.png','cut.php','7');");
E_D("replace into `ecs_ecsmart_menu` values('10','新品','images/201608/1471031647637014899.png','search.php?intro=new','4');");
E_D("replace into `ecs_ecsmart_menu` values('19','附近店铺','images/201609/1473758612739788755.png','supplier_near.php','6');");
E_D("replace into `ecs_ecsmart_menu` values('18','新版拼团','images/201609/1472803272133824628.png','extpintuan.php','5');");
E_D("replace into `ecs_ecsmart_menu` values('22','一元云购','images/201609/1473836381004758581.png','lucky_buy.php','8');");
E_D("replace into `ecs_ecsmart_menu` values('23','积分商城','images/201609/1474408312232431870.png','exchange.php','15');");

require("../../inc/footer.php");
?>