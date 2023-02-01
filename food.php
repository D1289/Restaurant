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
      <img src="image/6.jpg" alt="Chicago" width="1500" height="400">
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
<h1 id=na> Foods Area!</h1>
<div class="container-fluid">
        <div class="row">
        <?php
        
        $fit = "SELECT id, title, image, description,price FROM car";
        $resultset = mysqli_query($con, $fit) or die("database error:". mysqli_error($con));			
        while( $row = mysqli_fetch_assoc($resultset) ) {
        ?>
            <div class="col-md-4 mt-4">
              <div class="card ">
                    <img class="card-img-top" src="image/<?php echo $row['image'];?>" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <buton class="btn_booking btn btn-Info btn-md"><?php echo$row['price']; ?></button>
                    <buton onclick="buynow('<?php echo $row['id']?>')"  class="btn_booking btn btn-danger btn-md">BuyNow</button>
                    
              </div>
             
           </div>
        </div>
        <?php } ?>
      </div>
    </div>
<?php include 'footer.php';?>
<script>
  function buynow(id){
      postloginurl = "";
      if ($("#accountblock"). css('display') == 'none') {
        postloginurl = "buynow.php?id=" + id;
        $('#modalLRForm').modal('show');
      } else {
        window.location="buyNow.php?id=" + id;
      }
    } 
</script>
    

</body>
</html>