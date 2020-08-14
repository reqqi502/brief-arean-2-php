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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
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
        <a class="navbar-brand" href="index.php"><img src="logo3.png" width="120" height="80" alt=""></a>
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
                        if(!empty($_SESSION["user"])){
                          $user=new user();
                          $data=$user->sessionUser();
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
                <a  class="btn btn-outline-danger" href="logoutUser.php">log out</a>
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
  <script>
   function afficher(idResv){
 var ajax=new XMLHttpRequest();
 ajax.onreadystatechange=function(){
   if(this.readyState==4 && this.status==200){
     var data=JSON.parse(this.responseText);
     console.log(data);
     document.getElementById('resultat').innerHTML=`<table border= 2px solid black;  style="margin:0 auto;font-size:22px;;margin-top:30px;">
    <tr>
    <th>nom : </th>
    <td>${data[0].nom}</td>
  </tr>
  <tr>
    <th>prenom :</th>
    <td>${data[0].prenom}</td>
  </tr>
  <tr>
    <th>address :</th>
    <td>${data[0].adress}</td>
  </tr>
  <th>email :</th>
    <td>${data[0].email}</td>
  </tr>
  <tr>
    <th>passport :</th>
    <td>${data[0].passport}</td>
  </tr>
  <tr>
    <th>la date de reservation : </th>
    <td>${data[0].dateResr}</td>
  </tr>
 
  <tr>
    <th>lieu de depart : </th>
    <td>${data[0].lieuDepart}</td>
  </tr>
  <tr>
    <th>destination : </th>
    <td>${data[0].destination}</td>
  </tr>
  <tr>
    <th>date vole : </th>
    <td>${data[0].dateVole}</td>
  </tr>
  <tr>
    <th>prix : </th>
    <td>${data[0].prix}</td>
  </tr>
  <tr>
    <th>numero de telephone :</th>
    <td>${data[0].numTelephone}</td>
  </tr>
  <tr>
    
    </table>`;
}
}
ajax.open("GET","affichageCmd.php?idResv="+idResv,true);
 ajax.send();
}
</script>
<?php
//include('class/classUser.php');
//$user=new user();
$data=$user->getUser();
?>
<div class="container emp-profile" style="margin-top:20px">
            <form method="post">
                <div class="row" style="height:130px">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="users.ico" width="250" height="250"  alt=""/>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h3>
                                        <?php echo $data[0]['nom']."<span> </span>" ; echo $data[0]['prenom']?>
                                    </h3>
                                    <p class="proile-rating"><b>statut : </b><?php echo $data[0]['statut'] ;?></p>
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About user</a>
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
<!-- table -->
<div class="container " style="margin-top:40px">

<table class="table table-striped" id="all">
  <thead>
    <tr>
      <th scope="col">commande</th>
      <th scope="col">email</th>

      <th scope="col">date reservation</th>
      <th scope="col">affichage</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$n=0;
$a=0;
$rows=$user->getCommand();
foreach($rows as $data)
{
?>
<tr>
<td><?php echo $a+=$n+1?></td>
<td><?php echo $_SESSION["user"]?></td>
<td><?php echo $data['dateResr']?></td>

<?php $id=$data['idReservation']?>
<td> <button type="button" class="btn btn-md btn-secondary" onclick="afficher('<?php echo $id?>')">afficher commande </button></td>
</tr>

<?php }?>
  </tbody>
</table>

</div>
<div id='resultat'>
</div>

<?php include('footer.php'); ?>