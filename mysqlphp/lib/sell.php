<?php 
  class Sell{
    
    private $serial;
    private $id_client;
    private $date; 
    private $hour;
    private $subtotal; 
    private $discount;
    private $tax;
    private $total; 

    public function __construct($serial, $id_client, $date, $hour, $subtotal, $discount, $tax, $total)
    {
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
      $sql = "INSERT INTO sells (serial, id_client, actual_date, hour, subtotal, discount, tax, total) VALUES ('".$this->serial."','".$this->id_client."','".$this->date."','".$this->hour."','".$this->subtotal."','".$this->discount."','".$this->tax."','".$this->total."')";
      $con = Connection::con();
      $response = mysqli_query($con,$sql);
      return $con->insert_id; 
    }
}

