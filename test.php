<?php 
	
$mysql_server = "";
$mysql_user = "";
$mysql_password = "";
$mysql_db = "";
$con = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if (mysqli_connect_errno($con)) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
else
{
	$query = "SELECT * FROM `table_name`";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		echo "Aleksandar::OGOSense";
	}
}

?>
