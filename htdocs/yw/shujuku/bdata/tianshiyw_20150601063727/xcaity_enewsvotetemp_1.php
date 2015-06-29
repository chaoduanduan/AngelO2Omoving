<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewsvotetemp`;");
E_C("CREATE TABLE `xcaity_enewsvotetemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `xcaity_enewsvotetemp` values('1','默认投票模板','<table width=100% border=0 align=center cellpadding=3 cellspacing=0><form name=enewsvote method=POST action=''[!--vote.action--]'' target=_blank><tr><td><strong>[!--title--]</strong></td></tr><input type=hidden name=voteid value=''[!--voteid--]''><input type=hidden name=enews value=AddVote>\r\n[!--Avatarnews.listtemp--]\r\n<tr><td>[!--vote.box--]&nbsp;[!--vote.name--]</td></tr>\r\n[!--Avatarnews.listtemp--]\r\n<tr><td align=center><input type=submit name=submit value=投票>&nbsp;&nbsp;<input type=button name=button value=查看结果 onclick=javascript:window.open(''[!--vote.view--]'','''',''width=[!--width--],height=[!--height--],scrollbars=yes'');></td></tr></form></table>');");
E_D("replace into `xcaity_enewsvotetemp` values('2','默认信息投票模板','<table width=\\\\''100%\\\\'' border=0 align=center cellpadding=3 cellspacing=0><form name=enewsvote method=POST action=\\\\''[!--news.url--]afdglxt/enews/index.php\\\\'' target=_blank><tr><td><strong>[!--title--]</strong></td></tr><input type=hidden name=id value=\\\\''[!--id--]\\\\''><input type=hidden name=classid value=\\\\''[!--classid--]\\\\''><input type=hidden name=enews value=AddInfoVote>\r\n[!--Avatarnews.listtemp--]\r\n<tr><td>[!--vote.box--]&nbsp;[!--vote.name--]</td></tr>\r\n[!--Avatarnews.listtemp--]\r\n<tr><td align=center><input type=submit name=submit value=投票>&nbsp;&nbsp;<input type=button name=button value=查看结果 onclick=javascript:window.open(\\\\''[!--news.url--]afdglxt/public/vote/?classid=[!--classid--]&id=[!--id--]\\\\'',\\\\''\\\\'',\\\\''width=[!--width--],height=[!--height--],scrollbars=yes\\\\'');></td></tr></form></table>');");

require("../../inc/footer.php");
?>