<?php

use App\Table\Animal;


$animals = Animal::allAvailable();
?>
<a href="/animal-new" class="btn btn-primary">Ajouter un Animal</a>

<div class="d-flex flex-wrap justify-content-around">
  <?php foreach($animals as $animal) : ?>  

     
        <div class="card" style="width: 18rem;">
          <img src="Public/img/<?= $animal->picture == "" ? "avatar_animal.jpg" : "upload/$animal->animal_picture" ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $animal->name?></h5>
            <p class="card-text">Date d'arrivé : <?= $animal->check_in?></p>
            <p class="card-text">Espece : <?= $animal->animal_species?></p>
            <p class="card-text"> Age : <?= $animal->animal_age?></p>
            <a href="/animal-details?id=<?= $animal->animal_id?>" class="btn btn-primary">Détails</a>
          </div>
        </div>  

  
  <?php endforeach ; ?>

</div>