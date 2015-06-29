<?php
if(!defined('InEmpireBak'))
{
	exit();
}

//Database
$phome_db_ver="5.0";
$phome_db_server="qdm16412339.my3w.com";
$phome_db_port="";
$phome_db_username="qdm16412339";
$phome_db_password="12345678";
$phome_db_dbname="qdm16412339_db";
$baktbpre="";
$phome_db_char="";

//USER
$set_username="afanda";
$set_password="7fef6171469e80d32c0559f88b377245";
$set_loginauth="";
$set_loginrnd="7fef6171469e80d32c0559f88b377245";
$set_outtime="60";
$set_loginkey="1";

//COOKIE
$phome_cookiedomain="";
$phome_cookiepath="/";
$phome_cookievarpre="ebak_";

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath="bdata";
$bakzippath="zip";
$filechmod="1";
$phpsafemod="";
$php_outtime="1000";
$limittype="";
$canlistdb="";

//------------ SYSTEM ------------
HeaderIeChar();
?>