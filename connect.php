<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "produk";

include "constant.php";

// Create connection
$conn = new mysqli(dbhost, dbuser, dbpass, dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>