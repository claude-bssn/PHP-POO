<div class="d-flex justify-content-center">
  <div class="card mb-3 w-50 center">
    <img src="Public/img/<?= $adoption->animal_picture == "" ? "avatar_animal.jpg" : "upload/$adoption->animal_picture" ?>" 
      class="card-img-top " 
      alt="...">
    <div class="card-body">
      <h5 class="card-title">Adoption de <?= $adoption->animal_name?></h5>
      <p class="card-text">Numéro de puce : <?= $adoption->animal_chip?></p>
      <p class="card-text"> Espece : <?= $adoption->animal_species?></p>
      <p class="card-text">Info complémentaires : <?= $adoption->adoption_info?></p>
      <h5 class="card-title">Propriétaire <?= $adoption->owner_name." ".$adoption->owner_firstname?></h5>
      <p class="card-text">Téléphone : <?= $adoption->owner_phone?></p>
      <p class="card-text">adresse : <?= $adoption->owner_address?></p>
      <p class="card-text">Email : <?= $adoption->owner_mail?></p>
      <h5 class="card-title">Prix adoption <?= $adoption->adoption_price?> €</h5>
      <p class="card-text"><small class="text-muted">Date d'adoption : <?= $adoption->adoption_date?></small></p>
      <p class="card-text"><small class="text-muted">Date de retour : <?= $adoption->adoption_return_date?></small></p>
      
      <a href="/adoption-update?id=<?= $adoption->id?>" class="btn btn-primary">Modifier</a>

    </div>
  </div>

</div>