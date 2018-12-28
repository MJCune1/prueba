<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Factura</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <form action="lib/invoice_controller.php" method="post">
    <table>
      <tr><td><strong>producto 1</strong></td></tr>
      <tr>
        <td><label>nombre</label></td>
        <td><input type="text" name="product_description[]"></td>
      </tr>
      <tr>
        <td><label>precio</label></td>
        <td><input type="text" name="product_price[]"></td>
      </tr><tr>
      <tr><td><strong>producto 2</strong></td></tr>
      <tr> 
        <td><label>nombre</label></td>
        <td><input type="text" name="product_description[]"></td>
      </tr>
      <tr>
        <td><label>precio</label></td>
        <td><input type="text" name="product_price[]"></td>
      </tr><tr></tr>
      <tr>
        <td><label>id_cliente</label></td>
        <td><input type="text" name="id_client" placeholder="codigo cliente"></td>
      </tr>
      <tr>
      <tr>
        <td><label>descripción de la compra</label></td>
        <td><input type="text" name="description"></td>
      </tr>
        <td><label>fecha</label></td>
        <td><input type="text" name="actual_date" placeholder="varchar">
      </tr>
      <tr>
        <td><label>hora</label></td>
        <td><input type="text" name="hour" placeholder="varchar">
      </tr>        
      <tr>
        <td><label>descuento</label></td>
        <td><input type="text" name="discount" placeholder="numérico">
      </tr>
      <tr>
        <td><label>I.V.A</label></td>
        <td><input type="text" name="tax" placeholder="numérico">
      </tr>
      <tr>
        <td><button type="submit">Enviar</button></td>
      </tr>                                     
    </table>
  </form>
    
</body>
</html>