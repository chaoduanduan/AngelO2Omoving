<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewssp_3`;");
E_C("CREATE TABLE `xcaity_enewssp_3` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spid` int(10) unsigned NOT NULL DEFAULT '0',
  `sptext` mediumtext NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `spid` (`spid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>