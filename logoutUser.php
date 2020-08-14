<?php

session_start();
if(isset($_SESSION["user"])){
    session_destroy($_SESSION["user"]);
    $_SESSION["user"]=null;
    header("location:login.php");
}


?>