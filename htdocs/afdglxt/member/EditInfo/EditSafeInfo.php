<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../class/user.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$r=ReturnUserInfo($user[userid]);
//导入模板
require(ECMS_PATH.'afdglxt/template/member/EditSafeInfo.php');
db_close();
$Avatar=null;
?>