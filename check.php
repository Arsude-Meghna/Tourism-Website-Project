<style>
        .mycsscode{
            color:orange;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size:30px;
            text-align:center;
            vertical-align:middle;
        }
</style>
<?php
$username=$_POST["username"];
$password1=$_POST["password1"];
//echo "username=" .$username;
//echo " paassword=" .$password1;
//database connection
$conn = new mysqli('localhost','root','' ,'tourismwebsite');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt=$conn->prepare("select * from registration where username=? and password=?");
    $stmt->bind_param("ss",$username,$password1);
    $stmt->execute();
   // $result = $stmt->get_result();
    $stmt->store_result();


        
   // echo "<h1>" . $stmt->num_rows;
           if ($stmt->num_rows>0) 
              { 
                header("Location: Tours.html");
die();
                 //echo "<h1>Login Sucess : ";
              } 
              else{

                echo "<p class=\"mycsscode\">Login Failed..</p>";
              }
        // close the result. 
      
    $stmt->close();
    $conn->close();
}
?>
