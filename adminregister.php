<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","agent");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO users(username, email, password ) VALUES('$username','$email','$password')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['username']=$username;
                header("location:realestate1.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"> 
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"href="register.css">
<link rel="shortcut icon" type="image" href="how.png">
<title>betachen</title>

</head>


<body class="bg-img">
		<div class="registration-form">
    <?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
			<form class="A1" method="post" action="register.php">
				<div class="registration-logo with-border">
					<h4><b>WELCOME TO BETACHEN</b></h4>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" id="lname" name="username" class="form-control item" placeholder="user name" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div>
							<input type="email" id="email" name="email" class="form-control item" placeholder="Enter Email" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="password" id="npass" name="password"  class="form-control item" placeholder="Password" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="password" id="cpass" name="password2" class="form-control item" placeholder="Confirm Password" required>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<button type="submit" name="register_btn" id="register_btn" class="btn btn-block login-button">signup</button>
					</div>
				</div>
				<div class="form-group">
        <h3 id="A3"> I already have a account<a href="login.php" class="text-center" >..login</a>
        <h3>
        <a href="realestate.php" class="text-center">go to Homepage</a></h3></h3>
      
				</div>
			</form>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
		<script src="js/script.js"></script>
		<script type="text/javascript">
			$("[type=file]").on("change", function(){
			// Name of file and placeholder
			var file = this.files[0].name;
			var dflt = $(this).attr("placeholder");
			if($(this).val()!=""){
				$(this).next().text(file);
			} else {
				$(this).next().text(dflt);
			}
			});
		</script>
</body>
</html>