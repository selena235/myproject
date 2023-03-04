
<?php
session_start();
if(  isset($_SESSION['username']) )
{
  header("location:agentdashbord.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","agent");
if($db)
{
  if(isset($_POST['alogin_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM auser WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            
            echo $_SESSION['username'];
            header("location:agentdashbord.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<meta charset="utf-8"> 
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"href="register.css">
<link rel="shortcut icon" type="image" href="how.png">
<title>betachen</title>

</head>
</head>
<body>

<body class="bg-img">
		<div class="registration-form">

<form class="A1" method="post" action="loginagent.php">
				<div class="registration-logo with-border">
					<h4><b>admin</b></h4>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" id="lname" name="username" class="form-control item" placeholder="user name" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="password" id="npass" name="password"  class="form-control item" placeholder="Password" required>
						</div>
					</div>
				
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<button type="submit" name="alogin_btn" class="btn btn-block login-button">login</button>
					</div>
					<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
				</div>
				<div class="form-group">
        <h3 ><a href="realestate.php" class="text-center">Homepage</a></h3>
      
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