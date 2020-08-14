
<?php
include('class/classUser.php');
$user=new user();
$data=$user->afficheCmd();

echo json_encode($data);

?>

