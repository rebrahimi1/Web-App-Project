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
    <header style="position: relative">

        <div class="container-fluid">
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
                    <li><a href="logout.php" class="cool-link">Logout</a></li>
                <?php
                }
                else
                {
                    ?>
                    <li><a href="login.php" class="cool-link">Login</a></li>
                <?php
                }
                ?>


            </nav>
        </div>
    </header>