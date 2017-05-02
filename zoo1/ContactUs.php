<?php
	//include_once("Includes/Top.php");
	include('Include/Top1.php');
	
	if(isset($_POST['Submit']))//retriving the values from the id's
	{
		$name = $_POST['Name'];
		$email = $_POST['EmailId'];
		$Urq = $_POST['urq'];
		$mobile = $_POST['mob'];
		
		$in = "INSERT INTO enqform(Name,EmailId,ContactNo,Urquery) VALUES('$name','$email','$Urq','$mobile')";
	
		mysql_query($in);
	
	}
?>
 <table width="80%" border="0" cellspacing="1" cellpadding="2" align="center">
   <form name="RegisterForm" action="" method="post">
    <tr>
  <!--  <td colspan="2">If you are returning user please login <a href="Login.php">here</a></td>-->
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
    <td>MobileNo:</td>
    <td><input type="text" name="mob"></td>
  </tr>
   <tr>
    <td>Ur Query</td>
    <td><textarea name="urq" cols="20" rows="5"></textarea></td>
  </tr>
  
   
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
  </form>
</table>
<?php
  include('Include/Bottom1.php');
	//include_once("Includes/Bottom.php");
?>