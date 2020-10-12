<?php
include "constant.php";

function connectDB() {
    $conn = new mysqli(dbhost, dbuser, dbpass, dbname);
    if($conn->connect_errno) {
        echo "Failed connecto to MySQL : (" . $conn->connect_errno . ")" . $conn->connect_error;
    }

    return $conn;
}

function closeDB($conn) {
    $conn->close();
}
?>