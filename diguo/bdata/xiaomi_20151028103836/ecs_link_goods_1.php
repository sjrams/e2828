<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_double` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('2','1','1','1');");
E_D("replace into `ecs_link_goods` values('1','2','1','1');");
E_D("replace into `ecs_link_goods` values('3','1','1','1');");
E_D("replace into `ecs_link_goods` values('1','3','1','1');");
E_D("replace into `ecs_link_goods` values('4','1','1','1');");
E_D("replace into `ecs_link_goods` values('1','4','1','1');");
E_D("replace into `ecs_link_goods` values('5','1','1','1');");
E_D("replace into `ecs_link_goods` values('1','5','1','1');");
E_D("replace into `ecs_link_goods` values('6','1','1','1');");
E_D("replace into `ecs_link_goods` values('1','6','1','1');");

require("../../inc/footer.php");
?>