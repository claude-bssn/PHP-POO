<?php
require "../vendor/autoload.php";

$slug =  explode('?', $_SERVER['REQUEST_URI'])[0];
ob_start();
switch ($slug) {
  case '/':
    require '../Controller/home_controller.php';
    break;
  case '/home':
    require '../Controller/home_controller.php';
    break;
    // refuge
  case '/refuge':
    require '../Controller/refuge_controller.php';
    break;
  case '/refuge-update':
    require '../Controller/refuge_update_controller.php';
    break;
    // animal
  case '/animal':
    require '../Controller/animal_controller.php';
    break;
  case '/animal-new':
    require '../Controller/animal_new_controller.php';
    break;
  case '/animal-update':
    require '../Controller/animal_update_controller.php';
    break;
  case '/animal-details':
    require '../Controller/animal_details_controller.php';
    break;
  
    // caregiver
  case '/caregiver':
    require '../Controller/caregiver_controller.php';
    break;
  case '/caregiver-new':
    require '../Controller/caregiver_new_controller.php';
    break;
  case '/caregiver-update':
    require '../Controller/caregiver_update_controller.php';
    break;
  case '/caregiver-details':
    require '../Controller/caregiver_details_controller.php';
    break;

  // owner
  case '/owner':
    require '../Controller/owner_controller.php';
    break;
  case '/owner-new':
    require '../Controller/owner_new_controller.php';
    break;
  case '/owner-update':
    require '../Controller/owner_update_controller.php';
    break;
  case '/owner-details':
    require '../Controller/owner_details_controller.php';
    break;

  // adoption
  case '/adoption':
    require '../Controller/adoption_controller.php';
    break;
  case '/adoption-new':
    require '../Controller/adoption_new_controller.php';
    break;
  case '/adoption-update':
    require '../Controller/adoption_update_controller.php';
    break;
  case '/adoption-details':
    require '../Controller/adoption_details_controller.php';
    break;
    
  default:
    require '../Controller/404_controller.php';
    break;
}
$content = ob_get_clean();
require '../Pages/template/default.php'; ?>
