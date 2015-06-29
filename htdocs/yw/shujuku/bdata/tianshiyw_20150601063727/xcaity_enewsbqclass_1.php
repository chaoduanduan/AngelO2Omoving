<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewsbqclass`;");
E_C("CREATE TABLE `xcaity_enewsbqclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `xcaity_enewsbqclass` values('1','信息调用');");
E_D("replace into `xcaity_enewsbqclass` values('2','栏目调用');");
E_D("replace into `xcaity_enewsbqclass` values('3','非信息调用');");
E_D("replace into `xcaity_enewsbqclass` values('4','其它标签');");

require("../../inc/footer.php");
?>