<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require("../class/user.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
//是否登陆
$user=islogin();
//导入模板
require(ECMS_PATH.'afdglxt/template/member/card.php');
db_close();
$Avatar=null;
?>