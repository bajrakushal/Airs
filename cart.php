<?php
include('php file/connection.php');
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
$email = $_SESSION['username'];
$_SESSION['sum']=0;

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $que = "INSERT INTO cart (Product_id,email) values('$id','$email')";
  $res = mysqli_query($conn, $que);
  
}

  if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $query = "DELETE FROM cart WHERE Product_id = '$pid' AND email ='$email'";
    $res = mysqli_query($conn,$query);

  
}

$query = "SELECT product.product_id,product.Name,product.price,product.description,product.image from product,cart WHERE product.product_id = cart.Product_id AND cart.email='$email' GROUP BY product.Name";
$res = mysqli_query($conn, $query);
$num = mysqli_num_rows($res);



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
<section style="padding: 50px 50px;">
  <div class="containers">
    <div class="ars">
      <h2>- Shopping Cart -</h2>
      <p>We pride ourselves on curating our collection from the most trustworthy and reputed sources. When you shop at Airs Arts, you can be assured of the product quality, packaging and shipping. Since some of our pieces are delicate/fragile, they need to be packed with great care. Any shipping costs, if added, are to ensure the piece reaches you safely. You will be able to see any additional shipping charges in the next steps of the checkout process.</p>
    </div>
  </div>
</section>

<section>
  <div class="containers">
    <table id="table" class="table">
      <thead>
        <tr>
          <th>Product Image</th>
          <th>Decription</th>
          <th class = "text-right"><span id="amount">Amount</span></th>
        </tr>
      </thead>
      <?php
      if(isset($_GET['id'])):
          while($row = mysqli_fetch_assoc($res)):
       ?>
        <tr>
          <td class="carts cartm">
            <img src="<?php echo "image/".$row['image'];?>" alt="cart">
          </td>
          <td class="carts"><?php echo $row['Name'];?></td>
          <td class="carts">$<?php echo $row['price']; $_SESSION['sum']= $_SESSION['sum'] + $row['price'];?></td>
            <td class="carts">
            <div class="product-removal">
            <button class="remove-product" onclick="document.location='cart.php?pid=<?php echo $row['product_id'];?>'">Remove</button></div>
          </td>

    <?php endwhile?>
    <?php else :?>
    <?php 
        while($row = mysqli_fetch_assoc($res)):
       ?>
        <tr>
          <td class="carts cartm">
            <img src="<?php echo "image/".$row['image'];?>" alt="cart">
          </td>
          <td class="carts"><?php echo $row['Name'];?></td>
          <td class="carts">$<?php echo $row['price']; $_SESSION['sum']= $_SESSION['sum'] + $row['price'];?></td>
            <td class="carts">
            <div class="product-removal">
             <button class="remove-product" onclick="document.location='cart.php?pid=<?php echo $row['product_id'];?>'">Remove</button></div>
          </td>
    <?php endwhile?>
  <?php endif?>
    </div>
          </td>
          
        </tr>
        <tr>
          <?php if($num == 0):?>
            <th class="sub" colspan="5">Subtotal</th>
            <th class="sub1" colspan="5">0</th>
          <?php else:?>
            <th class="sub" colspan="5">Subtotal</th>
            <th class="sub1" colspan="5">$<?php echo $_SESSION['sum'];?></th>
          <?php endif?>
          
        </tr>
      </tbody>
    </table>
    <div class="float">
      <button class="butons" onclick="document.location='checkout.php'">CHECKOUT</button>
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
/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
   
  });
}

</script>
</script>

</body>
</html>