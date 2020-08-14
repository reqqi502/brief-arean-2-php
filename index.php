<?php include('header.php') ;?>
  <!-- Page Content -->
  <div class="container-fluid px-0">

    <h1 class="col-12 my-4 d-flex justify-content-center">Reserver maintenant</h1>

    <div class="container-fluid ">
<div class="row "> 
    <div class="jumbotron jumbotron w-100" >
        <div class="container">
        <form method="POST" class="col-12">
            <div class="row d-flex justify-content-center">

           
          <div class="col-5" class="display-6">Lieu depart <input type="text" class="form-control" name="lieu"></div>
          <div class="col-5"> Destination <input type="text" class="form-control" name="destination"></div>
         <div class="col-12 d-flex justify-content-center my-3">
             <input type="submit" class="btn btn-primary" value="rechercher" name="recherche">
            </div>
        </div>
        </div>
      </div>
      </div>
      </form>
</div>
</div>
<div class="container">
    <div class="row">
    <?php
    include('class/classVole.php');
     if(isset($_POST["recherche"])){
     $vol = new vol();
     if(isset($_POST['lieu']) && isset($_POST['destination'])){
    $data= $vol->recherche($_POST['lieu'],$_POST['destination']);
    foreach($data as $row){
    ?>
      <div class="col-lg-4 col-sm-6 ">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="img2.jpg" alt="" id="image"></a>
                 <div class="card-body">
                 <h5 class="card-title offset-2" ><?php echo $row['lieuDepart']; ?>-<?php echo $row['destination']; ?></h5>
                 <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item"><span >date</span>:<?php echo $row['dateVole'];?></li>
                    <li class="list-group-item"><span>nombre place</span>:<?php echo $row['nombreplace'];?></li>
             <li class="list-group-item"><span>prix</span>: <?php echo $row['prix']; ?></li>
                  </ul>
              <div class="card-body">
               <a href="reservation.php?idvol=<?php echo $row['idvol']; ?>" class="btn btn-primary btn-md offset-4" name="reserver">reserver</a> 
                </div>    
        </div>
      </div>
    <?php }
     }
   } 
   ?>
     
    
    </div>
    </div>
    <!-- /.row -->
    <!-- Features Section -->
   </div>
  <!-- /.container -->
<?php include('footer.php'); ?>

 
   