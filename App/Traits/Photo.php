<?php
namespace App\Traits;

  trait Photo {
    public static $file_name;
    public static function addPhoto($files){
      $tmpName = $files['tmp_name'];
      $name = $files['name'];
      $size = $files['size'];
      $error = $files['error'];

      $tabExtension = explode('.', $name);
      $extension = strtolower(end($tabExtension));

      $extensions = ['jpg', 'png', 'jpeg', 'gif'];
      $maxSize = 10000000; //250Ko
      if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {

          $uniqueName = uniqid('', true);

          self::$file_name = $uniqueName . "." . $extension;

          move_uploaded_file($tmpName, '../Public/img/upload/' . self::$file_name);
      }
    }
  }