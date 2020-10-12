<?php 
include "printerModel.php"; 

$getResult = getPrinter();

?>
<html>
<head>
    <title>Sample CRUD</title>
    <style>
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Merek</th>
            <th>Warna</th>
            <th>Jumlah</th>
        </tr>
        <?php
            $countRows = 0;
            if($getResult->num_rows > 0) {
                while($row = $getResult->fetch_assoc()) {
                    $countRows++;
                    echo "<tr>";
                    echo "<td>" . $countRows . "</td>";
                    echo "<td>" . $row["nama_merek"] . "</td>";
                    echo "<td>" . $row["warna"] . "</td>";
                    echo "<td>" . $row["jumlah"] . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <br/>
    <a href="formPrinter.php">Tambah</a>
</body>
</html>