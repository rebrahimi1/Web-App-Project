<?php
/*** Create a table through PHP Script ***/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "address";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET["id"];
$sql = "DELETE from abook WHERE id=$id";
mysqli_query($conn, $sql);
?>

<script type="text/javascript">
window.location="addCourse.php";
</script>