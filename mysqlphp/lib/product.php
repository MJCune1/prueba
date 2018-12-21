<?php
  require("../db/connection.php");

  class Product{
  
    private $description; 
    private $base_price;

    public function __construct($description,$price)
    {
      $this->description = $description;
      $this->base_price = $price;
    }

    public function getDescription()
    {
      $this->description;  
    }

    public function getBase_price()
    {
      $this->base_price;
    }

    public function create()
    {
      $sql = "INSERT INTO products (description, price) VALUES ('".$this->description."', '".$this->base_price."')";
      $con = Connection::con();
      $response = mysqli_query($con,$sql);
      mysqli_close($con);
    }
  }