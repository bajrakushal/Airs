<?php
include('php file/connection.php');
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE email='$username'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);

	if(isset($_POST['update'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
    	$email = mysqli_real_escape_string($conn, $_POST['email']);
    	$address = mysqli_real_escape_string($conn, $_POST['address']);
    	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
    	 $update = "UPDATE users
						SET name='$name', address='$address', contact='$contact'
						WHERE email = '$username'";
		 $res = mysqli_query($conn,$update);
		 if($res){
		 	$_SESSION['username'] = $email;
		 	$_SESSION['message'] ="updated successfully";
		 }

  
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
         <div class="buts">
          <?php if(isset($_SESSION['username'])):?>
            <a href="php file/logout.php">Logout</a>
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
  <div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="image/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name"><?php echo $row['name'] ?></h5>
				<h6 class="user-email"><?php echo $row['email']; ?></h6>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<?php
				if(isset($_SESSION['message'])){
					echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
					unset($_SESSION['message']);

				}
			?>
		<div class="row gutters">
			<form class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" action="profile.php" method="POST">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control myText" name="name" value="<?php echo $row['name']?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control myText" name="email" value="<?php echo $row['email']?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control myText" name="contact" value="<?php echo $row['contact']?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Address</label>
					<input type="text" class="form-control myText" name="address" value="<?php echo $row['address']?>">
				</div>
				<button type="reset" id="submit" name="cancel" class="btn btn-secondary">Cancel</button>
				<button type="submit" id="submit" name="update" class="btn btn-primary">Update</button>
			</div>
		
		
	</div>
</div>
</form>
</div>
</div>
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
