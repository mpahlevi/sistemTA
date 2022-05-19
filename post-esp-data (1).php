<?php 

require 'koneksi.php';

$value1 = $_GET['value1'];
$value2 = $_GET['value2'];
$value3 = $_GET['value3'];
$value4 = $_GET['value4'];
$value5 = $_GET['value5'];
$value6 = $_GET['value6'];

echo $value1;
echo "<br>";
echo $value2;
echo "<br>";
echo $value3;
echo "<br>";
echo $value4;
echo "<br>";
echo $value5;
echo "<br>";
echo $value6;


$sql = "INSERT INTO SensorData(value1,value2,value3,value4,value5,value6,reading_time) 
	VALUES('".$value1."','".$value2."','".$value3."','".$value4."','".$value5."','".$value6."','".date("Y-m-d H:i:s")."')";

if($db->query($sql) === FALSE)
	{ echo "Error: " . $sql . "<br>" . $db->error; }

echo "<br>";
echo $db->insert_id;
