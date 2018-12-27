<?php 

class Sell_detail{


  private $product_id;
  private $sell_id;
  private $description;
  private $price;
  private $discount; 
  private $tax; 
  private $total; 

  public function __construct($description, $price, $discount, $tax, $total,$sell_id,$product_id)
  {
    $this->product_id = $product_id;
    $this->sell_id = $sell_id;
    $this->description = $description;
    $this->price = $price; 
    $this->discount = $discount;
    $this->tax = $tax; 
    $this->total = $total; 
  }

  public function getProduct()
  {
    $this->id_product;
  }

  public function getDescription()
  {
    $this->description; 
  }

  public function getSell()
  {
    $this->id_sell;
  }

  public function getValue()
  {
    $this->value;
  }

  public function getDiscount()
  {
    $this->discount; 
  }

  public function getTax()
  {
    $this->tax;
  }

  public function getTotal()
  {
    $this->total;
  }

  public function create()
  {
    $sql = "INSERT INTO sells_detail (description, price, discount, tax, total, sell_id, product_id) VALUES ('".$this->description."','".$this->price."','".$this->discount."','".$this->tax."','".$this->total."','".$this->sell_id."','".$this->product_id."')";
    $con = Connection::con();
    $response = mysqli_query($con,$sql);
    return $con->insert_id;
  }
}