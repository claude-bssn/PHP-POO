<?php
require "../vendor/autoload.php";

$slug =  explode('?', $_SERVER['REQUEST_URI'])[0];
ob_start();
switch ($slug) {
  case '/':
    require '../Pages/home.php';
    break;
  case '/home':
    require '../Pages/home.php';
    break;
    // refuge
  case '/refuge':
    require '../Pages/refuge.php';
    break;
  case '/refuge-update':
    require '../Pages/refuge-update.php';
    break;
    // animal
  case '/animal':
    require '../Pages/animal.php';
    break;
  case '/animal-new':
    require '../Pages/animal-new.php';
    break;
  case '/animal-update':
    require '../Pages/animal-update.php';
    break;
  case '/animal-details':
    require '../Pages/animal-details.php';
    break;
  
    // caregiver
  case '/caregiver':
    require '../Pages/caregiver.php';
    break;
  case '/caregiver-new':
    require '../Pages/caregiver-new.php';
    break;
  case '/caregiver-update':
    require '../Pages/caregiver-update.php';
    break;
  case '/caregiver-details':
    require '../Pages/caregiver-details.php';
    break;

  // owner
  case '/owner':
    require '../Pages/owner.php';
    break;
  case '/owner-new':
    require '../Pages/owner-new.php';
    break;
  case '/owner-update':
    require '../Pages/owner-update.php';
    break;
  case '/owner-details':
    require '../Pages/owner-details.php';
    break;
    
  default:
    require '../Pages/404.php';
    break;
}
$content = ob_get_clean();
require '../Pages/template/default.php'; ?>
