<?php
use App\Table\Owner;

$class = Owner::getClass();
$owner = Owner::find($_GET['id']);
$animal_by_owner = Owner::animalByOwner($owner->id);

include "../Pages/owner_details.php";

?>
