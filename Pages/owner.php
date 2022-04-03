<?php
use App\Table\Owner;

$owners = Owner::all();
?>

<a href="/owner-new" class="btn btn-primary">Ajouter un propriétaire</a>

<div class="d-flex flex-wrap justify-content-around">
  <?php foreach($owners as $owner) : ?>
    
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $owner->name?> <?= $owner->owner_firstname?></h5>
      <p class="card-text">Téléphone : <?= $owner->owner_phone?></p>
      <p class="card-text">E-mail : <?= $owner->owner_mail?></p>
      <p class="card-text"> Spécialité : <?= $owner->owner_inscription_date?></p>
      <a href="/owner-details?id=<?= $owner->owner_id?>" class="btn btn-primary">Détails</a>
    </div>
  </div>  
  
  <?php endforeach ; ?>

</div>