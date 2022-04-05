<?php
use App\Table\Adoption;

$adoption = Adoption::findExtended($_GET['id']);

include "../Pages/adoption_details.php";
?>
