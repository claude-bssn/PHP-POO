<?php 
use App\Table\Refuge;

$refuge = Refuge::find($_GET["id"]);
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];
if (!empty($_POST)){
    $id = $_POST['refuge_id'];
    $name = $_POST['refuge_name'];
    $address = $_POST['refuge_address'];
    $phone = $_POST['refuge_phone'];
    $new_Refuge = Refuge::updateRefuge($id, Refuge::cleanString($name), Refuge::cleanString($address), Refuge::cleanNum($phone));
    header("Location: $protocol://$host/home");
    exit;
}
include "../Pages/refuge_update.php"
?>
