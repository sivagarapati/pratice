<?php
include('Lib/Config.php');
include('Include/Top.php');

	if(isset($_POST['Submit']))
	{
		$name  = $_POST['Name'];
		$pwd = md5($_POST['Password']);
		$sel = "SELECT * FROM users WHERE Name='$name' AND Password='$pwd'";
		$res = mysql_query($sel);//login system working process
		if(mysql_num_rows($res) == 0)
		{
			$ack = "No customers exists with this Name";
		}else{
			$rec = mysql_fetch_assoc($res);
			$_SESSION['uid'] = $rec['Id'];
			header("Location: MyHome.php");
		}
	}
?>
<div align="center">If you are a new user please register <a href="Register.php">here</a></div>
<form name="LoginForm" method="post" action="" style="text-align:center">
Name<input type="text" name="Name"><br>
Password <input type="password" name="Password"><br>
<input type="submit" name="Submit" value="Log In">
</form><br />
<br />
<br />

<?php
include('Include/Bottom.php');
?>
