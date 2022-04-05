<?php

use App\Table\Caregiver;
$class = Caregiver::getClass();
$chefs = Caregiver::all();
$caregiver = Caregiver::find($_GET['id']);

$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
  if($_FILES){
    Caregiver::addPhoto($_FILES[$class.'_picture']);
  }
  
    $new_caregiver = Caregiver::updateCaregiver( 
      $id = $caregiver->caregiver_id,
      $name = Caregiver::cleanString($_POST[$class.'_name']),
      $firstname = Caregiver::cleanString($_POST[$class.'_firstname']),	
      $check_in = $_POST[$class.'_check_in'] === "" ? null : $_POST[$class.'_check_in'],	
      $gender = Caregiver::cleanString($_POST[$class.'_gender']),	
      $phone = Caregiver::cleanNum($_POST[$class.'_phone']),	
      $mail = Caregiver::isEmail($_POST[$class.'_mail']),			
      $picture = Caregiver::$file_name === null ? $caregiver->caregiver_picture : Caregiver::$file_name,
      $specialty = Caregiver::cleanString($_POST[$class.'_specialty']),	
      $treatment_per_day = $_POST[$class.'_treatment_per_day'],	
      $supervisor = Caregiver::cleanString($_POST[$class.'_supervisor'] === ""? null : $_POST[$class.'_supervisor']),	
      $check_out = $_POST[$class.'_check_out'] === "" ? null : $_POST[$class.'_check_out'],			
      $info = Caregiver::cleanString($_POST[$class.'_info'])	
    );
    header("Location: $protocol://$host/caregiver-details?id=$id");
    exit;
}
  include "../Pages/caregiver_update.php";
?>
