<?php include('php file/connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Airs Arts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
      <form action="" class="sear" method="post">
        <input class="searc" type="text" name="search" placeholder="SEARCH">
        <input type="submit" name="submit" class="search">
         <div class="buts">
          <a href="login.php">Login</a> / <a href="register.php">Signup</a> <span class="con">0404508274</span>

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
  <div class="containers">
    <div class="login">
      <div class="logins">
        <h2>Login</h2>
        <?php include('php file/errors.php')?>
        <form class="logns" action="login.php" method="post">
          <input type="text" name="username" placeholder="username" required>
          <input type="password" name="password" placeholder="pasword" required>
          <input type="submit" name="login" value="Log In">
        </form>
        <a href="forget.php" class="forgot">Forgot Password?</a>
      </div>
    </div>
  </div> 
</article>

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