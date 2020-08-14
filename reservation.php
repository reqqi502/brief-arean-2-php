
<?php ob_start();?>

<?php
         include('header.php');      
               include('class/classVole.php'); 
               $vole=new vol();
                if(isset($_GET["idvol"]))
                {
                
                $data=$vole->getVole();

?>
<div class="row detail">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 p-0">
            <div class="ribbon"><span> Offre Genius </span></div>
            <img src="avion.jpg" alt="">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
            <span class="discount-holder"><span>Reservation</span></span>
            <div class="detail-box">
              <h4>Réservez votre voyage pas cher</h4>
              <p>
                <div class="offer">
                    <span class="offer-text">Réservez avec:</span>
                    <span class="offer-text-2">flexibilité</span>
                </div>
              </p>
            
              <ul>
                <li name="lienDepart"><strong> <i class="fas fa-plane-departure"></i>lienDepart : </strong>  <?php echo $data[0]["lieuDepart"]?></li>
                <li name="destination"><strong > <i class="fas fa-plane-arrival"></i>Destination : </strong> <?php echo $data[0]["destination"]?></li>
                <li name="prix"><strong> Prix Prime par passager : </strong><?php echo $data[0]["prix"]?></li>
              </ul>
              <p name="nombreplace"><strong><i class="fas fa-user-check"></i> Nombre Place : </strong><?php echo $data[0]["nombreplace"]?> </p>
              <h6 name=" dateVol "><strong><i class="fa fa-clock"></i> Date vol :</strong> <?php echo $data[0]["dateVole"]?></h6>
            </div>
           
          </div>
      
        </div>
        <?php } 
       
         ?>
         <!-- formulaire -->
       
 <div class="container register-form" id="formreserv">
            <div class="form">
                <div class="note">
                    <p>Coordonnées des passagers.</p>
                </div>

                <div class="form-content" >
<?php include('codeReservation.php');?>
                    <div class="row" >
                        <div class="col-md-6">
                            <form  method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" placeholder="Nom *" value="" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="passeport" placeholder="Passeport *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="prenom" placeholder=" Prenom *" value="" required/>
                             </div>
                             <div class="form-group">
                                <input type="text" class="form-control" name="adresse" placeholder="Adresse *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="telephone" placeholder="Telephone *" value="" required/>
                            </div>
                           
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email *" value="" required/>
                             </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit" name="reserver">réservez maintenant</button>
                 
                </div>
            </div>
        </div>
      </form>
      <?php include('footer.php'); ?>