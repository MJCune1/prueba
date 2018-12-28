<?php 
error_reporting(E_ALL);
ini_set("display_errors","On");


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


  public function create()
  {
    $sql = "INSERT INTO `sells_detail`(`description`, `price`, `discount`, `tax`, `total`, `productid`, `sellid`)  VALUES ('".$this->description."','".$this->price."','".$this->discount."','".$this->tax."','".$this->total."','".$this->product_id."','".$this->sell_id."')";
    $con = Connection::con();
    $response = mysqli_query($con,$sql);
    return $con->insert_id;
  }
}