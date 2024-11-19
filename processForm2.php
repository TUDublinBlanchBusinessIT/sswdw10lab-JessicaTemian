<?php
session_start();


$_SESSION['subTenKG'] = isset($_POST['subTenKG']) ;
$_SESSION['overTenKG'] = isset($_POST['overTenKG']);


header('location: finalStep.php');
exit();
?>
