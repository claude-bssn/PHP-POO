
<?php
use App\Table\Adoption;
$adoptions = Adoption::getAllExtended();
include "../Pages/adoption.php";

?>
