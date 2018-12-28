<?php
  include("person.php");
  class Employee extends Person{
    
    private $hiring_date; 
    private $position; 
    private $base_salary; 

    public function __construct($name,$last_name,$birthdate,$hiring_date,$position,$base_salary)
    {
      parent::__construct($name,$last_name,$birthdate);
      $this->hiring_date = New DateTime($hiring_date);
      $this->position = $position; 
      $this->base_salary = $base_salary;
    }

    function time_working()
    {
      return $this->age($this->hiring_date);
    }

    function salary()
    {
      $age = $this->age($this->birthday)->format('%y'); 
      $time_working = $this->time_working()->format('%y');
      switch($time_working)
        {
          case($time_working < 3):
            $bonnus = ($this->base_salary*20)/100;
            $this->base_salary = $this->base_salary + $bonnus;
            if($age > 30){
              $this->base_salary = $this->base_salary + 100000;
            }
            break;
          case($time_working >= 3.0): 
            $bonnus = ($this->base_salary*40)/100;
            $this->base_salary = $this->base_salary + $bonnus;
            if($age > 30){
              $this->base_salary = $this->base_salary + 100000;
            }
            break;
             
        }
        return $this->base_salary;
    }
  }


  // $employee = New Employee("Manuel", "Colorado","1989-06-25","2015-06-25","developer",1000000);
  // echo $employee->time_working()->format('%y años, %m meses, %d dias');
  // echo $employee->salary();


