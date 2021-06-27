<?php
session_start();

$username = "root";
$email = "";
$errors = array();

//Connection to Database

$conn = mysqli_connect('localhost', 'root', '','airs');

//Register user
if(isset($_POST['reg_user'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $pass1 = mysqli_real_escape_string($conn, $_POST['password1']);

    if($pass !=$pass1){
        array_push($errors, "The two passwords donot match");
    }

    //User check

    $user_check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$user_check);
    $user = mysqli_fetch_assoc($result);

    //if user exists
    if($user){
        if($user['email'] == $email){
            array_push($errors,"Email already exists");
        }
    }


    //Register user
    if(count($errors) == 0){
        $query = "INSERT INTO users (name,email,address,contact,password)
        VALUES ('$name','$email','$address','$contact','$pass')";
        mysqli_query($conn,$query);
        $_SESSION['username'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header('location:index.php');
    }
}
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if(count($errors) == 0){
    $query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
        array_push($errors, "Wrong username/password combination");
    }
  }

}








?>