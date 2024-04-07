<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        .mycode{
            color:orange;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size:30px;
            text-align:center;
            vertical-align:middle;
        }
</style>
    <?php
    
    $username=$_POST['username'];
    $password=$_POST['password1'];
    $fullname=$_POST['f-name'];
    $address=$_POST['add'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];
    $age=$_POST['age'];

    //database connection
    $conn = new mysqli('localhost','root','' ,'tourismwebsite');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(username,password,fullname,address,email,gender,dob,city,age)values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssi",$username,$password,$fullname,$address,$email,$gender,$dob,$city,$age);
    $stmt->execute();
   
    echo"<p class=\"mycode\">Registered Successfully...</p>";
   
    $stmt->close();
    $conn->close();
}

    ?>
</body>
</html>