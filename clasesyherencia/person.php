<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
class Person{

  private $name; 
  private $last_name; 
  private $birthdate;

  public function __construct($name, $last_name, $birthdate)
  {
    $this->name = $name; 
    $this->last_name = $last_name;
    $this->birthday = new DateTime($birthdate); 
  }


  public function age($birthday){
    $birth = new DateTime('now');
    $age = $birth->diff($birthday);
    return $age;
  }

  public function days_for_birthday($birthday)
  {
    $now = new DateTime('now');
    $time_left = $this->age($birthday)->format('%y');
    $actual_birthday = $this->birthday->modify('+'."$time_left".' year');
    if($now > $actual_birthday){
      $updated_birthday = $actual_birthday->modify('+1 year');
      $time_left = $updated_birthday->diff($now);
      return  $time_left->format('%m meses, %d dias');
    }else{
      return $actual_birthday->diff($now)->format('%m meses, %d dias');
    }
  }
}


// $persona = New Person("manuel","colorado","1989-12-31");
// $birth = new DateTime('1989-12-31');
// $date =  $persona->age($birth)->format('%y años, %m mes, %d dias');;
// echo $date;
// echo "<br>";
// echo $persona->days_for_birthday($birth);




 
















