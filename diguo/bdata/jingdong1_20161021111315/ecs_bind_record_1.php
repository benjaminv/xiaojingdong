<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_bind_record`;");
E_C("CREATE TABLE `ecs_bind_record` (
  `wxid` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_bind_record` values('o86iDs7BQspA2KGJ2aL83YIGYCv8','303');");
E_D("replace into `ecs_bind_record` values('oybWRs_AtAgMiBdgplrSK160VbuI','1264');");
E_D("replace into `ecs_bind_record` values('oybWRs4JqJ95SVw6pgD0bzagIhhI','903');");

require("../../inc/footer.php");
?>