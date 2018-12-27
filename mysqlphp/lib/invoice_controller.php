<?php
require("../db/connection.php");
require("product.php");
require("sell.php");
require("sell_detail.php");
class Invoice
{
  public function register_invoice()

  {
    $sell =  New Sell($_POST["serial"], $_POST["id_client"],$_POST["actual_date"], $_POST["hour"], $_POST["subtotal"], $_POST["discount"], $_POST["tax"], $_POST["total"]);
    $sell_id  = $sell->create();  
    $cont = 0; 
    foreach ($_POST["product_description"] as $item){
      $product =  New Product($item,$_POST["product_price"][$cont]);
      $product_id = $product->create();
      $sell_detail = New Sell_detail($_POST["subtotal"], $_POST["price"],$_POST["discount"],$_POST["tax"],$_POST["total"],$sell_id,$product_id);
      $sell_detail->create();
      // echo $product_id;
      $cont++;
      echo "<br>";
      
    }

    
    
    // while($item <= count($_POST["product"])){
      
    // }
    
    
  //   // don't forget to include try and catch in the model 
  //   $sell = new Sell(1, 20-12-2012, $subtotal, $POST["discount"], 16, 200);
  //   $sell -> create();
  //   $detail = New Sell_detail(1,1, "compra harina", 200, $POST["discount"], 12, 23);
  //   $detail -> create();
  }
}

$set_invoice = New Invoice();
$set_invoice->register_invoice();

