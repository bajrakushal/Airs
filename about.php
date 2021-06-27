<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Airs Arts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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


<section style="padding: 50px 50px; height: 457px;">
  <div class="containers">
    <div class="ars">
      <h2>- About Us -</h2>
      <p>Born out of passion, Airs Arts is a labour of love and commitment. In the age of mass-manufacturing, it is an endeavour to celebrate uniqueness. In a world of compromised quality, it is an effort to showcase pieces that last a lifetime.  <br> Air Arts is a one-stop destination where you can discover and buy the most exquisite pieces of fine art, collectibles, furniture and home décor from India and around the world. We curate artistic luxury for those who appreciate quality, class, artistry and craftsmanship. Each piece in our collection could become part of your family heirloom. We understand that trust is non-negotiable in the world of luxury, and we’re committed to building confidence with our clients. We don’t just help you buy; we help you learn about different artforms, discover the best creators, and develop a passion for all things beautiful.<br></p>
    </div>
  </div>
  <section class="team">
    <div class="container">
        <h1>Our Team</h1>
        <div class="row">
            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="team1.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fab fa-instagram"></i></li></a>

                    </ul>
                
                <h2>BIJAY</h2>
                <H3>Technical supporter</H3>
            </div>
            </div>
            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="team2.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fab fa-facebook"></i></li></li></a>
                        <a href="#"><li><i class="fab fa-instagram"></i></li></li></a>

                    </ul>
                </div>
                <h2>ISHAN</h2>
                <H3>Director</H3>
            </div>
            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="team3.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fab fa-facebook"></i></li></li></a>
                        <a href="#"><li><i class="fab fa-instagram"></i></li></li></a>

                    </ul>
                </div>
                <h2>ANISHA</h2>
                <H3>System admin</H3>
            </div>
            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="team4.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fab fa-facebook"></i></li></li></a>
                        <a href="#"><li><i class="fab fa-instagram"></i></li></li></a>

                    </ul>
                </div>
                <h2>SUMAN</h2>
                <H3>Programmer</H3>
            </div>
            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="team5.jpg" class="img-responsive">
                    <ul>
                        <a href="#"><li><i class="fab fa-facebook"></i></li></li></a>
                        <a href="#"><li><i class="fab fa-instagram"></i></li></li></a>

                    </ul>
                </div>
                <h2>KSHITIZ</h2>
                <H3>Designer</H3>
            </div>
    </div>


    
  </div>
</section>


<footer>
  <div class="containers">
    <p class="foter">&copy; Copyright 2021. All rights reserved | Design by Airs Arts</p>
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


</body>
</html>