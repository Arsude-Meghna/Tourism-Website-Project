<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .mycss{
            color:orange;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size:30px;
            text-align:center;   
        }
    </style>
    <?php
     error_reporting(0);
    //$id=$_POST['id'];
    $package_name=$_POST['Package_name'];
    $price=$_POST['price'];
    $packages_days=$_POST["packages_days"];
    $no_of_members=$_POST['no_of_members'];
    $Total=$_POST['Total'];
    $custname=$_POST['custname'];
    $mobile=$_POST['mobile'];
   

    //database connection
    $conn = new mysqli('localhost','root','' ,'tourismwebsite');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into toursbooking(Package_name,price,packages_days,no_of_members,Total,custname,mobile) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$package_name,$price,$packages_days,$no_of_members,$Total,$custname,$mobile);
    $stmt->execute();
    echo "<p class=\"mycss\">Payment details saved...</p>";
    $stmt->close();
    $conn->close();
}

    ?>
</body>
</html>