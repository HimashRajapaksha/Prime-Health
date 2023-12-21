<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Claims</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/claim.css">
	
    <style>
    body{
                background-image: url('img/claim_img%202.jpg');
                background-repeat:no-repeat;
                background-size: cover;
                background-attachment: fixed; 
                background-size: 100% 100%;
            }
            
    
    </style>
</head>

    <!-- Start Make A Claim-->
<body style = "margin:0;">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<br><br><br><br>
  <div class="container">
      
    <h1>Make a Claim</h1>
    
        <div class="box">
        <form id="claim_form" method="post" action="claim_form.php" enctype="multipart/form-data">
        
        
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Enter Your Name" name="name" required
         data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"        
         />
      </div>
        
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" placeholder="Enter Your Address" name="address" required
          data-parsley-trigger="keyup" class="form-control"      
          />
      </div>
        
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" placeholder="Enter your description" name="description" required
           data-parsley-trigger="keyup" class="form-control" > </textarea>
      </div>
        
        <div class="form-group">
        <label for="image">Upload photo</label>
        <input type="file" id="pic" name="pic"  data-parsley-trigger="keyup" class="
        form-control" />
      </div>
        
        <div class="form-group">
        <button type="submit" id="submit" name="submit" value="Submit" class="btn btn-success"
        >Submit</button>  
        </div>    
        
      
    </form>
  </div>
</div>
    <!-- End Make A Claim-->

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->
    
</body>


</html>