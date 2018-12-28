<?php
  class Product{
  

    public function __construct($description,$price)
    {
      $this->description = $description;
      $this->base_price = $price;
    }

    public function create()
    {
      $sql = "INSERT INTO products (description, price) VALUES ('".$this->description."', '".$this->base_price."')";
      $con = Connection::con();
      $response = mysqli_query($con,$sql);
      return $con->insert_id; 
    }
  }