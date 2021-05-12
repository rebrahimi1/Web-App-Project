
    <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "address";
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="box-area">
	 <header>
            <div class="wrapper">
                <nav>
	  
<li><a href="indexx.php" class="cool-link">HOME</a> </li>
                     <li><a href="courses.html" class="cool-link">COURSES</a></li>
					 <li><a href="quiz.php" class="cool-link">RECOMMENDATION</a> </li>
					 
                      
                </nav>
            </div>
        </header>
        
        <div class="banner-area">
            <h2>UNIVERSITY MANAGEMENT SYSTEM</h2>
        </div>
        <div class="content-area">
            <!-- <div class="wrapper"> -->
                <h2>CONTENT AREA</h2>

<div class="col-lg-12">
<br>
<br>
<table class="table table-bordered">
<thead>
<tr>
<th> CRN</th>
<th> Section</th>
<th> Course Title</th>
<th> Course Type</th>
<th> Lecturer</th>
<th> Location</th>
<th> Hours</th>
<th> Course Description</th>
<th> Start-End Date</th>
</tr>
</thead>
<tbody>

<?php



$sql = mysqli_query($conn,"SELECT * FROM class WHERE CourseTitle= '$_POST[CourseTitle]'");
while($row=mysqli_fetch_array($sql)) {
	echo "<tr>";
	echo "<td>"; echo $row["CRN"]; echo "</td>";
	echo "<td>"; echo $row["Section"]; echo "</td>";
	echo "<td>"; echo $row["CourseTitle"]; echo "</td>";
	echo "<td>"; echo $row["CourseType"]; echo "</td>";
	echo "<td>"; echo $row["Lecturer"]; echo "</td>";
	echo "<td>"; echo $row["Location"]; echo "</td>";
	echo "<td>"; echo $row["Hours"]; echo "</td>";
	echo "<td>"; echo $row["CourseDes"]; echo "</td>";
	echo "<td>"; echo $row["StartEndDate"]; echo "</td>";
	echo "</tr>";
	
}
?>

</tbody>
</table>
</div>

</div>
</div>


</body>

</html>
