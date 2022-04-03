<?php

use App\Table\Owner;
$class = Owner::getClass();
$owner = Owner::find($_GET['id']);
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
   
    $new_owner = Owner::updateOwner( 
      $id = $owner->id,
      $name = $_POST[$class.'_name'],
      $firstname = $_POST[$class.'_firstname'],	
      $inscription_date = $_POST[$class.'_inscription_date'] === "" ? null : $_POST[$class.'_inscription_date'],	
      $gender = $_POST[$class.'_gender'],	
      $phone = $_POST[$class.'_phone'],	
      $mail = Owner::isEmail($_POST[$class.'_mail']),
      $info = $_POST[$class.'_info']	
    );
    header("Location: $protocol://$host/owner-details?id=$owner->id");
    exit;
}
?>


<h1>Ajouter un soignant</h1>
<form action="#" method="POST" enctype="multipart/form-data">

  <div>
    <label for="<?= $class?>_name">Nom</label>
    <input type="text" name="<?= $class?>_name" required value="<?= $owner->name?>">
  </div>

  <div>
    <label for="<?= $class?>_firstname">Prénom</label>
    <input type="text" name="<?= $class?>_firstname" required value="<?= $owner->owner_firstname?>">
  </div>

  <div>
    <label for="<?= $class?>_inscription_date">Date d'inscription</label>
    <input type="date" name="<?= $class?>_inscription_date" required value="<?= $owner->owner_inscription_date?>">
  </div>

  <div>
    <label for="<?= $class?>_phone">Téléphone</label>
    <input type="number" name="<?= $class?>_phone" required value="<?= $owner->owner_phone?>">
  </div>

  <div>
    <label for="<?= $class?>_mail">Email</label>
    <input type="email" name="<?= $class?>_mail" required value="<?= $owner->owner_mail?>">
  </div>

  <div>
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"><?= $owner->owner_info?></textarea>
  </div>


  <input type="submit">
</form>