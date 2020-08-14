
<?php
 include_once('class/classConnexion.php');
class client extends connexion{
    private $idClient;
    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $passport;
    public function insertClient($n,$p,$a,$t,$e,$pass){
        $conn=$this->getConnect();
        $query2="insert into client values(NULL,'".$n."','".$p."','".$a."','$t','".$e."','".$pass."')";
        $conn->exec($query2);
        $idClient = $conn->lastInsertId();
        return $idClient;
    }
   
}
?>