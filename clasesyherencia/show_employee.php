<?php
require("employee.php");
  $name = $_POST["name"];
  $last_name = $_POST["last_name"];
  $birthday = $_POST["birthday"];
  $hiring_date = $_POST["hiring_date"];
  $position = $_POST["position"];
  $base_salary = $_POST["base_salary"];
  $employee = New Employee($name, $last_name,$birthday,$hiring_date,$position,$base_salary);
  $b = new DateTime($birthday);
  header('Content-Type: application/json');

  $employee = array(
    'estado'=>'ok', 
    'name'=> $name, 
    'last_name'=>$last_name, 
    'birthday'=>$birthday,
    'age'=>$employee->age($b)->format('%y'),
    'days_left_birthday'=>$employee->days_for_birthday($b),
    'time_working'=>$employee->time_working()->format('%y años, %m meses, %d dias'),
    'salary'=>$employee->salary()
  );

  echo json_encode($employee, JSON_FORCE_OBJECT);