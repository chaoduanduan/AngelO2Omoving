<?php
require("../class/connect.php");
require("../class/db_sql.php");
$link=db_connect();
$Avatar=new mysqlquery();
//导入模板
require(ECMS_PATH.'afdglxt/template/DoInfo/DoInfo.php');
db_close();
$Avatar=null;
?>