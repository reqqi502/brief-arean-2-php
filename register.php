<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
<div class="login-page">
  
  <?php
  include('class/classUser.php');
  $user=new user();
     if(isset($_POST['ajouterUser'])){
       $nom=$_POST["nom"];
       $prenom=$_POST["prenom"];
       $email=$_POST["email"];
       $telephone=$_POST["telephone"];
       $password=$_POST["password"];
     $user->insertUser($nom,$prenom,$email,$telephone,$password);
     }
  ?>
<div class="form">
  <h2>inscription</h2>
  <form  method="POST">
  <div class="row">
      <label class="col-3" for="">nom</label><input class="col-9" type="text" placeholder="nom" name="nom" required/>
      <label for="" class="col-3">prenom</label><input class="col-9" type="text" placeholder="prenom" name="prenom" required/>
      <label for="" class="col-3">email</label><input class="col-9" type="email" placeholder="email" name="email" required/>
      <label for="" class="col-3">telephone</label><input class="col-9" type="text" placeholder="telephone" name="telephone" required/>
      <label for="" class="col-3">password</label><input class="col-9" type="password" placeholder="password" name="password" required/>
      <button type="submit" name="ajouterUser" class="offset-3">ajouter</button>
      <p class="message offset-3 mt-1">Already registered? <a href="login.php">Sign In</a></p>
      </div>
    </form>
  </div>
  </div>
   
    

</body>
</html>