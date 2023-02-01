<?php 

if(!isset($_SESSION)){
    session_start();
}

   $host = 'localhost';
   $user = 'root';
   $password = '';
   $db="res";
   $con=mysqli_connect($host,$user,$password,"$db");
   if (!$con){
       die("sorry,server could not found");
   }



?>