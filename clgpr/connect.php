<?php


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$regno = $_POST['regno'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
//$role = $_POST['role'];
//database connection
   

   $conn = new mysqli('localhost','root','','database123');
   if ($conn->connect_error) {
   	die('Connection failed:' .$conn->connect_error);
   }
  


   else  {
   	 


       $stmt =$conn->prepare("INSERT INTO registration(firstName, lastName, regno, email, password, gender) VALUES(?, ?, ?, ?, ?, ?) ");
   	$stmt->bind_param("ssisss",$firstName, $lastName, $regno, $email, $password, $gender);
   	$stmt->execute();
   	echo '<script>alert("Registration Successfully")</script>';
   	$stmt->close();
   	$conn->close();
    
   }
   
  
?>
<?php  header('location:login.html')?>










<!DOCTYPE html>
<html>
<head>
   <title>LOG IN</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
   body{
      background-image:  url(bg.jpg);
      background-size: cover;
      background-position: right;
      background-attachment: fixed;

   }
   #ui{
      background-color: #333;
      padding: 45px;
      margin-top: 60px;
      border-radius: 15px;
      opacity: 0.8;
      }

   #ui label,h1{
      color: #fff;

   }  
</style>

</head>
<body>
  <div class="container">
   
   <div class="row">
      
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
         <div id="ui">
            
             <h1 class="text-center">LOG IN</h1>
            <form class="form-group text-center" action="login.php" method="post">
               
               <div class="row ">
                  <div class="col-lg-6">
                     
               <label>REGISTER NO:</label>
               <input type="text" name="username" class="form-control" placeholder="username....." >
                  <br>
              </div>
               
               <div class="row">
                  <div class="col-lg-6">
                     <label>Password:</label>
                     <input type="password" name="password" class="form-control" placeholder="Enter  new password......." required>
                  </div>
              <br>
              
                <input type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-lg"  >
                
              <br>
                <a href="index.html">Create new account?</a>
                              
          </form>
         </div>

      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-3"></div>
      <div class="col-lg-3"></div>
      <div class="col-lg-3"></div>
      <div class="col-lg-3"></div>

   </div>
   
  </div>
</body>
</html>