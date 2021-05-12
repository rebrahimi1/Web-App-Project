<?php
session_start();
include "config.php";
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$count=0;
$res=mysqli_query($link,"select * from tasks where username='$_SESSION[email]'");
$count=mysqli_num_rows($res);

if($count>0)
{
    echo "<center>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th style='min-width:200px;'>"; echo "Task";  echo "</th>";
    echo "<th style='width:100px;'>"; echo "Date";  echo "</th>";
    echo "<th style='width:50px;'>"; echo "Done";  echo "</th>";
    echo "</tr>";
    $res=mysqli_query($link,"select * from tasks where username='$_SESSION[email]'");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["tasks"];  echo "</td>";
        echo "<td>"; echo $row["date"];  echo "</td>";
        echo "<td>"; ?><center><i class="fa fa-trash" style="font-size:20px;color:red; cursor: pointer" onclick="delete_record('<?php echo $row["id"]; ?>')"></i></center> <?php echo "</td>";
        echo "</tr>";

    }
    echo "</table>";
    echo "<center>";
}
else{
    echo "<center>";
    echo "<h1>"; echo "No Tasks Added";   echo "</h1>";
    echo "</center>";
}


?>