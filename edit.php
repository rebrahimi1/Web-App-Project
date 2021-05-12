<?php
session_start();
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

$id = $_GET["id"];
$CRN = "";
$section = "";
$CourseName = "";
$Subject = "";
$Location = "";
$sql = "SELECT * from abook WHERE id=$id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $CRN = $row["CRN"];
    $section = $row["section"];
    $CourseName = $row["CourseName"];
    $Subject = $row["Subject"];
    $Location = $row["Location"];

}

?>


<html lang="en">
<?php
include "header.php";
?>
<div class="container">
    <div class="col-lg-4">
        <br>

        <form action="" name="form1" method="post">
            <div class="form-group">

                CRN: <input type="text" class="form-control" id="CRN" name="CRN"
                                   value="<?php echo $CRN; ?>">
            </div>

            <div class="form-group">

                Section: <input type="text" class="form-control" id="section" name="section"
                                  value="<?php echo $section; ?>">
            </div>

            <div class="form-group">

                Course Name: <input type="text" class="form-control" id="CourseName" name="CourseName"
                                value="<?php echo $CourseName; ?>">
            </div>


            <div class="form-group">

                Subject: <input type="text" class="form-control" id="Subject" name="Subject"
                                     value="<?php echo $Subject; ?>">
            </div>

            <div class="form-group">

                Location: <input type="text" class="form-control" id="Location" name="Location"
                                      value="<?php echo $Location; ?>">
            </div>


            <button type="submit" name="update" class="btn btn-default">
                UPDATE DATA
            </button>
            <!--<button type="button" name="update" class="btn btn-default" onclick="update_data('<?php /*echo $id */?>')">
                UPDATE DATA
            </button>
-->
        </form>
    </div>
</div>


</div>

</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($conn,"update abook set CRN='$_POST[CRN]',section='$_POST[section]',CourseName='$_POST[CourseName]',Subject='$_POST[Subject]',Location='$_POST[Location]' where id=$id");
    ?>
    <script type="text/javascript">
        alert("record updated successfully");
        window.location="addCourse.php";
    </script>
<?php
}
?>


</html>