<?php 
	
// function db_connect()
// {
// 	$host = "localhost";
// 	$user = "host1233889_barb";
// 	$password = "cobbob1230Stm";
// 	$db = "host1233889_bs";

// 	$connection = mysql_connect($host,$user,$password);

// 	if (!$connection || !mysql_select_db($db, $connection))
// 		{
// 			return false;
// 		}
// 			return $connection;
// }	

// function db_result_to_array($result)
// {
// 	$res_array = array();
// 	$count = 0;
// 	while($row = mysql_fetch_array($result)) 
// 	{
// 		$res_array = $row;
// 		$count++;
// 	}
// }

// function get_items()
//  {
//  	db_connect();
//  	$query = ("SELECT * FROM barbersshops ORDER by rate DESC");
//  	$result = mysql_query($query);
//  	$row = mysql_fetch_array($result);
//  	return $row;
//  }
// function get_image($image) 
//  {
//     $query = ("SELECT * FROM barbersshops ORDER by id DESC LIMIT 3");
//     $result = mysql_query($query);
//     $row = mysql_fetch_array($result);
//     return $row;
//    }
function get_simular_item($name)
	{
    $query = ("SELECT * FROM barbersshops WHERE name='name'");
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    return $row;
   }
function get_item($id)
   {
    $query = ("SELECT * FROM barbersshops WHERE id='$id'");
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    return $row;
   }
?>