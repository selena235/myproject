<?php
session_start();


//connect to database
// $db=mysqli_connect("localhost","root","","agent");

?>

<html>
<head>
<link rel="stylesheet" type="text/css"href="nav1.css">
</head>
<body>
<div id="cook1">
<button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="realestate.php" class="logo">HOME</a>  
</button></div>
<section class="agents" id="agents"> <h1 class="heading"> professional <span>agents</span> </h1> <div class="box-container"> 
<div class="box"> <a href="#" class="fas fa-envelope"></a> <a href="" class="fas fa-phone"></a> <img src="imges/oneperson.jpg" alt=""> 
<h3><?php echo $_SESSION['username']; ?></h3> <span>agent</span> 
<div class="share"> <a href="#" class="fab fa-facebook-f"></a> 
<a href="#" class="fab fa-twitter"></a> <a href="#" class="fab fa-instagram"></a> <a href="#" class="fab fa-linkedin"></a> 
<div id="cook2">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="logoutadmi.php"target="_self">logout</a></button>
</div>
</div> </div></section>
<main role="main">
<section>
<div id="class">
    <h1 class="heading">user<span>requests</span></h1>
    <h2>i want to request</h2>
    <p>
    <button> <a href="#" class="touch">accept</a></button>
       <button> <a href="#" class="touch">request other agents</a></button></p>
       <small><i><?php $currentDate=new date();echo $currentDate->format('Y-m-d H:i:s')?></i></small>
      
   </div>
</section>
</main>


</body>
</html>
