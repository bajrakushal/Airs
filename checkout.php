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
<section>
    <div class="containers">
        <div class="bookings">
          <div class="booking">
              <form class="booking1" name="myBook" action="confirm.html">
                <div class="booking3">
                  <div class="booking4">
                    <h2>User Information</h2>
                    <div style="padding: 0 30px; border-right: 1px dotted black;">
                      <input class="booking2" type="text" name="firstname"  placeholder="First Name" required>
                      <input class="booking2" type="text" name="lastname"  placeholder="Last Name" required>
                      <input class="booking2" type="email" name="email" placeholder="Email Address" required>
                      <input class="booking2" type="text" name="phone" placeholder="Phone Number" required>
                      <input class="booking2" type="text" name="postal"  placeholder="Postal Code" required>
                    </div>
                  </div>
                  <div class="booking5">
                    <h2>Guarantee / Payment Method</h2>
                    <div>
                      <div class="payment">
                        <div class="social_medias">
                          <div class="social_medias1"><a href="#"><i class="fa fa-cc-visa" style="color: navy;"></i></a></div>
                          <div class="social_medias1"><a href="#"><i class="fa fa-cc-amex" style="color: blue"></i></a></div>
                          <div class="social_medias1"><a href=""><i class="fa fa-cc-discover" style="color: orange;"></i></a></div>
                          <div class="social_medias1"><a href="#"><i class="fa fa-cc-mastercard" style="color: red;"></i></a></div>
                          <div class="social_medias1"><a href="#"><i class="fa fa-cc-jcb"></i></a></div>
                        </div>
                      </div>
                      <div class="below" style="padding: 0 30px;">
                        <input class="booking2" type="text" name="cardname" placeholder="Name on Card" >
                        <input class="booking2" type="text" name="cardnumber" placeholder="Card Number" >
                        <input class="booking2" type="text" name="valid" placeholder="MM/YY" >
                        <input class="booking2" type="text" name="zip" placeholder="Postal Code">
                        <input class="booking2" type="text" name="CVV" placeholder="CVV">
                        <input class="butonn" type="submit" name="submit" onclick="myFunction()" value="Pay Now">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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