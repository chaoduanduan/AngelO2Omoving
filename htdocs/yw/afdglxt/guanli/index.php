<?php
define('AvatarCMSAdmin','1');
define('AvatarCMSAPage','login');
define('AvatarCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$Avatarcmskey1='';
$Avatarcmskey2='';
$Avatarcmskey3='';
$Avatarcmskey4='';
$Avatarcmskey5='';
if($_POST['Avatarcmskey1']&&$_POST['Avatarcmskey2']&&$_POST['Avatarcmskey3']&&$_POST['Avatarcmskey4']&&$_POST['Avatarcmskey5'])
{
	$Avatarcmskey1=RepPostVar($_POST['Avatarcmskey1']);
	$Avatarcmskey2=RepPostVar($_POST['Avatarcmskey2']);
	$Avatarcmskey3=RepPostVar($_POST['Avatarcmskey3']);
	$Avatarcmskey4=RepPostVar($_POST['Avatarcmskey4']);
	$Avatarcmskey5=RepPostVar($_POST['Avatarcmskey5']);
	$ecertkeyrndstr=$Avatarcmskey1.'#!#'.$Avatarcmskey2.'#!#'.$Avatarcmskey3.'#!#'.$Avatarcmskey4.'#!#'.$Avatarcmskey5;
	esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
	$certr=explode('#!#',getcvar('ecertkeyrnds'));
	$Avatarcmskey1=RepPostVar($certr[0]);
	$Avatarcmskey2=RepPostVar($certr[1]);
	$Avatarcmskey3=RepPostVar($certr[2]);
	$Avatarcmskey4=RepPostVar($certr[3]);
	$Avatarcmskey5=RepPostVar($certr[4]);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>阿凡达网站管理系统 － 最安全、最稳定的开源CMS系统</title>
<link rel="stylesheet" href="adminimg/css.css" type="text/css">
<base onmouseover="window.status='阿凡达网站管理系统(AvatarCMS) － 最安全、最稳定的开源CMS系统';return true">
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
function CheckLogin(obj){
	if(obj.username.value=='')
	{
		alert('请输入用户名');
		obj.username.focus();
		return false;
	}
	if(obj.password.value=='')
	{
		alert('请输入登录密码');
		obj.password.focus();
		return false;
	}
	if(obj.loginauth!=null)
	{
		if(obj.loginauth.value=='')
		{
			alert('请输入认证码');
			obj.loginauth.focus();
			return false;
		}
	}
	if(obj.key!=null)
	{
		if(obj.key.value=='')
		{
			alert('请输入验证码');
			obj.key.focus();
			return false;
		}
	}
	return true;
}
</script>
<style type="text/css">
<!--
.STYLE2 {color: #F2E618}
-->
</style>
</head>

<body text="383636" bgcolor="#FFFFFF" onLoad="document.login.username.focus();">
<table width="808" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="login" id="login" method="post" action="ecmsadmin.php" onSubmit="return CheckLogin(document.login);">
    <input type="hidden" name="enews" value="login">
    <tr>
      <td><img name="admin_r1_c1" src="adminimg/admin_r1_c1.jpg" width="808" height="132" border="0" id="admin_r1_c1" alt="" /></td>
    </tr>
    <tr>
      <td><img name="admin_r2_c1" src="adminimg/admin_r2_c1.jpg" width="808" height="75" border="0" id="admin_r2_c1" alt="" /></td>
    </tr>
    <tr>
      <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="808">
        <tr>
          <td><img name="admin_r3_c1" src="adminimg/admin_r3_c1.jpg" width="164" height="211" border="0" id="admin_r3_c1" alt="" /></td>
          <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="529">
            <tr>
              <td><img name="admin_r3_c2" src="adminimg/admin_r3_c2.jpg" width="529" height="30" border="0" id="admin_r3_c2" alt="" /></td>
            </tr>
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="529">
                <tr>
                  <td><img name="admin_r4_c2" src="adminimg/admin_r4_c2.jpg" width="32" height="181" border="0" id="admin_r4_c2" alt="" /></td>
                  <td><table align="left" border="0" cellpadding="0" cellspacing="0" width="117">
                    <tr>
                      <td><img name="admin_r4_c3" src="adminimg/admin_r4_c3.jpg" width="117" height="122" border="0" id="admin_r4_c3" alt="" /></td>
                    </tr>
                    <tr>
                      <td><img name="admin_r8_c3" src="adminimg/admin_r8_c3.jpg" width="117" height="59" border="0" id="admin_r8_c3" alt="" /></td>
                    </tr>
                  </table></td>
                  <td><img name="admin_r4_c4" src="adminimg/admin_r4_c4.jpg" width="61" height="181" border="0" id="admin_r4_c4" alt="" /></td>
                  <td bgcolor="#AE0000"><table width="230" height="100%" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="50" height="27" class="STYLE2">用户名: </td>
                      <td colspan="2"><input name="username" type="text" class="b-form2" size="22">
                      </td>
                    </tr>
                    <tr>
                      <td height="27" class="STYLE2">密&nbsp;&nbsp;码:&nbsp;</td>
                      <td colspan="2"><input name="password" type="password" class="b-form2" size="22">
                      </td>
                    </tr>
                    <?php
		  if($ecms_config['esafe']['loginauth'])
		  {
		  ?>
                    <tr>
                      <td height="27" class="STYLE2">认证码:&nbsp;</td>
                      <td colspan="2"><input name="loginauth" type="password" id="loginauth" class="b-form2" size="22"></td>
                    </tr>
                    <?php
		  }
		  ?>
                    <tr>
                      <td height="27" class="STYLE2">提&nbsp;&nbsp;问:&nbsp;</td>
                      <td colspan="2"><select name="equestion" id="equestion" onChange="if(this.options[this.selectedIndex].value==0){showanswer.style.display='none';}else{showanswer.style.display='';}">
                        <option value="0" selected>无安全提问</option>
                        <option value="1">母亲的名字</option>
                        <option value="2">爷爷的名字</option>
                        <option value="3">父亲出生的城市</option>
                        <option value="4">您一位老师的名字</option>
                        <option value="5">您个人计算机的型号</option>
                        <option value="6">您最喜欢的餐馆名称</option>
                        <option value="7">驾驶证的后四位数字</option>
                      </select></td>
                    </tr>
                    <tr id="showanswer">
                      <td height="27" class="STYLE2">答&nbsp;&nbsp;案:&nbsp;</td>
                      <td colspan="2"><input name="eanswer" type="text" id="eanswer" class="b-form2" size="22"></td>
                    </tr>
                    <?php
		  if(empty($public_r['adminloginkey']))
		  {
		  ?>
                    <tr>
                      <td height="27" class="STYLE2">验证码:&nbsp;</td>
                      <td width="83"><input name="key" type="text" class="b-form2" size="9">
                      </td>
                      <td width="97"><img src="ShowKey.php" name="KeyImg" id="KeyImg" align="bottom" onClick="KeyImg.src='ShowKey.php?'+Math.random()" alt="看不清楚,点击刷新"></td>
                    </tr>
                    <?php
		  }
		  ?>
                    <tr>
                      <td height="27"><span class="STYLE2">窗&nbsp;&nbsp;口:</span>&nbsp;</td>
                      <td colspan="2" class="STYLE2"><input type="radio" name="adminwindow" value="0" checked>
                        正常
                        <input type="radio" name="adminwindow" value="1">
                        全屏</td>
                    </tr>
                    <tr>
                      <td height="27">&nbsp;</td>
                      <td colspan="2" valign="bottom"><input name="imageField" type="image" src="adminimg/admin_r9_c7.jpg" width="144" height="32" border="0"></td>
                    </tr>
                  </table></td>
                  <td width="91" height="181" background="adminimg/admin_r4_c9.jpg">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
          <td><img name="admin_r3_c10" src="adminimg/admin_r3_c10.jpg" width="115" height="211" border="0" id="admin_r3_c10" alt="" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="808" height="75" background="adminimg/admin_r11_c1.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td width="808" height="54" align="center" background="adminimg/admin_r12_c1.jpg"><input name="Avatarcmskey1" type="hidden" id="Avatarcmskey1" value="<?php echo $Avatarcmskey1;?>">
          <input name="Avatarcmskey2" type="hidden" id="Avatarcmskey2" value="<?php echo $Avatarcmskey2;?>">
          <input name="Avatarcmskey3" type="hidden" id="Avatarcmskey3" value="<?php echo $Avatarcmskey3;?>">
          <input name="Avatarcmskey4" type="hidden" id="Avatarcmskey4" value="<?php echo $Avatarcmskey4;?>">
          <input name="Avatarcmskey5" type="hidden" id="Avatarcmskey5" value="<?php echo $Avatarcmskey5;?>"></td>
    </tr>
    <tr>
      <td width="808" height="62" background="adminimg/admin_r13_c1.jpg">&nbsp;</td>
    </tr>
  </form>
</table>
<script>
if(document.login.equestion.value==0)
{
	showanswer.style.display='none';
}
</script>
</body>
</html>