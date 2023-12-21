<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/aboutus.css">
	 <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
	<script src="aboutus.js"></script>
  </head>
  
  <body>
<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->
<div class="about">
    <!--image slider start-->
	<div class="centerContent">
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
		
        <!--slide images start-->
        <div class="slide first">
		<label for="radio1" class="slide-image">
          <img src="img/1.jpg" alt="">
		  <div class="content">
          <h2>About Us</h2>
          <p>Delivering a professionaal client experiance and performing with honesty,integrity,and transparancy are priorities for Prime Health Ltd.<br><br>
             Effective complaint mangement enables us to clarly comprehend issues stated by our customers,enhance the customer experiance as we concentrate on achiving a new level of client centricity.
          </p>
        </div>
		</label>
        </div>
        <div class="slide">
		<label for="radio2" class="slide-image">
          <img src="img/2.jpg" alt="">
		  <div class="content">
          <h2>Our Vision</h2>
          <menu>
		    <li> To be the first choice insurer for customers.</li>
            <li>  To be the preferred employer in the insurance industry.</li>
            <li> To be the number one insurer for creating shareholder value.</li>
		  </menu>
        </div>
		</label>
        </div>
        <div class="slide">
		<label for="radio3" class="slide-image">
          <img src="img/3.jpg" alt="">
		  <div class="content">
          <h2>Our Mission</h2>
          <p>As a responsible, customer-focused market leader, we will strive to understand the insurance needs of our customers and translate this into affordable products that deliver value for money</p>
        </div>
		</label>
        </div>
        <div class="slide">
		<label for="radio4" class="slide-image">
          <img src="img/4.jpg" alt="">
		  <div class="content">
          <h2>Guiding Principals</h2>
          <p>The customer is our most valuable asset, and everything we do is aimed at either winning a customer or retaining a customer</p>
        </div>
		</label>
        </div>
        <!--slide images end-->
		
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
	  
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
	<!--image slider end-->
	 </div>
	
	 <hr class="vertical-line">

 <div class="box">
 <br>
  <center>Our Strengths<br></center>
  <menu>
   <li> Global leader in Property and Casualty insurance</li><br>
   <li> Among the top 5 globally for Life/Health insurance</li><br>
   <li> Top 5 asset managers worldwide</li><br>
   <li> Leading provider of credit insurance globally</li><br>
   <li>Leading provider of aid and health insurance world-wide</li><br>
   <li> One of the leading global corporate insurers</li>
   </menu>
   </div>
<div class="director">
 <h3>Board of Directors</h3>
 </div>
<div class="image-container">

  <div class="image">
 <img src="img/image1.jpg" alt="board of derectors" id="image1" width ="120" height="120" >
 <div class="image-description">Ms.Andria</div>
 </div>
 <div class="image">
 <img src="img/image2.jpeg" alt="board of derectors" id="image2" width ="120" height="120" >
 <div class="image-description">Ms.Gunewardena</div>
 </div>
 <div class="image">
 <img src="img/image3.jpg" alt="board of derectors" id="image3" width ="120" height="120" >
 <div class="image-description">Mr.Smith</div>
 </div>
 <div class="image">
 <img src="img/image4.jpg" alt="board of derectors" id="image4" width ="120" height="120" >
 <div class="image-description">Mr.Devraj</div>
 </div>
  <div class="image">
 <img src="img/image5.jpeg" alt="board of derectors" id="image5" width ="120" height="120" >
 <div class="img-description">Mr.kevin</div>
 </div>
</div>
</div>
<div class="foot">
  <br><br><br>
<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->
</div>
  </body>
</html>