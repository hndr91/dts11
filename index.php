<?php include "getData.php"; ?>
<html>
<head>
    <title>Lat CRUD</title>
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
            <th>Action</th>
        </tr>
        <?php
            $countData = 0;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $countData++;
                    echo "<tr>";
                    echo "<td>" .$countData. "</td>";
                    echo "<td>" .$row['nama_merek']. "</td>";
                    echo "<td>" .$row['warna']. "</td>";
                    echo "<td>" .$row['jumlah']. "</td>";
                    echo "<td>Edit | Delete</td>";
                    echo "</tr>"; 
                }
            }
        ?>
    </table>
    <br/>
    <a href="formPrinter.php">Tambah Data</a>
</body>
</html>