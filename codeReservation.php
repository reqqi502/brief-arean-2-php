<?php 
include('class/classClient.php');
include('class/classReservation.php');
$client=new client();
$reservation=new reservation();
   if(isset($_POST["reserver"]))
   {
          $nom=$_POST["nom"];
          $prenom=$_POST["prenom"];
          $adress=$_POST["adresse"];
          $telephone=$_POST["telephone"];
          $passport=$_POST["passeport"];
          $email=$_POST["email"]; 
        $reservation->reserver($nom,$prenom,$adress,$telephone,$email,$passport);
      
   }
        
  
 ?>