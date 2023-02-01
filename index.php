<?php require_once'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</section>

<h1> Resturant Powered By Good Food</h1>
<p>Describing food is not as easy as it would seem.
How many ways can you say something was really tasty? 
  Not enough to keep you interested in what you are writing. 
  That is why we have to borrow words from other areas to describe the food and the effect it has on us.

You can compare a dish to a picture, a sports game, a musical performance or give it personality.
Describe its sunny or somber mood, shyness, assertiveness, or contradiction of flavors.
Knowing the words for describing tastes and flavors will help you to find the right adjective in other areas.</p>
<div class="col">
		        	<img height="450"top="50" width="200" style="object-fit: contain;" src="image/17964.jpg" alt="">
</div>
       
<div class="container-fluid">
  <div class="row">
  <?php 
           $sql="SELECT id,image,title,description FROM card";
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






 
<div class="conn">

<a href="cata.php" class="btn btn-danger">MORE FOOD>></a>
</div>



<section class="-md-4 mt-4 mb-4">
      <div class="card">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/3.jpg" alt="#"width="1500" height="400">
    </div>
  </div>
</div>
</section>



<section class="containner">
		<div class="row" style="padding-left: 50px; padding-right: 50px;">
			<div class="col s12 l4 center" style="padding: 50px 50px;">
				<i class="fas fa-cookie fa-5x" aria-hidden="true" ></i>
				<h5 class="header" >Variety of Dishes</h5>
			</div>
			<div class="col s12 l4 center" style="padding: 50px 50px;">
				<i class="fa fa-truck fa-5x" aria-hidden="true"></i>
				<h5 class="header" >Free Delivery</h5>
			</div>
			<div class="col s12 l4 center" style="padding: 50px 50px;">
				<i class="far fa-smile-beam fa-5x" ></i>
				<h5 class="header" >Excellent Quality</h5>
			</div>
		</div>
	</section>
  <?php include 'footer.php';?>
</body>
</html>