<?php
include "config.php";
$id=$_GET["id"];
mysqli_query($link,"delete from tasks where id=$id");
?>