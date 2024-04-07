<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Gateway</title>
  <link rel="stylesheet" href="payment.css">

<script>
function cal()
{

var n=parseInt(document.getElementById("num").value);
var p=parseInt(document.getElementById("price").value);
var t=n*p;

//alert("n=" + n + "\np=" +p) ;
document.getElementById("total").value=t;

}

</script>





</head>
<body>
<?php

    $pname=$_GET["pname"];
    $price=$_GET["price"];
    $days=$_GET["days"];
?>







  <div class="payment-container">
  <h2>Enter Payment Information</h2>
    <form class="payment-form" action="savebooking.php" method="post">
        <label for="expiry">Name of selected package:</label>
      <input type="text" id="expiry" name="Package_name" value="<?php echo $pname; ?>" placeholder="Enter package name" required>

      <label for="expiry">Price of package:</label>
      <input type="text" id="price" name="price" value="<?php echo $price; ?>"  placeholder="Enter no. price of package" required>

      
      <label for="expiry">Price for Days:</label>
      <input type="text" id="days" name="packages_days" value="<?php echo $days; ?>"  placeholder="Enter days of package" required>

      
      <label for="card-number">No. of members:</label>
      <input type="text" id="num"  name="no_of_members"onBlur="cal()" name="no_of_members" placeholder="Enter No. of members" required  >
      
      <label for="expiry">Total :</label>
      <input type="text" id="total" name="Total" placeholder="" required>

      <label for="expiry">Customer Name :</label>
      <input type="text" id="cname" name="custname" placeholder="Enter your name" required>

      <label for="expiry">Mobile :</label>
      <input type="text" id="mobile" name="mobile" placeholder="Enter mobile no." required>

      <input type="submit" value="Book Now">
    </form>
  </div>
</body>
</html>