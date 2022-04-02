<?php
use App\Table\Caregiver;

$caregivers = Caregiver::all();
?>

<a href="/caregiver-new" class="btn btn-primary">Ajouter un Soignant</a>

<div class="d-flex flex-wrap justify-content-around">
  <?php foreach($caregivers as $caregiver) : ?>
    
    <div class="card" style="width: 18rem;">
    <img src="Public/img/upload/<?= $caregiver->caregiver_picture == "" ? "avatar.jpeg" : "$caregiver->caregiver_picture" ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $caregiver->caregiver_gender?> <?= $caregiver->name?> <?= $caregiver->caregiver_firstname?></h5>
      <p class="card-text">Téléphone : <?= $caregiver->caregiver_phone?></p>
      <p class="card-text">E-mail : <?= $caregiver->caregiver_mail?></p>
      <p class="card-text"> Spécialité : <?= $caregiver->caregiver_check_in?></p>
      <a href="/caregiver-details?id=<?= $caregiver->caregiver_id?>" class="btn btn-primary">Détails</a>
    </div>
  </div>  
  
  <?php endforeach ; ?>

</div>