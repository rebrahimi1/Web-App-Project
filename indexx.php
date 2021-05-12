<?php
session_start();
?>
<!DOCTYPE html>
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
  <style>
  table{
	border-collapse: collapse;
}

table th{
	background-color: skyblue;
	color: #FFF;
	padding: 4px 80px 4px 80px;
}

table td{
	border: 1px solid grey;
}

table tr:nth-child(odd) td{
	background-color: #e7edf0;
}

table tr:nth-child(even) td{
	background-color: lightgrey;
}
</style>
</head>
<body>
    <div class="box-area">
        <header>
            <div class="wrapper">
                <nav style="float: none">

                    <li><a href="indexx.php" class="cool-link">HOME</a> </li>
                    <li><a href="courses.html" class="cool-link">COURSES</a></li>
                    <li><a href="quiz.php" class="cool-link">RECOMMENDATION</a> </li>

                    <?php
                    if(isset($_SESSION["email"]))
                    {
                        ?>
                        <li><a href="addCourse.php" class="cool-link">ADD/DROP COURSES</a> </li>
                        <li><a href="todo.php" class="cool-link">ToDo</a> </li>
                        <li><a href="logout.php" class="cool-link">LOGOUT</a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li><a href="login.php" class="cool-link">LOGIN</a></li>
                        <?php
                    }
                    ?>

                </nav>
            </div>
        </header>
        <div class="banner-area">
            <h2>UNIVERSITY MANAGEMENT SYSTEM</h2>
        </div>
        <div class="content-area">
            <!-- <div class="wrapper"> -->
                <h2>List of Computer Science Courses</h2>
				<br>
               <center>
                <table>
                    <tr>
                         <th>SUBJECT</th>
                         <th>COURSE NUMBER</th>
                         <th>COURSE NAME</th>
                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>1301</td>
                        <td>PRINCIPLES OF COMPUTER SC I</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>1302</td>
                        <td>PRINCIPLES OF COMPUTER SC II</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>2510</td>
                        <td>THEOR FOUNDATIONS OF COMP SCI</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>2720</td>
                        <td>DATA STRUCTURES</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>3210</td>
                       
                        <td>COMPUTER ARCHITECTURE </td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4220</td>
                        
                        <td>COMPUTER NETWORKS</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4221</td>
                        
                        <td>MOBILE COMP & WIRELESS NET </td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4222</td>
                        
                        <td>FUNDAMENTALS OF CYBERSECURITY</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4223</td>
                        
                        <td>PRIVACY</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>2510</td>
                        
                        <td>THEOR FOUNDATIONS OF COMP SCI</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4260</td>
                        
                        <td>DIGITAL IMAGE PROCESSING</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4310</td>
                        
                        <td>PARALLEL & DIST COMPUTING</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4320</td>
                        
                        <td>OPERATING SYSTEM</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4330</td>
                       
                        <td>PROGRAMMING LANGUAGE CONCEPTS</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4350</td>
                        
                        <td>SOFTWARE ENGINEERING</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4360</td>
                        
                        <td>MOBILE APP DEVELOPMENT</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4370</td>
                       
                        <td>WEB PROGRAMMING</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4510</td>
                        
                        <td>AUTOMATA</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4520</td>
                       
                        <td>DESIGN & ANALYSIS ALGORITHMS</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4710</td>
                        
                        <td>DATABASE SYSTEM</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4740</td>
                        
                        <td>DATA MINING</td>

                    </tr>
                    <tr>
                        <td>CSC</td>
                        <td>4760</td>
                        
                        <td>BIG DATA PROGRAMMING</td>

                    </tr>
                     <tr>
                        <td>CSC</td>
                        <td>4780</td>
                       
                        <td>FUNDAMENTALS OF DATA SCIENCE</td>

                    </tr>
                     <tr>
                        <td>CSC</td>
                        <td>4810</td>
                        
                        <td>ARTIFICIAL INTELLIGENCE</td>

                    </tr>
                     <tr>
                        <td>CSC</td>
                        <td>4821</td>
                        <td>FUNDAMENTALS OF GAME DESIGN</td>

                    </tr>
                     <tr>
                        <td>CSC</td>
                        <td>4850</td>
                        
                        <td>MACHINE LEARNING</td>

                    </tr>
                </table>

            </center>
                
            <!-- </div> -->
        </div>
                
            <!-- </div> -->
        
    </div>
</body>
</html>