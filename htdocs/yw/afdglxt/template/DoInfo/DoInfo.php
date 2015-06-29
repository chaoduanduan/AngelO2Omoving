<?php
if(!defined('InAvatarCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='管理信息';
$url="<a href=../../>首页</a>&nbsp;>&nbsp;<a href=../member/cp/>会员中心</a>&nbsp;>&nbsp;管理信息";
require(ECMS_PATH.'afdglxt/template/incfile/header.php');
?> 
      <p>&nbsp;</p>
      <table width="80%" border="0" align="center" class="tableborder">
        <tr class="header">
          <td height="25"><div align="center">欢迎来到信息管理中心</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#FFFFFF"> 
          <div align="center">选择左边您要增加或管理的信息。</div></td>
        </tr>
      </table>
<?php
require(ECMS_PATH.'afdglxt/template/incfile/footer.php');
?>