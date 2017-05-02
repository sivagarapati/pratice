<?php
	include_once("Includes/Top.php");
?>
<script type="text/javascript">
	function addCat(){
		open("AddCategory.php","ac","width=300,height=100,top=200,left=300");
	}
	function editCat(cid){
		open("EditCategory.php?catid="+cid,"ac","width=300,height=100,top=200,left=300");
	}
</script>
<?php	
	$sel_cat = "SELECT * FROM animals ORDER BY Name";
	
	$res_cat = mysql_query($sel_cat);
?>
<a href="javascript: void(0)" onclick="javascript: addCat();">Add Animals</a>
<div style="color: #009966; font-size:14px; font-family:verdana; text-align:center;font-weight: bold;"><?=$_GET['ack']?></div>
<table width="500" cellspacing="2" align="center">
<tr><th width="53" class="head">S.No</th>
     <th width="186" class="head">Name</th>
	 <th width="143" class="head">Action</th>
  </tr>
<?php
	if(mysql_num_rows($res_cat) ==0)
	{
		echo "<tr><td colspan=4 align=center>No records found</td></tr>";
	}
	$cnt = 1;
	while($rec = mysql_fetch_assoc($res_cat))
	{
		$cid = $rec['Id'];
		echo "<tr>";
		echo "<td>$cnt</td>";
		echo "<td>$rec[Name]</td>";
		echo "</td>";
		echo "<td align='center'><a href='javascript: void(0)' onclick='javascript: editCat($rec[Id])'>Edit</a> | <a href='DeleteCategory.php?catid=$rec[Id]'>Delete</a></td>";
		echo "</tr>";
		$cnt++;
	}
?>	 
</table>
<?php
	include_once("Includes/Bottom.php");
?>