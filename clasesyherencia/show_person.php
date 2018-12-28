<?php
require("person.php");

  $name = $_POST["name"];
  $last_name = $_POST["last_name"];
  $birthday = $_POST["birthday"];
  $persona = New Person($name,$last_name,$birthday);
  
  $b = new DateTime($birthday);

  header('Content-Type: application/json');

  $person = array(
    'estado'=>'ok', 
    'nombre'=> $name, 
    'apellido'=>$last_name, 
    'fecha_nacimiento'=>$birthday,
    'edad'=>$persona->age($b)->format('%y'),
    'dias_para_cumpleanos'=>$persona->days_for_birthday($b)
  );

  echo json_encode($person, JSON_FORCE_OBJECT);