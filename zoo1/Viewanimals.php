<?php
	 include('Lib/Config.php');
	include('Include/Top.php');
		
?>
<?php	
	$sel_cat = "SELECT * FROM animals ORDER BY Name";//selecting the animals from displayed
	
	$res_cat = mysql_query($sel_cat);
?>
<table width="500" cellspacing="2" align="center">
<tr><th width="53" class="head">S.No</th>
     <th width="186" class="head">Name</th>
  </tr>
<?php
	if(mysql_num_rows($res_cat) ==0)
	{
		echo "<tr><td colspan=4 align=center>No records found</td></tr>";
	}
	$cnt = 1;
	while($rec = mysql_fetch_assoc($res_cat))
	{
		echo "<tr align='center'>";
		echo "<td>$cnt</td>";
		echo "<td>$rec[Name]</td>";
		echo "</tr>";
		$cnt++;
	}
?>	 
</table>
<?php
include('Include/Bottom.php');
?>