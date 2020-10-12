<?php
include "connect.php";

if(isset($_POST['insert'])){
    $merek = $_POST['merek'];
    $warna = $_POST['warna'];
    $jml = $_POST['jumlah'];

    $sql = "INSERT INTO printer (nama_merek, warna, jumlah) values ('$merek', '$warna', '$jml')";

    $result = $conn->query($sql);

    if($result === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>