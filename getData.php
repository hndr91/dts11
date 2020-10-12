<?php
include "connect.php";

$sql = "SELECT * FROM printer WHERE isDeleted = 0";
$result = $conn->query($sql);

?>