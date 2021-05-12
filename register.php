<?php
require_once "config.php";

//Intialization
$name = $password = $confirm_password = $email = $major = "";
$name_err = $password_err = $confirm_password_err = $email_err = $major_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
    }
    elseif(strlen(trim($_POST["name"])) < 1){
        $name_err = "Name must have atleast 1 character.";
    }
    else{
        $name = trim($_POST["name"]);
    }
	 if(($_POST['selectMajor']) == "null") {
        $major_err = "Please select a major or undecided";
    }
    else {
        $major = trim($_POST["selectMajor"]);
    }
    //email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email";
    }
    else {
        $sql = "SELECT id FROM users WHERE email = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST["email"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already registered to an account.";
                }
                else{
                    $email = trim($_POST["email"]);
                }
            }
            else {
                echo "ERROR: Something went wrong :/";
            }
            mysqli_stmt_close($stmt);
        }
    }

    //password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    //confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    //insert
    if(empty($name_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        $sql = "INSERT INTO users (name, email, password, major) VALUES (?,?,?,?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_password, $param_major);
            $param_email = $email;
            $param_name = $name;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_major = $major;
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            }
            else {
                echo "Something went wrong :/";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
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
            <!-- <div class="wrapper"> -->
               <!-- <h2>Add Courses</h2>-->
                
            <!-- </div> -->
        


<div class="container-fluid">
<div class="col-lg-4 col-lg-push-3" >
    <div class="wrapper" style="text-align: left;border-radius: 5px;border-color: gray;border-style: solid;border-width: 1px;margin-top: 10px;padding: 15px; position: relative">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
			
			 <div class="form-group <?php echo (!empty($major_err)) ? 'has-error' : ''; ?>">
                <label>Major</label>
                
                <select name = "selectMajor" type = "dropdown" class = "form-control" required>
                    <option value=""> --Please select a major-- </option>
                    <option value="BIO">Biology</option>
                    <option value="CHEM">Chemestry</option>
                    <option value="COMP SCI">Computer Science</option>
                    <option value="UND">Undecided</option>
                </select>
				<span class="help-block"><?php echo $major_err; ?></span>
            </div> 
			
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
               
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</div>
    </div>

</html>