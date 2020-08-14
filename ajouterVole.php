<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
    <style>
    body{
      overflow-x:hidden;
    }
       footer div{
            color: white;
        }
       p>a{
            text-decoration: none;
            color:white
        }
        li > span{
          font-weight:bold;
        }
    </style>
</head>

    <body>
 
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="footlogo.png"style="width: 254px;height: 110px;" width="120" height="80" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.php">reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirmation.php">confirmation</a>
              </li>
              <li class="nav-item">
                        <?php 
                       include('class/classUser.php');
                       session_start();
                       $user=new user();
                       if(!empty($_SESSION["admin"])){
                       $data=$user->sessionAdmin();
                        ?>
                <a class="nav-link" href="#"><i class="fas fa-user-circle" style="font-size:30px;margin-top:-7px"></i>&nbsp<?php echo $data[0]['nom'];?></a>
                <?php
                 }
                 else{
                   header("Location:login.php");
                 }
                ?>
              </li>
              <li class="nav-item">
                <a  class="btn btn-outline-danger" href="logout.php">log out</a>
              </li>
          </ul>
        </div>
      </nav>
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="avion.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion2.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                 
                </div>
              </div>
              <div class="carousel-item">
                <img src="avion3.jpg"  class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  <!-- Page Content -->
  <?php

$admin=new user();
$data=$admin->getAdmin();
?>
<div class="container emp-profile" style="margin-top:20px;background-color:#fafafa">
<div class="col-12 offset-4" style="padding-bottom:30px">
<h1>information  admin</h1>
</div>

            <form method="post">
                <div class="row" style="height:130px">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="admin.jpg" width="200" height="150" class="img-thumbnail" alt=""/>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h3>
                                        <?php echo $data[0]['nom']."<span> </span>" ; echo $data[0]['prenom']?>
                                    </h3>
                                    <p class="proile-rating"><b>statut : </b><?php echo $data[0]['statut'] ;?></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info admin</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label> <b>Name :</b> <?php echo $data[0]['nom'] ?></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label><b>prenom :</b> <?php echo $data[0]['prenom'] ?></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label><b>email :</b> <?php echo $data[0]['email'] ?></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label><b>telephone :</b> <?php echo $data[0]['telephone'] ?></label>
                                            </div>
                                          
                                        </div>
                                      
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
<div class="container" style="margin-top:20px">

    <div class="row">
    <?php
    include('class/classVole.php');
$vol=new vol();
    $rows=$vol->getVol();
      foreach($rows as $data)
      {
    ?>
      <div class="col-lg-4 col-sm-6 "style="margin-top:20px">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img2.jpg" alt="" id="image"></a>
                 <div class="card-body">
                 <h5 class="card-title offset-2" ><?php echo $data['lieuDepart']; ?>-<?php echo $data['destination']; ?></h5>
                 <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item"><span >date</span>:<?php echo $data['dateVole'];?></li>
                    <li class="list-group-item"><span>nombre place</span>:<?php echo $data['nombreplace'];?></li>
             <li class="list-group-item"><span>prix</span>: <?php echo $data['prix']; ?></li>
                  </ul>
              <div class="card-body">
               <a href="annuler.php?idvol=<?php echo $data['idvol']; ?>" class="btn btn-primary btn-md offset-4" name="reserver">annuler vole</a> 
                </div>    
        </div>
      </div>
    <?php 
     } 
   ?>
     
    
    </div>
    </div>
    <!-- /.row -->
    <!-- Features Section -->
   </div>
  <!-- /.container -->
  <?php
  // include('class/classUser.php');
  if(isset($_POST["lieuDepart"]) && isset($_POST["destignation"]) && isset($_POST["dateVole"]) && isset($_POST["prix"]) && isset($_POST["nombrePlace"])){
      $lieuDepart=$_POST["lieuDepart"];
      $destignation=$_POST["destignation"];
      $dateVole=$_POST["dateVole"];
      $prix=$_POST["prix"];
      $nombrePlace=$_POST["nombrePlace"];
   $vol=new vol();
   $vol->insertVol( $lieuDepart,$destignation,$dateVole, $prix,$nombrePlace);
  }

  ?>
<div class="container " style="margin-top:20px;border:3px solid;padding:20px;">
  <div class="row ">
  
  <form class="col-6 offset-3" method="POST" >
  <div class="col-12 offset-3" >
   <h3>ajouter un vole</h3>
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput">lieu Depart</label>
    <input type="text" class="form-control" name="lieuDepart" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">destignation</label>
    <input type="text" class="form-control" name="destignation">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">date vole</label>
    <input type="date" class="form-control" name="dateVole">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">prix</label>
    <input type="text" class="form-control" name="prix">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">nombre place</label>
    <input type="text" class="form-control" name="nombrePlace">
  </div>
  <div class="col-12 offset-4">
  <button type="submit" class="btn btn-lg btn-primary" name="ajouterVole">ajouter vole</button>
  </div>
</form>
  </div>
</div>
<?php include('footer.php'); ?>