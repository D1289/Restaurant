<?php include "database.php";
if(isset($_GET['id'])){
    $sql="SELECT * FROM car WHERE id=?";
    if($stmt=mysqli_prepare($con,$sql)){
        mysqli_stmt_bind_param($stmt,"i",$param_id);
        $param_id=trim($_GET["id"]);
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $title=$row["title"];
                $image=$row["image"];
                $price=$row["price"];
               
            }else{
                header("location: error.php");
                exit();
            }
        }else{
            echo "oops,Something went wrong";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
else{
    header("location: error.php");
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Item</title>
    <?php require_once "script.php"?>
    <style>
        body{
            background-color:white;
        }
        .wrapper{
            background-color:yellow;

        }
        .card{
          
            color:red;
        }
        </style>
</head>
<body>
    <?php include "header.php";?>
    <section class="md-5">
      <div class="card">
   <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    
    
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.jpg" alt="Los Angeles" width="1500" height="400">
      <div class="carousel-caption">
        <h3> Good Food Good health--The Quality Food!</h3>
        <h4>We deliver Quality. Try us and then buy us!</h4>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" alt="Chicago"width="1500" height="400">
      <div class="carousel-caption">
        <h3>Quality Food at Your Door!</h3>
        <h4>We deliver Quality And We're doing this for years!</h4> 
      </div> 
     
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
<div class="col">
		        	<img height="450"top="50" width="200" style="object-fit: contain;" src="image/17964.jpg" alt="">
</div>
</section>

      <div class="wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <h1 class="mt-3 mb-3">Buy Your Choice</h1>
                      <div class="card text-center">
                        <div class="form-group">
                      <label>Product Name</label>
                        <p><b><?php echo $row["title"];?></b></p>
                      </div>
                      <div class="form-group">
                      <label>Image</label>
                        <img src="image/<?php echo $row["image"];?>">
                      </div>
                      <div class="form-group">
                          <label>price</label>
                          <p><b><?php echo $row["price"];?></b></p>
                      </div>
                      
                      <a href="index.php" class="btn btn-secondary">Back</a>
                      <a href="payment.php" class="btn btn-danger">Confirm Buy</a>
                     
                    <button class="btn_booking btn btn-primary btn-md">Quantity
              <select name="Quantity" >
          <option value="1">1</optoin>
          <option value="2">2</optoin>
          <option value="3">3</optoin>
          <option value="4">4</optoin>
          <option value="5+">5+</optoin>
          <option value="5+">6+</optoin>
          <option value="5+">7+</optoin>
          <option value="5+">8+</optoin>
          <option value="5+">9+</optoin>
</select>
        </button>
        
  </div>
      </div>
</div>
                  </div>
              </div>
          </div>
      </div>



      <?php include "footer.php";?>
</body>
</html>
