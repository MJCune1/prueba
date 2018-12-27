<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <form action="lib/invoice_controller.php" method="post">
    <table>
      <tr><td>producto 1</td></tr>
      <tr>
        <td><label>nombre</label></td>
        <td><input type="text" name="product_description[]"></td>
      </tr>
      <tr>
        <td><label>price</label></td>
        <td><input type="text" name="product_price[]"></td>
      </tr> 
  
      <tr>
      <tr><td>producto 2</td></tr>
      <tr> 
        <td><label>nombre</label></td>
        <td><input type="text" name="product_description[]"></td>
      </tr>
      <tr>
        <td><label>price</label></td>
        <td><input type="text" name="product_price[]"></td>
      </tr>
      <tr>
        <td>consecutivo</td>
        <td><input type="text" name="serial"></td>
      </tr> 
      <tr>
        <td><label>id_cliente</label></td>
        <td><input type="text" name="id_client"></td>
      </tr>
      <tr>
      <tr>
        <td><label>descripcion de la compra</label></td>
        <td><input type="text" name="description"></td>
      </tr>
        <td><label>fecha</label></td>
        <td><input type="text" name="actual_date">
      </tr>
      <tr>
        <td><label>hora</label></td>
        <td><input type="text" name="hour">
      </tr>        
      <tr>
          <td>precio</td>
          <td><input type="text" name="price"></td>
      </tr>
      <tr>
        <td><label>subtotal</label></td>
        <td><input type="text" name="subtotal">
      </tr>
      <tr>
        <td><label>discount</label></td>
        <td><input type="text" name="discount">
      </tr>
      <tr>
        <td><label>tax</label></td>
        <td><input type="text" name="tax">
      </tr>
      <tr>
        <td><label>total</label></td>
        <td><input type="text" name="total">
      </tr>
      <tr>
        <td><button type="submit">Enviar</button></td>
      </tr>                                     
    </table>
  </form>
    
</body>
</html>