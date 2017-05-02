<?php
	include_once("Includes/Top.php");
	$sel  = "SELECT * FROM donatefunds";
	$res = mysql_query($sel);
?>
<table width="80%" border="0" cellspacing="1" cellpadding="2" align="center">
  <tr>
    <th class="head">S.No.</th>
    <th class="head">Animales Name</th>
    <th class="head">Amount</th>
  </tr>
 <?php 
 	if(mysql_num_rows($res) == 0)
	{
		echo "<tr><td colspan=5 align=center>No customers found</td></tr>";
	}
	$i = 1;
	while($rec = mysql_fetch_assoc($res))
	{
		echo "<tr align='center'>";
			echo "<td>".$i++."</td>";
			echo "<td>$rec[Name]</td>";
			echo "<td>$rec[Amount]</td>";
			
		echo "</tr>";
	}
	
?>
</table>	
<?php
	include_once("Includes/Bottom.php");
?>
	
	
	