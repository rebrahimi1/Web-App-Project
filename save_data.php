<?php
session_start();
include "config.php";
$tasks=$_GET["tasks"];
$date=$_GET["date"];

mysqli_query($link,"insert into tasks values(NULL,'$_SESSION[email]','$tasks','$date')");

?>