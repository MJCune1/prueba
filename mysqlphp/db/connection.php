<?php 
error_reporting(E_ALL);
ini_set("display_errors","On");

class Connection
{
  public static function con()
  {
    $servername = "localhost";
    $username = "root";
    $password = "123";
    $db = "facturacion";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    echo "Connected successfully";
    return $conn;  
  }
  
}