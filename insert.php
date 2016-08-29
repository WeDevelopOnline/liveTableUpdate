<?php
/*This file is used to inserting data to table, please make sure that the database name, host name, username, password, table name, and column names are as per mentioned in the codes*/
$con=mysql_connect("localhost","root","");
mysql_select_db("test",$con) or die (mysql_error());
$name=$_POST['name'];
$company=$_POST['company'];

$query="insert into testing (`name`,`company`) values('$name','$company');";

if(mysql_query($query))
{
	echo"Added";
}

?>