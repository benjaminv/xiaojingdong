<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_reward_log`;");
E_C("CREATE TABLE `ecs_weixin_reward_log` (
  `reward_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `ecuid` int(32) NOT NULL,
  `order_sn` int(40) NOT NULL,
  `reward_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `reward_meg` varchar(600) DEFAULT NULL,
  `anonymous_reward` int(1) NOT NULL DEFAULT '0',
  `rewardtime` int(10) NOT NULL,
  `rewardtimeymd` varchar(46) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reward_id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_reward_log` values('3','267','1','2147483647','0.01','一分也是爱!小编多努力！！','0','1467016475','2016-06-27 16:34:35','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('4','267','1','2147483647','0.10','这个世界需要正能量！！顶你','0','1467016808','2016-06-27 16:40:08','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('5','264','1','2147483647','0.01','搞笑！！！','0','1467020811','2016-06-27 17:46:51','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('6','268','1','2147483647','0.10','一分也是爱','0','1467021275','2016-06-27 17:54:35','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('8','268','7','2147483647','0.01','加油','1','1467021524','2016-06-27 17:58:44','小博士','http://wx.qlogo.cn/mmopen/sPGzd12sjeBzpCZoBh2oOWG66KDsskVMzTiaZHtR0vria7KibNcdHKGzmKWDgbHMyWZVbb0SDia5l5QrcOh2pWObvfvykpLukNhia/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('9','268','39','2147483647','0.11','','0','1467022445','2016-06-27 18:14:05','PRINCE','http://wx.qlogo.cn/mmopen/Q3auHgzwzM5rrhPmtjtsV8QOHaFqNjINg5V00kZETgDQj5WKmQWkibcz6yFR3BMyhRFAIS9icXcKLCetXeloeASlibXcWDA0qk5mx5us7FGVc0/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('12','270','1','2147483647','0.02','测试','0','1467026275','2016-06-27 19:17:55','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('18','91','1','2147483647','0.01','欢迎光临测试！！','0','1467034077','2016-06-27 21:27:57','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('16','268','204','2147483647','0.01','很好','0','1467027023','2016-06-27 19:30:23','疯疯癫癫','http://wx.qlogo.cn/mmopen/21aAqZDHzsY5EibibSm2Tw4jftWtSJTAETe4Hsvc9mwehLBE5Rn1CCz0ygmJ6niccH56d5OXNic8vwbAG0ILyPVQzf5bRgJianELR/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('17','267','5','2147483647','1.00','真他妈的棒。','0','1467033133','2016-06-27 21:12:13','A奚郅洲','http://wx.qlogo.cn/mmopen/zDfr3KqjcN2KeJgWpZyoswP7csH2X1ApWrHG2j5eic0Yibtv6WSnKcpRw0pRFIXyIykRrOnwTiaLhC5gtNsHHzMQtHiazdIa49V5/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('19','91','9','2147483647','0.10','加油','0','1467035570','2016-06-27 21:52:50','袁辉','http://wx.qlogo.cn/mmopen/Q3auHgzwzM60ib82JsqjEIzCeatsyjv1uZWEIicSElCialbB8ASkqJxw4mVVibon1oQxOu7EmrAEIXxnfNJzTx2HfgBPV56iaibHR5W1TT2dEpv1M/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('85','91','1','2147483647','0.01','你好','0','1468336419','2016-07-12 23:13:39','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('22','91','58','2147483647','1.00','试试','0','1467256214','2016-06-30 11:10:14','杠上花-杨勇','http://wx.qlogo.cn/mmopen/r7s283hRnWYyorGhZ46sMLBe8ib9r7OJzQ6xCbzRRmNPUvaicCHufa7SIlMqGhPZhiaVmGlZNYle3knJfqwdLnibGlyzF8cOJc3d/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('34','91','0','2147483647','1.00','不错','1','1468133870','2016-07-10 14:57:50','','http://wx.qlogo.cn/mmopen/zDfr3KqjcN2A4645NWMcHaiaMb1JWY2psiaAEytN8bK5iaKVF7a8cxpBOuNRN4HqG5T4ibicSxmAGMp0T9lb1yTerA0bbia6gbhB1b/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('25','91','46','2147483647','1.00','好','0','1467310494','2016-07-01 02:14:54','周明生','http://wx.qlogo.cn/mmopen/zPOlZ2S5hBvxf6cx4qAvrOh8yntLcMbW6jpXm5wAYVic7ldIrHZ9wiahF6D8TrUAmelb2OA39I5Hkia1wQaoylsrfWjSAQVaLlO/0','0');");
E_D("replace into `ecs_weixin_reward_log` values('27','152','328','2147483647','10.00','加油','0','1467482777','2016-07-03 02:06:17','品茶修心 坐而论道-我是密谋茶馆','http://wx.qlogo.cn/mmopen/XYrRG5UShDfxKbzxqialS4ZoD7v2pCJnHzNm8rUicmZvaZjZQTgRvIs37jOsmdg7jlY24oTz4B8LdA7oDEJka9iaQ7d9yl4TxSQ/0','0');");
E_D("replace into `ecs_weixin_reward_log` values('84','91','1','2147483647','0.01','测试打赏','0','1468336281','2016-07-12 23:11:21','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('86','91','1','2147483647','0.01','你好','0','1468337564','2016-07-12 23:32:44','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('88','91','1','2147483647','0.01','打赏','0','1468356914','2016-07-13 04:55:14','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('90','150','1','2147483647','0.01','一分也是爱','0','1468391005','2016-07-13 14:23:25','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','1');");
E_D("replace into `ecs_weixin_reward_log` values('94','272','1','2147483647','0.10','你好','0','1468818664','2016-07-18 13:11:04','寒冰','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDRe3PXic53JteA9Zia0Vc37Aj7x9Aqqq3BcmG2jLdHfl06DvdmibiaMvl1tTia2gre7KQHvicnXzyIWicfg/0','0');");
E_D("replace into `ecs_weixin_reward_log` values('92','91','346','2147483647','10.00','加油','0','1468493874','2016-07-14 18:57:54','蜗牛漫步','http://wx.qlogo.cn/mmopen/21aAqZDHzsbKI7cDuh4yq2g8sNib32pbtPpyrlpVdnRSxUFGPmicIdDPdibObibicT4OicKrfk2yYtjrGPv6oRZnrg3bqvHvpmfGbk/0','0');");

require("../../inc/footer.php");
?>