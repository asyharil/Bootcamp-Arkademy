<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "gudang";

$con = mysqli_connect($host,$user,$pass,$db);
	// cek koneksi
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}

?>