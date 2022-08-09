<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<form action="storenonacticpay.php" method="post">
<div class="padding">
<div class="row">
 <div class="container d-flex justify-content-center" style="margin-top:10px;">
 <div class="col=md-6 col-sm-8">
 <div class="card">
 <div class="card-header" style="margin-top:1px;">
 <div class="row">
 <div class="col-md-6">
 <span>CREDIT/DEBIT CARD PAYMENT</span>
 
  </div>
 <div class="col-md-6 text-right" style="margin-top:-5px;">
 <img src="https://img.icons8.com/color/visa.png">
 <img src="https://img.icons8.com/color/mastercard.png">
 <img src="https://img.icons8.com/color/amex.png">
 </div>

 
 </div>
 
 </div>
 <div class="card-body" style="height:350px">
 <div class="form-group">
 <label for="cc-number" class="control-label">CARD-NUMBER</label>
 <input type="number" id="cc-number" name="cardnumber"  placeholder="... ... ..." >
 </div>
 <div class="row">
 <div class="col-md-6">
 <div class="form-group">
 <label for="cc-exp" class="control-label">CARD-Expiry</label>
 <input type="tel" id="cc-exp" class="input-lg form-control cc-number" autocomplete="cc-exp" placeholder="..   /   ..    / ..." name="">
 </div>
 
 </div>
 <div class="col-md-6">
 <div class="form-group">
 <label for="cc-cvc" class="control-label">CARD-CVC</label>
 <input type="tel" id="cc-cvc" class="input-lg form-control cc-number" autocomplete="off" placeholder="... ... ..." name=""><br>
 </div>
 
 </div>
 </div>
 <div class="form-group">
 <center><input type="submit" name="submit" value="Pay" id="submit"></center><br>
 <center><input type="submit" name="delete" value="Cancel Pay" id="submit"></center><br>
 <center><input type="submit" name="home" value="home" id="submit"></center>
 
 
 <div class="form-group">
 </div>
 </div>
 </div>
 </div>
</form>

</body>
</html>