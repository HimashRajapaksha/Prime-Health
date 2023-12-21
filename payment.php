<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/payment.css" type="text/css">

    
    <style>
      body {
        background-image: url('img/paymentbg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
        margin: 0;
      }
      </style>

  </head>
<body style ="margin:0;">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<div class="formhead" style="margin-top: 150px;">
  <h3>Make an easy payment using any AMEX / VISA / MASTER credit or debit card.</h3>
</div>

<form action = "payment_db.php" class="formbody" method="post" style="text-align: center;" id="form1">
  <div>
    <h3>Payment</h3>
    
    <label for="fname1">Accepted Cards</label>
    <img src="logo/card.jpg" width="300" height="60" alt="Accepted Cards">
    
    <label for="policy_no">Policy/ Proposal No.</label>
    <input type="text" id="policy_no" name="policy_no" placeholder="Enter the Policy or Proposal number" required>
    
    <label for="amount">Premium Amount</label>
    <input type="text" id="amount" name="amount" placeholder="Enter the Amount" required>
    
    <label for="contact_no">Contact Number</label>
    <input type="text" id="contact_no" name="contact_no" placeholder="Enter the contact no. 0XXXXXXXX" required>
    
    <div class="row">
      <div style="text-align: center;">
        <p>Please select your payment Mode</p>
        <div class="row">
          <select id="pay_mode" name="pay_mode" required>
          <option value="">Select</option>
          <option value="o" id="onetime">One Time</option>
          <option value="s" id="standingorder">Standing Order/ Recurring</option>
          </select>
        </div>
      </div>
    </div>
    <br><br>
    <label for="cardname">Name on Card</label>
    <input type="text" id="cardname" name="cardname" placeholder="Enter the Policy or Proposal number" required>

    <label for="cardnumber">Credit card number</label>
    <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444" required>

    <label for="expmonth">Exp Month/Exp Year</label>
    <input type="text" id="expmonth" name="expmonth" placeholder="11/24" required>

    <label for="cvv">CVV</label>
    <input type="text" id="cvv" name="cvv" placeholder="352" required>
    <input type="submit" value="Proceed" class = "btn">
  </div>
</form>



<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->

</body>
</html>
