<?php
namespace App\Table;
use App\App;
use App\Traits\Photo;

  class Caregiver extends Table {
    use  Photo;

    public static function addCaregiver(
      $name	,
      $firstname,		
      $check_in,	
      $gender,
      $phone,
      $mail,		
      $picture,
      $specialty,
      $treatment_per_day,
      $supervisor,
      $check_out,		
      $info
    ) {
      App::getDB()->prepare(
        "INSERT into caregivers (  
          caregiver_name,
          caregiver_firstname,		
          caregiver_check_in,	
          caregiver_gender,
          caregiver_phone,
          caregiver_mail,		
          caregiver_picture,
          caregiver_specialty,
          caregiver_treatment_per_day,
          caregiver_supervisor,
          caregiver_check_out,		
          caregiver_info
          )
        value (
          :name, 
          :firstname, 
          :check_in, 
          :gender, 
          :phone,
          :mail, 
          :picture, 
          :specialty, 
          :treatment_per_day, 
          :supervisor, 
          :check_out, 
          :info
        )",
        [
          'name' => $name	,
          'firstname' =>$firstname,		
          'check_in' => $check_in,	
          'gender' => $gender,
          'phone' => $phone,
          'mail' => $mail,		
          'picture' => $picture,
          'specialty' => $specialty,
          'treatment_per_day' => $treatment_per_day,
          'supervisor' => $supervisor,
          'check_out' => $check_out,		
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }

    public static function updateCaregiver(
      $id,
      $name	,
      $firstname,		
      $check_in,	
      $gender,
      $phone,
      $mail,		
      $picture,
      $specialty,
      $treatment_per_day,
      $supervisor,
      $check_out,		
      $info
    ) {
      App::getDB()->prepare(
        "UPDATE caregivers   
        SET 
          caregiver_name = :name, 
          caregiver_firstname = :firstname, 
          caregiver_check_in = :check_in, 
          caregiver_gender = :gender, 
          caregiver_phone = :phone,
          caregiver_mail = :mail, 
          caregiver_picture = :picture, 
          caregiver_specialty = :specialty, 
          caregiver_treatment_per_day = :treatment_per_day, 
          caregiver_supervisor = :supervisor, 
          caregiver_check_out = :check_out, 
          caregiver_info = :info
        WHERE caregiver_id = :id 
        ",
        [
          'id' => $id,
          'name' => $name,
          'firstname' => $firstname,		
          'check_in' => $check_in,	
          'gender' => $gender,
          'phone' => $phone,
          'mail' => $mail,		
          'picture' => $picture,
          'specialty' => $specialty,
          'treatment_per_day' => $treatment_per_day,
          'supervisor' => $supervisor,
          'check_out' => $check_out,		
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }


  }