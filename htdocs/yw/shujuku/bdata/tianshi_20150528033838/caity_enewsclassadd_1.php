<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_enewsclassadd`;");
E_C("CREATE TABLE `caity_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `caity_enewsclassadd` values('1','','');");
E_D("replace into `caity_enewsclassadd` values('2','','');");
E_D("replace into `caity_enewsclassadd` values('3','','');");

require("../../inc/footer.php");
?>