<?php

use App\Table\Owner;
$class = Owner::getClass();
$owner = Owner::find($_GET['id']);
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];
if (!empty($_POST)){
   
    $new_owner = Owner::updateOwner( 
      $id = $owner->id,
      $name = Owner::cleanString($_POST[$class.'_name']),
      $firstnam = Owner::cleanString($_POST[$class.'_firstname']),	
      $inscription_date = $_POST[$class.'_inscription_date'] === "" ? null : $_POST[$class.'_inscription_date'],	
      $address = Owner::cleanString($_POST[$class.'_address']),	
      $phone = Owner::cleanNum($_POST[$class.'_phone']),
      $mail = Owner::isEmail($_POST[$class.'_mail']),
      $info = Owner::cleanString($_POST[$class.'_info'])	
    );
    header("Location: $protocol://$host/owner-details?id=$owner->id");
    exit;
    
}
include "../Pages/owner_update.php";
?>
