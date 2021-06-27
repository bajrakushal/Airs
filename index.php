<?php

  include('php file/connection.php');

  $que = "SELECT * FROM product LIMIT 4";
  $res = mysqli_query($conn,$que);
 
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

<section>
   <div class="containerss">
        <section class="slides" style="overflow:hidden">;
            <div class="slideshow-container">
                <div class="mySlides fades">
                    <img src="image/slider.jpg" style="width:100%; height: auto;" alt="Slide show">

                </div>

                <div class="mySlides fades">
                    <img src="image/slider1.jpg" style="width:100%; height: auto;" alt="Slide show">
                </div>
            </div>

            <div class="pointsss" style="text-align:center">
                <span class="points"></span>
                <span class="points"></span>
            </div>
        </section>
    </div>
</section>



<section style="padding: 50px 50px;">
  <div class="containers">
    <div class="ab">
      <h2>Airs Arts</h2>
      <p>Airs Arts curates the most exquisite pieces of artistic luxury for those who appreciate quality, class and craftsmanship. We know that shopping online for unique pieces requires trust and comfort. And that’s precisely what we build with our clients.</p>
      <button class="buton">Learn More</button>
    </div>
  </div>
</section>


<section style="padding-bottom: 50px; ">
  <div class="containers">
    <div class="discover">
      <h2>- Discover Our World -</h2>
    </div>
    <div class="discovers">
      <div class="discov">
        <a href="art.php" class="imgs">
          <img src="image/decor.png" alt="decor" style="width: 100%; height: auto;">
          <hr class="hr">
          <h2>Fine Art</h2>
        </a>
      </div>
       <div class="discov">
        <a href="collection.php" class="imgs">
          <img src="image/decor3.png" alt="decor" style="width: 100%; height: auto;">
          <hr class="hr">
          <h2>Collectibles</h2>
        </a>
      </div>
       <div class="discov">
        <a href="decor.php" class="imgs">
          <img src="image/decor2.png" alt="decor" style="width: 100%; height: auto;">
          <hr class="hr">
          <h2>Home & Decor</h2>
        </a>
      </div>
    </div>
  </div>
</section>


<section style="padding-bottom: 50px; ">
  <div class="containers">
    <div class="discover">
      <h2>- Editor Pick -</h2>
    </div>
       <div class="arts">
        <?php
            while($row = mysqli_fetch_assoc($res)): 
          ?>
         <div class="discov">
          <a href="#" class="imgs">
            <img src="<?php echo "image/".$row['image'];?>" alt="art" class="ar" style="width: 100%; height: auto;">
            <h2 class="title"><?php echo $row['Name'];?></h2>
            <div class="flex">
              <div class="flex1">
                <p><?php echo $row['description'];?></p>
              </div>
              <div class="flex2">
                <p><?php echo $row['artist']?></p>
              </div>
            </div>
            <div class="flex">
              <div class="flex1">
                <p><?php echo $row['height'];?> X  <?php echo $row['width'];?> inches</p>
              </div>
              <div class="flex2">
                <p>$<?php echo $row['price'];?></p>
              </div>
            </div>
             <button class="butons" onclick="document.location='cart.php?id=<?php echo $row['product_id']?>'">Buy Now</button>
          </a>
        </div>
      <?php endwhile?>
    </div>
  </div>
</section>




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