<?php 
	
function db_connect()
{
	$host = "localhost";
	$user = "host1233889_barb";
	$password = "cobbob1230Stm";
	$db = "host1233889_bs";

	$connection = mysql_connect($host,$user,$password);

	if (!$connection || !mysql_select_db($db, $connection))
		{
			return false;
		}
			return $connection;
}	
?>