<?php
	require_once("../Lib/Config.php");
	if(isset($_POST['Submit']))
	{
		$aname = $_POST['AdminName'];
		$pwd = md5($_POST['Password']);
		$sel = "SELECT * FROM admin WHERE AdminName='$aname' AND Password='$pwd'";
		$res = mysql_query($sel) or die(mysql_error());
		if(mysql_num_rows($res) == 0)
		{
			$ack = "Admin Name or Password is incorrect";
		}
		else
		{
			$rec = mysql_fetch_assoc($res);
			$aid = $rec['Id'];
			$_SESSION['AdminId'] = $aid;
			header("location: MyHome.php");
		}
	}
?>
<style type="text/css">
<!--
.style3 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style10 {color: #FF33CC; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 257px;
	top: 115px;
}
-->
</style>
<div id="Layer1">
<div style="color:#FF0000; font-size:12px; font-family:verdana; text-align:center; width: 300px;"><?=$ack?></div>
  <table width="300" border="0" cellspacing="0" cellpadding="3" style="border:#FF33CC 0.2em solid">
    <form name="LoginForm" action="" method="post">
      <tr>
        <td height="24" colspan="2" bgcolor="#FF33CC"><span class="style3">Login Panel </span></td>
      </tr>
      <tr>
        <td width="120" height="38"><span class="style10">Admin Name </span></td>
        <td width="162"><input type="text" name="AdminName"></td>
      </tr>
      <tr>
        <td height="25"><span class="style10">Password</span></td>
        <td><input type="password" name="Password"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="Submit" value="LogIn" style="width:80px"></td>
      </tr>
    </form>
  </table>
</div>
