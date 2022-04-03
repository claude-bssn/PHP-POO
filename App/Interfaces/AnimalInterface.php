<?php
namespace App\Interfaces;

interface AnimalInterface {
    public function getName();
    public function getSpecies();
    public function getCheck_in();
    public function getPicture();
    public static function setReturnDate($animal_id, $date);
    

  }