<?php

use App\Table\Animal;


$animals = Animal::allAvailable();

include "../Pages/animal.php"
?>
