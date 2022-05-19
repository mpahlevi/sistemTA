<?php
// host web server
$host       =   "localhost";
// username untuk mengakses database
$username   =   "u7786689_user_pahlevi";
// password untuk mengakses database
$pass       = "sukses2022";
// database yang digunakan
$database   = "u7786689_pahlevi";
// script untuk koneksi ke database
$koneksi = mysqli_connect($host,$username,$pass,$database);
$sql = mysqli_query($koneksi, "select * from SensorData order by id desc");
$data = mysqli_fetch_array($sql);
$ph = $data['value3'];
if($ph == "") $ph = 0;
echo $ph;
?>