<!DOCTYPE html>
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
  <title>University Management System - Recommend Courses</title>
  <meta charset="utf-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  table, th, td {
  border: 1px solid black;
  padding:10px
  }
  td, th{
	 text-align:center; 
  }
  table.center {
  margin-left: auto; 
  margin-right: auto;
  }


</style>
</head>
<body>
<header>
            <div class="wrapper">
                <nav>
	  
<li><a href="indexx.php" class="cool-link">HOME</a> </li>
                     <li><a href="courses.html" class="cool-link">COURSES</a></li>
					 <li><a href="quiz.php" class="cool-link">RECOMMENDATION</a> </li>
					 
                      
                </nav>
            </div>
        </header>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

<div id ="main">
<h1>Course Recommendation</h1>
</div>
<div class="col-lg-12">
<table style="width:40%" class="center" text-align = center>
<thead>

</thead>
<center>
Select a field of study that interests you:
<form method=POST>
<select name="demo">
<option selected disabled> -- select -- </option>
<option value="ds">Data Science</option>
<option value="ai">AI</option>
<option value="web">Web Development</option>
<option value="sec">Cybersecurity</option>
<option value="ani">Computer Animation/Graphics</option>
<option value="mob">Mobile Applications</option>
</select>
<button type="submit" name="Submit" class="bt"> Submit</button>
</form>
</center>
<tbody>
<?php
  

 
if(!empty($_POST) && $_POST['demo'] == 'ds') {
	echo"<center>";
	echo "Course Recommendation: Data Science";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM FieldCourses WHERE FieldNameID ='Data Science'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td>"; echo $row["CourseName"]; echo "</td>";
   
   echo "<tr>";
   
 
   echo "</tr>";
   
	}
  }
  
  else if(!empty($_POST) && $_POST['demo'] == 'ai') {
	echo"<center>";
	echo "Course Recommendation: Artificial Intelligence";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM FieldCourses WHERE FieldNameID ='AI'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td style= 'text-align:center' >"; echo $row["CourseName"]; echo "</td>";
   echo "<tr>";
   echo "</tr>";
   
	}
  }
  
    else if(!empty($_POST) && $_POST['demo'] == 'web') {
	echo"<center>";
	echo "Course Recommendation: Web Development";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM FieldCourses WHERE FieldNameID ='Web Development'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td style= 'text-align:center' >"; echo $row["CourseName"]; echo "</td>";
   echo "<tr>";
   echo "</tr>";
   
	}
  }
    else if(!empty($_POST) && $_POST['demo'] == 'sec') {
	echo"<center>";
	echo "Course Recommendation: Cybersecurity";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM FieldCourses WHERE FieldNameID ='Cybersecurity'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td style= 'text-align:center' >"; echo $row["CourseName"]; echo "</td>";
   echo "<tr>";
   echo "</tr>";
   
	}
  }
    else if(!empty($_POST) && $_POST['demo'] == 'ani') {
	echo"<center>";
	echo "Course Recommendation: Computer Animation/Graphic";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM fieldcourses WHERE FieldNameID ='Computer Animation/Graphics'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td style= 'text-align:center' >"; echo $row["CourseName"]; echo "</td>";
   echo "<tr>";
   //echo "<th>"; echo "Database System"; echo "</th>";
 
   echo "</tr>";
   
	}
  }
    else if(!empty($_POST) && $_POST['demo'] == 'mob') {
	echo"<center>";
	echo "Course Recommendation: Mobile Applications";
	echo"</center>";
	$result=mysqli_query($conn, "SELECT CourseName FROM FieldCourses WHERE FieldNameID ='Mobile Applications'");
	while($row=mysqli_fetch_array($result)) {
		
	  
   
   echo "<tr>";
   echo "<td style= 'text-align:center' >"; echo $row["CourseName"]; echo "</td>";
   echo "<tr>";
   //echo "<th>"; echo "Database System"; echo "</th>";
 
   echo "</tr>";
   
	}
  }
  
  
  
  
  
  
?>


</tbody>

</table>
<html>  
<head></head> 
<body>  
<div>
<center>
<br>
<br>
Check which classes depend on these prerequisites:  
<form method="POST">
<select name="demo"> 
  <option selected disabled> -- select -- </option>  
  <option value="CSC 3320">CSC 3320 System Level Programming</option>}  
  <option value="CSC 2720">CSC 2720 Data Structures</option>  
  <option value="CSC 2510">CSC 2510 Theoretical Foundations of Computer Science </option>  
  <option value="CSC 3210">CSC 3210 Computer Organization and Programming</option> 
</select>  
<input type="submit" name="submit" value = "submit" />
</form>  
<?php
	if(isset($_POST['submit'])){
	$getlist=$_POST['demo'];
	if($getlist == 'CSC 3320'){
		echo "<table>";
		echo"<tr>";
		echo"<th>"; echo"Classes that need CSC 3320"; echo"</th>";
		echo"</tr>";
		$result=mysqli_query($conn, "SELECT Class_ID_Course_Level FROM prerequisites WHERE Class_Needed_Course_Level ='CSC 3320'");
		while($row=mysqli_fetch_array($result)){
		echo"<tr>";
		echo "<td style= 'text-align:center' >";
		echo $row["Class_ID_Course_Level"];
		echo "</td>";
		echo"</tr>";
		
		}
			echo "</table>";
			
		}
		
		if($getlist == 'CSC 2720'){
		echo "<table>";
		echo"<tr>";
		echo"<th>"; echo"Classes that need CSC 2720"; echo"</th>";
		echo"</tr>";
		$result=mysqli_query($conn, "SELECT Class_ID_Course_Level FROM prerequisites WHERE Class_Needed_Course_Level ='CSC 2720'");
		while($row=mysqli_fetch_array($result)){
		echo"<tr>";
		echo "<td style= 'text-align:center' >";
		echo $row["Class_ID_Course_Level"];
		echo "</td>";
		echo"</tr>";
		
		}
			echo "</table>";
			
		}
		
		if($getlist == 'CSC 2510'){
		echo "<table>";
		echo"<tr>";
		echo"<th>"; echo"Classes that need CSC 2510"; echo"</th>";
		echo"</tr>";
		$result=mysqli_query($conn, "SELECT Class_ID_Course_Level FROM prerequisites WHERE Class_Needed_Course_Level ='CSC 2510'");
		while($row=mysqli_fetch_array($result)){
		echo"<tr>";
		echo "<td style= 'text-align:center' >";
		echo $row["Class_ID_Course_Level"];
		echo "</td>";
		echo"</tr>";
		
		}
			echo "</table>";
			
		}
		
		
		if($getlist == 'CSC 3210'){
		echo "<table>";
		echo"<tr>";
		echo"<th>"; echo"Classes that need CSC 3210"; echo"</th>";
		echo"</tr>";
		$result=mysqli_query($conn, "SELECT Class_ID_Course_Level FROM prerequisites WHERE Class_Needed_Course_Level ='CSC 3210'");
		while($row=mysqli_fetch_array($result)){
		echo"<tr>";
		echo "<td style= 'text-align:center' >";
		echo $row["Class_ID_Course_Level"];
		echo "</td>";
		echo"</tr>";
		
		}
			echo "</table>";
			
		}
		
	}
	





	

	
 ?>
 </div>
 </center>
</body> 

</html>  





