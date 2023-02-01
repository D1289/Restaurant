<?php require_once'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'script.php';?>
</head>
<body>
<?php include 'header.php';?>
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
      <img src="image/2.jpg" alt="Chicago" width="1500" height="400">
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
</section>
<h1 id=na> Categories</h1>
<div class="container-fluid">
  <div class="row">
  <?php 
$sql="SELECT id,image,title,description FROM card1";
$results=mysqli_query($con,$sql) or die("Database error".mysqli_error($con));
while ($record=mysqli_fetch_array($results)){
?>
<div class="col-md-4 mt-4 mb-4">
<div class="card">
<img class="card-img-top" src="image/<?php echo $record['image'];?>" alt="Card image cap">
<div class="card-body">
<h5 class="card-title"><?php echo $record['title'];?></h5>
<p class="card-text"><?php echo $record['description'];?></p>
<a href="#" class="btn btn-primary">Explore Now!</a>
  </div>
</div>
</div>
<?php }?>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>