<?php
	 include('Lib/Config.php');
	include('Include/Top.php');
		

	
	if(isset($_POST['Submit']))
	{
		
		$animals = $_POST['aname'];
		$Amt = $_POST['ani'];
		
		$in = "INSERT INTO donatefunds (Name,Amount) VALUES('$animals','$Amt')";
		mysql_query($in);
	
	}
	
	
?>

   <table width="80%" border="0" cellspacing="1" cellpadding="2" align="center">
   <form name="RegisterForm" action="" method="post">
    <tr>
  </tr>
  
  
  <tr>
    <td>Animals</td>
       <td> <select name ="aname">
                    <option value ="" selected> Select</option>
                <?php
                $sel_ani = "SELECT * FROM animals ORDER BY Id ";//selecting animal that amount to funded
                $res_ani = mysql_query($sel_ani);
                while($rec_ani = mysql_fetch_assoc($res_ani))
				{
                    echo "<option value = '$rec_ani[Name]'> $rec_ani[Name] </option>";
                }
                ?>
                </select>
            </td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input type="text" name="ani"></td>
  </tr>

  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Proced Pament"></td>
  </tr>
  </form>
</table>

<?php
include('Include/Bottom.php');
?>