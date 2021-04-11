<?php
session_start();
require 'connect.php';
if (isset($_SESSION['taikhoan'])) {
	$_SESSION = array();
	session_destroy();
	header('location: ../index.php');
}
else
header('location: ../index.php');
?>