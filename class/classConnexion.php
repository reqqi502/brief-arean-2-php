<?php 
 class connexion{

    protected $host ='localhost';
    protected $dbname='gestionvolV2';
    protected $username='root';
    protected $password='';
    protected function getConnect(){
       
        try{
            $conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);  

           }catch (PDOException $e){
            echo $e->getMessage();
           }
return $conn;
    }
}

?>