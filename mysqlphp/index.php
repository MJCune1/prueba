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
      <tr>
        <td><label>nombre</label></td>
        <td><input type="text" name="description"></td>
      </tr>
      <tr>
        <td><label>price</label></td>
        <td><input type="text" name="price"></td>
      </tr>
      <tr>
        <td><button type="submit">Enviar</button></td>
      </tr>  
      <!-- </tr>
        <td><label>id_cliente</label></td>
        <td><input type="text" name="id_client">
      </tr>
      </tr>
        <td><label>fecha</label></td>
        <td><input type="text" name="actual_date">
      </tr>
      </tr>
        <td><label>hora</label></td>
        <td><input type="text" name="hour">
      </tr>         -->
    </table>
  </form>
    
</body>
</html>