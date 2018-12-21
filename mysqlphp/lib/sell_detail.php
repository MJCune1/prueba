<?php 

class Sell_detail{

  private $id;
  private $id_product;
  private $id_sell;
  private $description;
  private $value;
  private $discount; 
  private $tax; 
  private $total; 

  public function __construct($id_product,$id_sell, $description, $value, $discount, $tax, $total)
  {
    $this->id_product = $id_product;
    $this->id_sell = $id_sell;
    $this->description = $description;
    $this->value = $value; 
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

  public function create($id_product,$id_sell, $description, $value, $discount, $tax, $total)
  {
    $query = "insert into sell_detail values('$id_product','$id_sell', '$description', '$value', '$discount', '$tax', '$total')";
    $response = mysql_query($query, Connection::connect());
  }
}