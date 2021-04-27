<?php


   

   $conn = new mysqli('localhost','root','','database123');
  if (!$conn) {
	echo "Connection Failed!";
	exit();
}
else
{
	echo "sucess";
}
  
