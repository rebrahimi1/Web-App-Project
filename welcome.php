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
?>
<html lang="en">
<?php
include "header.php";
?>
<div class="banner-area">
    <h2>University Management System</h2>
</div>
<div class="content-area">
    <div class="page-header"><br>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
</html>

</body>
</html>