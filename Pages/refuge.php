<?php 
use App\Table\Refuge;

$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
    $name = $_POST['refuge_name'];
    $address = $_POST['refuge_address'];
    $phone = $_POST['refuge_phone'];
    $new_Refuge = Refuge::addRefuge(Refuge::cleanString($name), Refuge::cleanString($address), Refuge::cleanNum($phone));
    header("Location: $protocol://$host/home");
    exit;
}
?>
<form action="/refuge" method="POST">

  <div>
    <label for="refuge_name">Nom de votre refuge</label>
    <input type="text" name="refuge_name">
  </div>

  <div>
    <label for="refuge_address">Adresse de votre refuge</label>
    <input type="text" name="refuge_address">
  </div>

  <div>
    <label for="refuge_phone">Téléphone de votre refuge</label>
    <input type="number" name="refuge_phone">
  </div>

  <input type="submit">
</form>