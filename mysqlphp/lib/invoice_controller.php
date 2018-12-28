<?php
require("dependencies.php");

class Invoice
{
  public function create()
    {
      $subtotal = 0;
      foreach($_POST["product_price"] as $prices){
        $subtotal += $prices;
      }
      $sell =  New Sell($_POST["id_client"],$_POST["actual_date"], $_POST["hour"], $subtotal, $_POST["discount"], $_POST["tax"], "");
      $tax = $sell->get_tax();
      $discount_value = $sell->get_discount();
      $sell_id  = $sell->create();  
      $cont = 0; 
      foreach ($_POST["product_description"] as $item){
        $product =  New Product($item,$_POST["product_price"][$cont]);
        $product_id = $product->create();
        //preparing values to insert sell_detail
        $product_tax = ($_POST["product_price"][$cont]*$tax)/100;
        $discount_product = ($_POST["product_price"][$cont]*$discount_value)/100;
        $total = ($_POST["product_price"][$cont] - $discount_product) + $product_tax;
        //instance and inserting of set_detail
        $sell_detail = New Sell_detail($_POST["description"], $_POST["product_price"][$cont],$discount_product,$product_tax,$total,$sell_id,$product_id);
        $sell_detail->create();
        $cont++;      
      }
      return $sell_id;
    }

    function show($id)
      {
      $query = "SELECT * FROM sells_detail WHERE sellid = '".$id."'";
      $con = Connection::con();
      $response = mysqli_query($con,$query);
        echo "<table border='1'>";
                echo "<tr>
                  <td>Descripción</td>
                  <td>Precio</td>
                  <td>Descuento</td>
                  <td>IVA</td>
                  <td>Total</td>
                  <td>IDProducto</td>
                  </tr>";
             $total_invoice = 0;
             while($array = mysqli_fetch_row($response)){
               $total_invoice += $array[5]; 
             echo "<tr>
                  <td>".$array[1]."</td>
                  <td>".$array[2]."</td>
                  <td>".$array[3]."</td>
                  <td>".$array[4]."</td>
                  <td>".$array[5]."</td>
                  <td>".$array[6]."</td>
                </tr>";
              }; 
              echo "<tr>
                      <td><strong>total factura</strong></td>
                      <td colspan='5'>".$total_invoice."</td>
                    </tr>";
              echo "</table>";
    }
  }


$invoice = New Invoice();
$id = $invoice->create();
$invoice->show($id);

