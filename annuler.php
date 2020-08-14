
<?php
include('class/classVole.php');

if(isset($_GET["idvol"]))
{
   $vol =new vol();
   $vol->annulerVole();
   
 
}
    ?>

