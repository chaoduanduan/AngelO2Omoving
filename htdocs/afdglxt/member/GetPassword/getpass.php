<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../class/user.php");
require("../class/member_actfun.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
if(!$public_r['opengetpass'])
{
	printerror('CloseGetPassword','',1);
}
$r=CheckGetPassword($_GET,1);
$username=$r['username'];
//导入模板
require(ECMS_PATH.'afdglxt/template/member/getpass.php');
db_close();
$Avatar=null;
?>