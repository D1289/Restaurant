<?php include 'database.php';
     $email=$_POST['email'];
     $password=md5($_POST['password']);   
     $response=[];
     $query = "SELECT email,name FROM register WHERE email='$email' AND password='$password'";  
     $result = mysqli_query($con, $query);
     $count=mysqli_num_rows($result);  
     if($count == 1){  
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
          $response['status']='success'; 
          $response['userdata']=$row;
          $_SESSION['login'] = $response['userdata'];  
     }  
     else  
     {  
          $response['status']='failure';
     }  
     echo json_encode($response);
?>