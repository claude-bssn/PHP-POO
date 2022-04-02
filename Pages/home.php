<?php
  use App\Table\Refuge;

  $refuge = Refuge::getRefuge();
  ?>
  <?php if($refuge) :?>
    <h1>Bienvenue à <?= $refuge->name ?> </h1>
    <p><?= $refuge->address; ?></p> 
    <p>Numéro de téléphone : <?= $refuge->phone ?> </p>
    <a href="/refuge-update?id=<?= $refuge->id ?>"><button>Modifier Refuge</button></a>

  <?php else: ?>
    <h1>Vous n'avez pas encore créé votre refuge</h1>
    <a href="/refuge"><button>Créer Refuge</button></a>
  <?php endif; ?>

