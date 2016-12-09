<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_remind`;");
E_C("CREATE TABLE `ecs_weixin_remind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buynotice` tinyint(4) NOT NULL COMMENT '开启状态1开启0关闭',
  `buymsg` varchar(50) NOT NULL,
  `buysuppliertice` tinyint(4) NOT NULL,
  `buysuppliermsg` varchar(50) NOT NULL,
  `buyuptice` tinyint(4) NOT NULL,
  `buyupmsg` varchar(50) NOT NULL,
  `paytice` tinyint(4) NOT NULL,
  `paymsg` varchar(50) NOT NULL,
  `paysuppliertice` tinyint(4) NOT NULL,
  `paysuppliermsg` varchar(50) NOT NULL,
  `payuptice` tinyint(4) NOT NULL,
  `payupmsg` varchar(50) NOT NULL,
  `jointice` tinyint(4) NOT NULL,
  `joinmsg` varchar(50) NOT NULL,
  `sendnotice` tinyint(4) NOT NULL,
  `sendmsg` varchar(50) NOT NULL,
  `lucky_buy_lucky_user_notice` tinyint(4) NOT NULL,
  `lucky_buy_lucky_user_msg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_remind` values('1','1','e2__vNckJ_iXIXRFVr6kRgTyeB8fU0JG4s8tzDjb0vQ','1','OgowoMNEuFtrW6FyFGcLznIjMINLDtxp27rjyVSjOZ8','0','','1','Xbyia9WZAagVVSqvO5fqRKsehcX6fgeP-u7fFtCSx4E','0','','1','llaj519VTN8BwXQWBm-ej4ytUcBA3HNo2vUlpCoEPbE','1','seiRam0I7gljgQs0MEZGOo5m52UC5JHmGGcP5A-EnbQ','1','jGq5WeO8Yvm8Q2NI5Ke70HRywheo7xlRUjFoNKZoQd8','1','w4Wk_Rjbdz4KCpRyw_X5Qv3oOODV-hdAgHcP2Odq4H8');");

require("../../inc/footer.php");
?>