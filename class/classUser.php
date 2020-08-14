<?php
  include_once('class/classConnexion.php');

class user extends connexion{
    private $idUser;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $passwordd;
    private $statut;
public function getUser(){
   
    $query="select * from compte where email='".$_SESSION['user']."' ";
    $result=$this->getConnect()->query($query);
    $data=$result->fetchAll();
      return $data;
}
public function getCommand(){
    $query="select r.* from reservation r,compte c where r.idUser=c.idUser and email='".$_SESSION['user']."'";
$result=$this->getConnect()->query($query);
while($row=$result->fetch())
{
    $data[]=$row;
}
return $data;
}
public function getAdmin(){
    $query="select * from compte where email='".$_SESSION['admin']."'";
$result=$this->getConnect()->query($query);
$data=$result->fetchAll();
return $data;
}

public function afficheCmd(){
    $idR=$_GET['idResv'];
$query="select r.*,c.*,v.* from reservation r,client c,vol v where r.idReservation=$idR and r.idClient=c.idClient and r.idvol=v.idvol" ;
$result=$this->getConnect()->query($query);
$data=$result->fetchAll();
return $data;
}
  
  public function login($userL,$password){
      session_start();
    $query="select * from compte";
    $result=$this->getConnect()->query($query);
    $data=$result->fetchAll();
       for ($i=0; $i <count($data) ; $i++) { 
           if($data[$i]["email"]==$userL && $data[$i]["password"]==$password && $data[$i]["statut"]=='admin'){
            $_SESSION["admin"]=$userL; 
                header('location:ajouterVole.php');
               }
            elseif($data[$i]["email"]==$userL && $data[$i]["password"]==$password && $data[$i]["statut"]=='user')
               {
                $_SESSION["user"]=$userL;
               header('location:index.php');
               }
               
               
           }
             
       }
       public function sessionUser(){
        
        $query="select nom from compte where email='".$_SESSION['user']."'";
        $result=$this->getConnect()->query($query);
        $data=$result->fetchAll();
        return $data;
       }
       public function sessionAdmin(){
        
        $query="select nom from compte where email='".$_SESSION['admin']."'";
        $result=$this->getConnect()->query($query);
        $data=$result->fetchAll();
        return $data;
       }
       
       public function insertUser($n,$p,$e,$t,$pass){
        $queryEmail="select email from compte where statut='user'";
        $result=$this->getConnect()->query($queryEmail);
        $data=$result->fetchAll();
        $count="";
      for($i=0;$i<count($data);$i++){
       $count .=$data[$i]['email']." " ;
      }
   
      $array = explode(" ",$count);
         if(in_array($e,$array)){
           echo "<div class='alert alert-danger' role='alert'>erreur email existe!!!!!!!!</div>";
         }
         else{
           $query="insert into compte values(null,'".$n."','".$p."','".$e."',$t,'".$pass."','user')";
           $this->getConnect()->exec($query);
         }
       }
     
  }

?>