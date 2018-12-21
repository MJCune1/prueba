<?php
require("product.php");
require("sell.php");

class Invoice
{
  public function register_invoice()
  {
    $product =  New Product($_POST["description"], $_POST["price"]);
    $sell =  New Sell($_POST["description"], $_POST["price"]);
    $product->create();
  //   // don't forget to include try and catch in the model 
  //   $sell = new Sell(1, 20-12-2012, $subtotal, $POST["discount"], 16, 200);
  //   $sell -> create();
  //   $detail = New Sell_detail(1,1, "compra harina", 200, $POST["discount"], 12, 23);
  //   $detail -> create();
  }
}

$set_invoice = New Invoice();
$set_invoice->register_invoice();

