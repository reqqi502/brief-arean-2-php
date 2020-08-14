<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" class="rel">
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body style="background:black">
<?php
   include("class/classUser.php");
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $userL=$_POST["username"];
        $password=$_POST["password"];

      $user=new user();
      $user->login($userL,$password);
    }
    ?>
<div class="login-page" >
  <div class="form">
  <h2>login</h2>
    <form  method="POST">
    <div class="row" >
      <label class="col-3" for="">email</label><input class="col-9" type="text" name="username" placeholder="email" required/>
    <label class="col-3" for="">password</label> <input class="col-9" type="password" name="password"  placeholder="password" required/>
      <button type="submit" class="offset-3" name="login"  style="background-color:red">login</button>
      <p class="message offset-3 mt-1">Not registered? <a href="register.php">Create an account</a></p>
      </div>
    </form>
  </div>
</div>

</body>
</html>