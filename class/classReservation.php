<?php
   include_once('class/classConnexion.php');
 
class reservation extends connexion{
    private $idRerservation;
    private $idClient;
    private $idVol;
    private $idUser;
    private $dateR;
public function reserver($n,$p,$a,$t,$e,$pass){
      $conn=$this->getConnect();
      $idvol=$_GET["idvol"];
      $client=new client();
      $lastId=$client->insertClient($n,$p,$a,$t,$e,$pass);
      $vol=new vol();
      $nombreplace=$vol->nombrePlace();
      $vol->updatenbPlace($nombreplace);

if(!empty($_SESSION["user"])){
      $querySession="select idUser from compte where  email='".$_SESSION['user']."'";
      $result=$conn->query($querySession);
      $data=$result->fetchAll(); 
}
      $idUser= $data[0]['idUser'];
      $query3="insert into reservation values(NULL,$lastId,'$idvol',$idUser,'".date("Y/m/d")."')";
      echo $query3;
      $conn->exec($query3);
      $idResevation =$conn->lastInsertId();
   echo "<br>id reservation= ".$idResevation;
  header("location:confirmation.php?idReservation=".$idResevation."");   
   ob_end_flush();
   
}


}
?>