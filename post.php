<?php
include('php file/connection.php');

$query ="SELECT * FROM category";
$result = mysqli_query($conn,$query);
if(isset($_POST['add'])){

  $name = $_POST['name'];
  $artist = $_POST['artist'];
  $price = $_POST['price'];
  $height = $_POST['height'];
  $width = $_POST['width'];
  $desc =  $_POST['desc'];
  $image = $_FILES['image']['name'];
  $target = "image/".basename($image);
  $status = $_POST['status'];
  $category = $_POST['category'];

  $query = "INSERT INTO product (Name,artist,price,height,width,description,image,status,category_id) VALUES ('$name','$artist','$price','$height','$width','$desc','$image','$status','$category') ";


  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
   mysqli_query($conn,$query);
  }
   
  $current_url = (empty($_SERVER['HTTPS']) ? "http://" : "https://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header ('Location: ' . $current_url);
  exit ();



}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Airs Arts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/team.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<section style="padding-top: 15px;">
  <div class="container">
  <div class="tops">
    <div class="brand">
      <a href="index.php"><h2>Airs Arts</h2></a>
    </div>
    <div class="brands">
      <form class="sear">
        <input class="searc" type="text" name="search" placeholder="SEARCH">
        <input type="submit" name="submit" class="search">
         <div class="buts">
          <?php if(isset($_SESSION['username'])):?>
            <a href="php file/logout.php">Logout</a> / <a href="profile.php">profile</a>/ <a href="post.php">Sell your product</a> 
            <?php else :?>
              <a href="login.php">Login</a> / <a href="register.php">Signup</a> <span class="con">0404508274</span>
            <?php endif ?>

        </div>
      </form>
     
    </div>
  </div>
  </div>
</section>

<section class="nav-bar">
  <div class="nav-container">
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="art.php">Fine Art</a>
        </li>
        <li>
          <a href="collection.php">Collectibles</a>
        </li>
        <li>
          <a href="decor.php">Home & Decor</a>
        </li>
        <li>
          <a href="about.php">About</a>
        </li>
        <li><a href="cart.php">Cart <i class="fa fa-cart-plus"></i></a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</section>

<article>
    <div class="login">
      <div class="logins">
        <h2>Sell your prodcut</h2>
        <form class="#" action="#" method="post" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="Name of your prodcut" required>
          <input type="text" name="artist" placeholder="Name of the artist" >
          <input type="number" name="price" placeholder="Price of your product" >
          <input type="number" name="height" placeholder="height" required>
          <input type="number" name="width" placeholder="width" required>
          <select name="category" required>
            <?php while($row = mysqli_fetch_assoc($result)):?>
              <option value="<?php echo $row['category_id']?>"><?php echo $row['category'];?></option>

            <?php endwhile?>
            
          </select>
          <textarea style="width: 100%;" name="desc" placeholder="Enter the description" rows="3"></textarea>
          <input type="file" name="image" placeholder="Place in your image" required>
          <input type="hidden" name="status" value="unsold">
          <input type="submit" name="add" value="Add">
        </form>
      </div>
    </div>
</article>





<footer>
  <div class="containers">
    <p class="foter">&copy; Copyright 2021. All rights reserved | Designed by Airs Arts</p>
  </div>
</footer>




 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  (function($) { 
  $(function() { 
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); 
})(jQuery);
</script>

<script>
        var slideIndex = 0;
        showSlide();

        function showSlide() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var pointss = document.getElementsByClassName("points");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < pointss.length; i++) {
            pointss[i].className = pointss[i].className.replace(" actives", "");
          }
          slides[slideIndex-1].style.display = "block";
          pointss[slideIndex-1].className += " actives";
          setTimeout(showSlide, 4000);
        }
    </script>


</body>
</html>