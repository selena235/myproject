<?php
session_start();

//connect to database
// $db=mysqli_connect("localhost","root","","mysite");


?>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css"href="text.css">
<link rel="shortcut icon" type="image" href="imges/how.png">
<title>betachen</title>
</head>

<body>

<div id="cook">
<button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="#serives"target="_self"><b>SERVICES</b></a></button>
</div>
<div id="cook2">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="login.php"target="_self">login</button>
</div>
<div id="cook3">
<button onclick="document.getElementById('center2').style.display='block'" style="width:auto;"><a href="register.php"target="_self">signup</button>
</div>
<div id="cook1">
<button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="realestate.php" class="logo">HOME</a>  
</button>
</div>
<br><br>
<div id="center">
<h2 contenteditable="true">BETACHEN</h2>
<h1>find your perfect home</h1>
<div class="business"> <button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="forrent1.php" class="logo">FOR RENT</a> 
<button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="forsell1.php" class="logo">FOR SELL</a> </div>
 </div>




<section align="right">
  <img class="mySlides" src="imges/house.png" style="width:20%">
  <img class="mySlides" src="imges/house1.png" style="width:20%">
  <img class="mySlides" src="imges/house3.png" style="width:20%">
</section>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<h1 id="serives"class="heading"> our <span>services</span> </h1> 
<div id="body">
<div class="wrapper"> 
<div class="card"> 
<img src="imges/buy.jpg" alt=""> 
<div class="info">
<h3>buying home</h3> 
<p>customer can purchase any avalible house to purchase</p> 
<a href="vewdeatils1.php" class="btn">learn more</a> </div> </div>

<div class="card"> 
<img src="imges/rent.jpg" alt=""> 
<div class="info">
<h3>renting home</h3> 
<p>customer can rent any avalible house/apartement to purchase</p> 
<a href="viewdeatils.php" class="btn">learn more</a> </div>  </div>

<div class="card"> 
<img src="imges/sell.jpg" alt=""> 
<div class="info">
<h3>selling home</h3> 
<p> owner of house can use ad and information and sell there house and share </p> 
<a href="sellad.php" class="btn">learn more</a> </div> </div></div>

</div>

<h1 class="heading"><span>New features</span> </h1> 
<div id="body">
<div class="wrapper"> 
<div class="card"> 
<img src="imges/photo_2022-07-24_16-44-06.jpg" alt=""> 
<div class="info">
<h5>$25,000/mo</h3> <a href="#" class="fas fa-heart"></a>
<a href="#" class="fas fa-envelope"></a> <a href="register.php" class="fas fa-phone"></a> 
<h5>modern apartments</h5> <p>bole, addisabeba, ethiopia- 400/104</p>
<h5><i class="fas fa-expand"></i> 3500 sqft </h5>
<h5> <i class="fas fa-bed"></i> 1 beds </h5>
<h5> <i class="fas fa-bath"></i> 1 baths </h5> 
<a href="register.php" class="btn">RENT NOW</a> </div> </div>


<div class="card"> 
<img src="imges/photo_2022-07-24_16-43-19.jpg" alt=""> 
<div class="info">
<h5>$25,000/mo</h3> <a href="#" class="fas fa-heart"></a>
<a href="#" class="fas fa-envelope"></a> <a href="register.php" class="fas fa-phone"></a> 
<h5>modern apartments</h5> <p>bolebulbula, addisabeba, ethiopia- 400/104</p>
<h5><i class="fas fa-expand"></i> 3500 sqft </h5>
<h5> <i class="fas fa-bed"></i> 1 beds </h5>
<h5> <i class="fas fa-bath"></i> 1 baths </h5> 
<a href="register.php" class="btn">RENT NOW</a> </div> </div> </div></div>

<div id="body1">
<div class="wrapper1"> 
<div class="card1"> 
<img src="imges/photo_2022-07-24_16-45-55.jpg" alt=""> 
<div class="info1">
<h5>$22M</h3> <a href="#" class="fas fa-heart"></a>
<a href="#" class="fas fa-envelope"></a> <a href="register.php" class="fas fa-phone"></a> 
<h5>modern house</h5> <p>lebu, addisabeba, ethiopia- 400/104</p>
<h5><i class="fas fa-expand"></i> 3500 sqft </h5>
<h5> <i class="fas fa-bed"></i> 4 beds </h5>
<h5> <i class="fas fa-bath"></i> 2 baths </h5> 
<a href="register.php" class="btn">BUY NOW</a> </div> </div>



<div class="card1"> 
<img src="imges/photo_2022-07-24_16-46-00.jpg" alt=""> 
<div class="info1">
<h5>$25M</h3> <a href="#" class="fas fa-heart"></a>
<a href="#" class="fas fa-envelope"></a> <a href="register.php" class="fas fa-phone"></a> 
<h5>modern house</h5> <p>bolebulbula, addisabeba, ethiopia- 400/104</p>
<h5><i class="fas fa-expand"></i> 3500 sqft </h5>
<h5> <i class="fas fa-bed"></i> 3 beds </h5>
<h5> <i class="fas fa-bath"></i> 2 baths </h5> 
<a href="register.php" class="btn">BUY NOW</a> </div> </div> </div></div>




<section class="footer"> <div class="footer-container"> 
<div class="box-container"> 
<div class="box"> 
<h3>branch location</h3> 
<a href="#">bole</a>
<a href="#">bole bulebula</a> 
<a href="#">cmc</a> 
<a href="#">lebu</a> 
<a href="#">cemet </a> </div> 
<div class="box"> <h3>quick links</h3> 
<a href="#">home</a> 
<a href="#card">services</a> 
<a href="#heading">featured</a> 
<a href="contact us.php">contact</a> </div> 
<div class="box"> <h3>extra links</h3> 
<a href="loginagent.php">agentslogin</a> 
<a href="#">my favorite</a> 
<a href="#">my list</a> </div>
<div class="box"> <h3>follow us</h3> 
<a href="#">facebook</a> <a href="#">twitter</a>
<a href="#">instagram</a> <a href="#">linkedin</a> </div> </div> 
<div class="credit">created by <span> selam girmay </span> | all rights reserved!
 </div> </div> </section> 

</body>
</html>