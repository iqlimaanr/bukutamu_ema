<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
//mengabaikan pesan Notice
error_reporting(E_ALL ^ (E_NOTICE));
 
//melakukan koneksi ke database dengan MySQLi
$koneksi = new MySQLi("localhost", "root", "", "bukutamu2");

if($koneksi->connect_errno) {
	echo "Gagal melakukan koneksi ke MySQL: " . $koneksi->connect_error;
}
?>