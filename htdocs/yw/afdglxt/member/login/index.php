<?php
require('../../class/connect.php');
require("../../class/db_sql.php");
require('../../member/class/user.php');
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$tobind=(int)$_GET['tobind'];
if($ecms_config['member']['loginurl'])
{
	Header("Location:".$ecms_config['member']['loginurl']);
	exit();
}
//导入模板
require(ECMS_PATH.'afdglxt/template/member/login.php');
db_close();
$Avatar=null;
?>
