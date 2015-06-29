<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../../data/dbcache/class.php");
require("../class/ShopSysFun.php");
eCheckCloseMods('shop');//关闭模块
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
//导入模板
require(ECMS_PATH.'afdglxt/template/ShopSys/buycar.php');
db_close();
$Avatar=null;
?>