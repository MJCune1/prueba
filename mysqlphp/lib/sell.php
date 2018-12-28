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

    public function __construct($id_client, $date, $hour, $subtotal, $discount, $tax)
    {
      $this->id_client = $id_client; 
      $this->date = $date; 
      $this->hour = $hour; 
      $this->subtotal = $subtotal; 
      $this->discount = $discount;
      $this->tax = $tax; 
    }

    public function get_tax(){
      return $this->tax;
    }
    public function get_discount(){
      return $this->discount;
    }

    public function get_serial(){
      $query = "select count(*) AS count from `sells`";
      $con = Connection::con();
      $response = mysqli_query($con,$query);
      $array = mysqli_fetch_row($response);
      return $array[0];
    }
    public function create()
    {
      $serial = $this->get_serial() + 1;
      $sell_total_tax = ($this->subtotal * $this->tax)/100;
      $sell_total_discount = ($this->subtotal * $this->discount)/100;
      $total = ($this->subtotal - $sell_total_discount) + $sell_total_tax;
      $sql = "INSERT INTO sells (serial, id_client, actual_date, hour, subtotal, discount, tax, total) VALUES ('".$serial."','".$this->id_client."','".$this->date."','".$this->hour."','".$this->subtotal."','".$this->discount."','".$this->tax."','".$total."')";
      $con = Connection::con();
      $response = mysqli_query($con,$sql);
      return $con->insert_id; 
    }
}

