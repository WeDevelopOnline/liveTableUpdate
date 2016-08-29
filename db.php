<?php
/*This file is used to show data from table, please make sure that the database name, host name, username, password, table name, and column names are as per mentioned in the codes*/
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con) or die (mysql_error());

$query="SELECT * FROM testing ORDER BY sno DESC";

$rs=mysql_query($query);

$comment="";
$comment .="
<div class='table-responsive'>
<table class='table-bordered table'>
<tr>
					<th>SNO.</th>
					<th>Name</th>
					<th>Company</th>
					<th>Delete/Add</th>
</tr>

";

if (mysql_num_rows($rs))
{
	while($rows=mysql_fetch_array($rs))
	{
		$comment .="
			
				<tr>
					<td >$rows[0]</td>
					<td contenteditable data-id1='".$rows[0]."' class='type'>$rows[1]</td>
					<td contenteditable data-id2='".$rows[0]."' class='type'>$rows[2]</td>
					<td ><button class='btn btn-danger bton' data-id='".$rows[0]."' >x</button></td>
				</tr>
			
		";
		
	}
	
		$comment .="
			
				<tr>
					<td ></td>
					<td contenteditable id='name'>$rows[1]</td>
					<td contenteditable id='company'>$rows[2]</td>
					<td ><button class='btn btn-success ' id='add' >+</button></td>
				</tr>
			
		";
}
else{
	$comment .="
			
				<tr>
					<td colspan='4'>Nothing Found</td>
				</tr>
			
		";
}

$comment .="</table></div>";
echo $comment;
?>
