<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewsnotcj`;");
E_C("CREATE TABLE `xcaity_enewsnotcj` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `word` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `xcaity_enewsnotcj` values('1','<input type=hidden value=''欢迎使用阿凡达网站管理系统：www.caity.net''>');");
E_D("replace into `xcaity_enewsnotcj` values('2','<caity 阿凡达网站管理系统,caity.net>');");
E_D("replace into `xcaity_enewsnotcj` values('3','<!--阿凡达CMS,caity.net-->');");
E_D("replace into `xcaity_enewsnotcj` values('4','<table style=display:none><tr><td>\r\nAvatar CMS,caity.net\r\n</td></tr></table>');");
E_D("replace into `xcaity_enewsnotcj` values('5','<div style=display:none>\r\n拥有阿凡达一切，皆有可能。欢迎访问caity.net\r\n</div>');");

require("../../inc/footer.php");
?>