<?php
  include_once('class/classConnexion.php');
 
  class confirmation extends connexion{
public function afficheReservation(){
  $conn=$this->getConnect();
    $idReservation=$_GET["idReservation"];
    $queryConfirmation="select * from reservation r,vol v,client c where v.idvol=r.idvol and idReservation=$idReservation and c.idClient=r.idClient ";
    $result=$conn->query($queryConfirmation);   
    $data=$result->fetchAll(); 
    return $data;
}
  }
?>