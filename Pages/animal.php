<?php

use App\Table\Animal;


$animals = Animal::all();
?>

<?php foreach($animals as $animal) : ?>
  <?= $animal->info ;?>
<?php endforeach ; ?>

<a href="/animal-new"><button>Ajouter un Animal</button></a>
