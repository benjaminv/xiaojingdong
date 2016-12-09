<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qcode`;");
E_C("CREATE TABLE `ecs_weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  `qr_path` varchar(256) NOT NULL COMMENT '图片二维码路径',
  `user_name` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nickname` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_qcode` values('1','4','1','','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('2','4','934','','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('3','4','855','gQEV8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1NraG9QeHZsYkJZVm1TWFo5bVFOAAIEYcqtVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('4','4','1267','gQFn8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzdFald2VHZsN0JhVm5ZTmxTR1FOAAIEhcqtVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('5','4','0','gQEH8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL21rakd4WC1sNmhhVDEtVUxXR1FOAAIENsutVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('6','99','1264','gQET8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2EwaXdsV2JsdFJiTWJ3UnlMbVFOAAIEK9euVwMEAAAAAA==','1471076140.jpg','youpin_1264','1264','飛&飛');");
E_D("replace into `ecs_weixin_qcode` values('7','4','1264','gQHa8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3cwaTFRN1hsa3hicXdxeUhLMlFOAAIEsvSuVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('8','99','1298','gQEX8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL09VaHVfc1RsVkJZdDhGWWk4R1FOAAIEex_vVwMEAAAAAA==','1471094651.jpg','clg_1298','1298','杨同惠一盖尔玛十GM雲商');");
E_D("replace into `ecs_weixin_qcode` values('9','4','1300','gQHk8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0IwaWpKdFRsa0JicEFtajNQV1FOAAIEA82vVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('10','4','1302','gQEB8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2NValhZY1BsX3hhQ0pCNnZTV1FOAAIEq3shVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('11','4','1303','gQE98DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2hFZ3dESDNsQnhaX0F1dlpybVFOAAIEuvAiVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('12','99','1267','gQFo8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2ZrZ0xWMExsR2haam5CR2tsV1FOAAIEtfknVwMEAAAAAA==','1471164195.jpg','youpin_1267','1267','茶立购(陈辉鹏)18277189619');");
E_D("replace into `ecs_weixin_qcode` values('14','99','1332','gQF88DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2lrZ3ZEMDdsTGhaWFBPWHNzV1FOAAIE5Jg9VwMEAAAAAA==','1471418582.jpg','clg_1332','1332','飛&飛');");
E_D("replace into `ecs_weixin_qcode` values('15','99','1352','gQGx8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL09VaEVXZFBsZXhZQ1JGYUUybVFOAAIEpeU_VwMEAAAAAA==','1471620657.jpg','clg_1352','1352','黎立多-在路上');");
E_D("replace into `ecs_weixin_qcode` values('16','99','1364','gQH/8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL09rZzJyMmJsQUJaNUJGVjdxR1FOAAIEkiFBVwMEAAAAAA==','1471679523.jpg','clg_1364','1364','小白');");
E_D("replace into `ecs_weixin_qcode` values('17','99','1358','gQF17zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0VFaGxDS1BsVXhZcVRILWNfMlFOAAIEdW9CVwMEAAAAAA==','1471770876.jpg','clg_1358','1358','怕冷哥哥');");
E_D("replace into `ecs_weixin_qcode` values('18','4','1358','gQEe8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2pFaGhTTEhsV3hZaWd1T1EtMlFOAAIEMsdCVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('19','99','1325','gQHF8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0gwZy1wOG5sQXhaNmhuQjVvV1FOAAIE28tCVwMEAAAAAA==','1471854571.jpg','clg_1325','1325','品茶人');");
E_D("replace into `ecs_weixin_qcode` values('20','99','1393','gQEr8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL29VaFVyX3psWlJZY0ZjNTh5bVFOAAIE5qVFVwMEAAAAAA==','1471924790.jpg','clg_1393','1393','  林琳');");
E_D("replace into `ecs_weixin_qcode` values('21','4','903','gQHP7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0pFZ1FmYVRsSkJaZENrdXJqbVFOAAIEbZFGVwMEAAAAAA==','','','0','');");
E_D("replace into `ecs_weixin_qcode` values('22','4','1428','gQEp8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2EwZ1BiOHpsRHhaMlB3U05rV1FOAAIEj1VQVwMEAAAAAA==','','','0','');");

require("../../inc/footer.php");
?>