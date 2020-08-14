<?php

session_start();
if(isset($_SESSION["admin"])){
    session_destroy($_SESSION["admin"]);
    $_SESSION["admin"]=null;
    header("location:login.php");
}


?>