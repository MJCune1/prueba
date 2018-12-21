<?php 
  require("../db/connection.php");

  class Sell{
    
    private $id;
    private $serial;
    private $id_client;
    private $date; 
    private $hour;
    private $subtotal; 
    private $discount;
    private $tax;
    private $total; 

    public function __construct($id, $serial, $id_client, $date, $hour, $subtotal, $discount, $tax, $total)
    {
      $this->id = $id; 
      $this->serial = $serial;
      $this->id_client = $id_client; 
      $this->date = $date; 
      $this->hour = $hour; 
      $this->subtotal = $subtotal; 
      $this->discount = $discount;
      $this->tax = $tax; 
      $this->total = $total; 

    }
  
    public function create()
    {
      $sql = "INSERT INTO sells (serial, id_client, actual_date, hour, subtotal, tax, total) 
      VALUES ('".$this->description."', '".$this->base_price."')";
      $con = Connection::con();
      $response = mysqli_query($con,$sql);
      mysqli_close($con);
    }
}

