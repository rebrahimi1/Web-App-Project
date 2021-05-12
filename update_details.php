<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "address";

$id=$_GET["id"];
$CRN=$_GET["CRN"];
$section=$_GET["section"];
$CourseName=$_GET["CourseName"];
$Subject=$_GET["Subject"];
$Location=$_GET["Location"];





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE abook SET CRN = '$CRN',section = '$section',CourseName = '$CourseName',Subject = '$Subject',Location = '$Location' WHERE id=$id";

mysqli_query($conn, $sql);

?>