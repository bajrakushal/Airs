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
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/team.css">
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
<section style="padding: 30px 0;">
  <div class="container">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.1029439357!2d150.65178238957765!3d-33.84735666333791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2snp!4v1619755967111!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<section style="background-color: #F5F5F5; padding: 25px 0;">
  <div class="containers">
    <div class="contacts">
      <div class="contactss">
        <h2>Get In Touch</h2>
              <div class="forms">
                  <div class="contact">
                      <form action="" method="post" enctype="multipart/form-data" style="background: transparent !important;">
                      <input type="hidden" name="submitted_by" value=">?php echo $_SESSION['user_id']; ?>">
                      <div class="formss">
                          <label class="label">Name <span>*</span></label>
                          <input type="text" name="name" required="">
                      </div>
                      <div class="formss">
                          <label class="label">Email <span>*</span></label>
                          <input type="email" name="email" required="">
                      </div>
                      <div class="formss">
                          <label class="label">Phone Number</label>
                          <input type="number" name="phone" required="">
                      </div>
                      <div class="formss">
                          <label class="label">Message <span>*</span></label>
                          <textarea type="text" name="message" class="text" rows="5" required="" style="margin-bottom: 10px;"></textarea>
                      </div>
             
                      <div class="formss">
                          <input type="submit" class="bns" value="Submit" name="submit">
                      </div>
                      </form>
                  </div>
              </div>
      </div>
      <div class="contactss1">
        <h2>Address</h2>
        <div class="contacts1">
          <p><SPAN>Phone:</SPAN> +61 0404508274</p>
          <p><SPAN>Address:</SPAN> sydney, Australia</p>
          <p><SPAN>Email:</SPAN> thapa.ishan123@gmail.com</p>
        </div>
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