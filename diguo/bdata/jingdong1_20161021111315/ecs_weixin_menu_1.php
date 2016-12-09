<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_menu`;");
E_C("CREATE TABLE `ecs_weixin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_menu` values('1','0','微商城','1','','100');");
E_D("replace into `ecs_weixin_menu` values('3','0','会员','1','','99');");
E_D("replace into `ecs_weixin_menu` values('4','0','更多','1','','0');");
E_D("replace into `ecs_weixin_menu` values('5','1','精品推荐','1','best','0');");
E_D("replace into `ecs_weixin_menu` values('7','1','一元云购','2','http://www.chaligou.com/mobile/lucky_buy.php','1');");
E_D("replace into `ecs_weixin_menu` values('8','1','新版砍价','2','http://www.chaligou.com/mobile/cut.php','3');");
E_D("replace into `ecs_weixin_menu` values('13','3','绑定会员','1','bdhy','2');");
E_D("replace into `ecs_weixin_menu` values('14','3','订单查询','1','ddcx','4');");
E_D("replace into `ecs_weixin_menu` values('16','3','个人信息','1','info','5');");
E_D("replace into `ecs_weixin_menu` values('18','4','今日签到','1','qd','1');");
E_D("replace into `ecs_weixin_menu` values('19','4','微客服','1','kf','100');");
E_D("replace into `ecs_weixin_menu` values('36','1','商城首页','2','http://www.chaligou.com/mobile/','6');");
E_D("replace into `ecs_weixin_menu` values('31','3','推广二维码','1','qrcode','1');");
E_D("replace into `ecs_weixin_menu` values('28','4','找回密码','1','mima','99');");
E_D("replace into `ecs_weixin_menu` values('29','4','砸金蛋','2','http://www.chaligou.com/mobile/weixin/act.php?aid=1','4');");
E_D("replace into `ecs_weixin_menu` values('35','1','新版拼团','2','http://www.chaligou.com/mobile/extpintuan.php','5');");
E_D("replace into `ecs_weixin_menu` values('32','3','快递查询','1','qdcx','3');");

require("../../inc/footer.php");
?>