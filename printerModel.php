<?php
include "connect.php";

if(isset($_POST['insert'])) {
    $merek = $_POST['merek'];
    $warna = $_POST['warna'];
    $jml = $_POST['jumlah'];
    postPrinter($merek, $warna, $jml);
}


function getPrinter() {
    $conn = connectDB();
    $sql = "SELECT * FROM printer WHERE isDeleted = 0";
    $result = $conn->query($sql);
    closeDB($conn);
    return $result;
}

function postPrinter($merek, $warna, $jml) {
    $conn = connectDB();
    
    $merek = $conn->real_escape_string($merek);
    $warna = $conn->real_escape_string($warna);
    $jml = $conn->real_escape_string($jml);
    
    $sql = "INSERT INTO printer (nama_merek, warna, jumlah) VALUES ('$merek', '$warna', '$jml')";
    $result = $conn->query($sql);

    if($result === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeDB($conn);
}


?>