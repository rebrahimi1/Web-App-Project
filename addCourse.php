<?php
session_start();

if(!isset($_SESSION["email"]))
{
    ?>
<script type="text/javascript">
    window.location="login.php";
</script>
    <?php

}

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
?>


<html lang="en">
<?php
include "header.php";
?>
    
 <div class="banner-area">
            <h2>UNIVERSITY MANAGEMENT SYSTEM</h2>
        </div>
		<div class="content-area">
            <!-- <div class="wrapper"> -->
                <h2>Add Courses</h2>
                
            <!-- </div> -->
        


<div class="container">
<div class="col-lg-4">
 <br>
 <br>
  <form action="" name="form1" method="post">
    <div class="form-group">
      
      CRN: <input type="text" class="form-control" id="CRN"  name="CRN" required>
    </div>
    
	<div class="form-group">
     
     Section: <input type="text" class="form-control" id="section" name="section" required>
    </div>
	
	 <div class="form-group">
     
     Course Name: <input type="text" class="form-control" id="CourseName" name="CourseName" required>
    </div>
	
	
	 <div class="form-group">
     
     Subject: <input type="text" class="form-control" id="Subject" name="Subject" required>
    </div>
	
	 <div class="form-group">
     
     Location: <input type="text" class="form-control" id="Location" name="Location" required>
    </div>
	

	
	
    
    <button type="submit" name="add" class="bt">Add Course</button>
	
	
	 
  </form>
  <br>
  <br>
</div>
</div>

<div class="col-lg-12">

<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th> CRN</th>
<th> Section</th>
<th> Course Name</th>
<th> Subject</th>
<th> Location</th>
<th>Edit</th>
<th>Drop</th>
</tr>
</thead>
<tbody>

<?php
$result=mysqli_query($conn, "SELECT * FROM abook where username='$_SESSION[email]'");
while($row=mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["CRN"]; echo "</td>";
	echo "<td>"; echo $row["section"]; echo "</td>";
	echo "<td>"; echo $row["CourseName"]; echo "</td>";
	echo "<td>"; echo $row["Subject"]; echo "</td>";
	echo "<td>"; echo $row["Location"]; echo "</td>";
	echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>" <button type="button" class="btn btn-success">Edit</button> <?php echo "</td>";
	echo "<td>"; ?> <a id="<?php echo $row["id"]; ?>" href="#" <button type="button" class="btn btn-success" onclick="areyousure(this.id)">Drop</button> <?php echo "</td>";
	echo "</tr>";
}
?>

</tbody>
</table>


</div>

</div>
        </div>

</body>

<?php
if(isset($_POST["add"]))
{
	mysqli_query($conn, "INSERT into abook VALUES(NULL, '$_POST[CRN]', '$_POST[section]', '$_POST[CourseName]', '$_POST[Subject]', '$_POST[Location]','$_SESSION[email]')");
 
?>

<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php

}



?>







<script type="text/javascript">
  
  function areyousure(id)
  {
    var txt;
    var r = confirm("Are you sure to drop this course?");
    if (r == true) {
      window.location="delete.php?id="+id;
    } else {

    }
  }
</script>

</html>