<?php
  include('Lib/Config.php');
	
	include('Include/Top.php');
	
	if(isset($_POST['Submit']))// Checks for the Set
	{
		$name = $_POST['Name'];
		$email = $_POST['EmailId'];
		$Addr = $_POST['add'];
		$mobile = $_POST['mob'];
		$pwd  = md5($_POST['Password']);
		
		$in = "INSERT INTO Users(Name,EmailId,Password,Address,ContactNo) VALUES('$name','$email','$pwd','$Addr','$mobile')";
		mysql_query($in);//insert all names to the my sql
	
	}
	
	
	
?>
   <table width="80%" border="0" cellspacing="1" cellpadding="2" align="center">
   <form name="RegisterForm" action="" method="post">
    <tr>
    <td colspan="2">If you are returning user please login <a href="Login.php">here</a></td>
  </tr>
  <tr>
    <td>Name:</td>
    <td><input type="text" name="Name"></td>
  </tr>
  <tr>
    <td>EmailId:</td>
    <td><input type="text" name="EmailId"></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="Password"></td>
  </tr>
  
   <tr>
    <td>Address:</td>
    <td><textarea name="add" cols="20" rows="5"></textarea></td>
  </tr>
  
   <tr>
    <td>MobileNo:</td>
    <td><input type="text" name="mob"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Register"></td>
  </tr>
  </form>
</table>

<?php
	//include_once("Includes/Bottom.php");
	include('Include/Bottom.php');
?>