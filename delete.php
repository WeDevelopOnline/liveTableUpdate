<?php
/*This file is used to delete data from table, please make sure that the database name, host name, username, password, table name, and column names are as per mentioned in the codes*/
 

$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con) or die (mysql_error());

$query="Delete from testing where sno='".$_POST['id']."';";

if(mysql_query($query))
{
	echo"Deleted";
}

?>