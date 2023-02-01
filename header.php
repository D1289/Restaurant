<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a class="navbar-brand text-custom" href="#">GoodFoodGoodHealth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link item active" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link  item active" href="about.php">About Us<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link  item active" href="cata.php">Catgories<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link  item active" href="food.php">Food<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn- text-white" data-toggle="modal" data-target="#exampleModal">
        Contact
        </button>
        </li>
        
        
        <ul class="nav navbar-nav navbar-right " id="loginblock" style="<?php if (isset($_SESSION['login'])) {echo 'display:none';} ?>">
    <li><button class="btn btn-outline-success" data-toggle="modal" data-target="#modalLRForm">Login</button></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right text-warning" id="accountblock" style="<?php if (!isset($_SESSION['login'])) {echo 'display:none';} ?>">
      <li id="welcomeuser"><?php if (isset($_SESSION['login'])) echo "Hi, ".$_SESSION['login']['name'];?></li>
      <li><a class="btn btn-outline-danger" href="logout.php">Logout</a></li>
  </ul>
</div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
        
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p id="mk">You can contact us directly by calling to this number +91 8609407872. Check the bottom Footer Section of the website for more info.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>