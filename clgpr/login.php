<?php


$regno = $_POST['username'];
$password = $_POST['password'];




//database connection
   $conn = new mysqli('localhost','root','','database123');
   if ($conn->connect_error) {
      die('Connection failed:' .$conn->connect_error);
   }else{

          $stmt = $conn->prepare("SELECT * from registration where regno = ?");
          $stmt->bind_param("i", $regno);
          $stmt->execute();
          $stmt_result= $stmt->get_result();

         if ($stmt_result->num_rows > 0)
          {
            $data = $stmt_result->fetch_assoc();
         }
         if($data['password'] === $password)  
         {
            header('location:home.php');
         }     
}
      
          if($data['password'] !== $password)
           {
            echo '<script>alert("INvalid email or password")</script>';            
          }
       

?>
<h1>Try to login again</h1>
<a href = "login.html">login again</a>


