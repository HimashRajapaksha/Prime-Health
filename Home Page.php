<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">

    <style>
      body {
        background-image: url('img/hombg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
      }
    </style>

</head>
<body style = "margin:0">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<!-- slideshow -->

<div class="slideshow-container" style="margin-top: 70px; margin-bottom: 100px;">
    <!-- Slides -->
    <div class="slide">
      <img src="img/slideshow1.jpg" alt="Slide 1">
    </div>

    <div class="slide">
      <img src="img/slideshow2.jpg" alt="Slide 2">
    </div>

    <div class="slide">
      <img src="img/slideshow3.jpg" alt="Slide 3">
    </div>

    <!-- Navigation dots -->
    <div style="text-align: center;">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>

  <script src="js/homepage.js"></script>

<!-- slideshow end -->

<!-- area 01 -->
<div class="container area1body">
    <div class="content">
        <h2 style="font-size: 30pt;">We're Here To Assist You With Exploring Protection</h2>
        <p style="font-size: 25px;">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>

        <h3 style="font-size: 29pt;">Flexible Insurance Plans</h3>
        <p style="font-size: 18px;">Money Back Guarantee Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>

    </div>
</div>
<!-- area 01 end -->

<hr>

<!-- area 02 -->
<div>
    <h2 class="head2">We Provide professional Insurance Services</h2>
</div>
<div class="inscard-container insbody">
    <div class="inscard">
      <div class="icon">
        <img src="logo/insiconfam.png" alt="Icon">
      </div>
      <h2>Life Insurance</h2>
      <p>Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
    </div>

    <div class="inscard">
      <div class="icon">
        <img src="logo/insiconlife.png" alt="Icon">
      </div>
      <h2>Health Insurance</h2>
      <p>Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
    </div>

    <div class="inscard">
      <div class="icon">
        <img src="logo/insiconbusiness.png" alt="Icon">
      </div>
      <h2>Business Insurance</h2>
      <p>Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
    </div>
</div>
<!-- area 02 end -->

<hr>

<!-- area 03 -->
<div>
    <h2 class="head2"> Meet Our Professional Team Members</h2>
</div>
<table class="profiletable">
    <tr class="profilebody">
        <td>
            <div class="profcard">
                <img src="img/profile01.jpg" alt="John" style="width:100%;height: 300px;">
                <h1>John Wick</h1>
                <p class="title">CEO</p>
                <p>Moratuwa University</p>
            </div>
        </td>

        <td>
            <div class="profcard">
                <img src="img/profile02.jpg" alt="John" style="width:100%;height: 300px;">
                <h1>James Bond</h1>
                <p class="title">Managing Director</p>
                <p>SLIIT University</p>
            </div>
        </td>

        <td>
            <div class="profcard">
                <img src="img/profile03.jpg" alt="John" style="width:100%;height: 300px;">
                <h1>Amber Hard</h1>
                <p class="title">System Administrator</p>
                <p>Harvard University</p>
            </div>
        </td>

        <td>
            <div class="profcard">
                <img src="img/profile04.jpg" alt="John" style="width:100%;height: 300px;">
                <h1>Mia Malkova</h1>
                <p class="title">Financial Head</p>
                <p>Oxford University</p>
            </div>
        </td>
        
        </div>
    </tr>
</table>
    
<!-- area 03 end -->

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->


</body>
</html>