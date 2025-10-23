<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wisata</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            background: #fff;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 50%; 
        }
        th, td {
            border: 1px solid #000;
            padding: 4px 8px; 
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            background-color: #fff;
        }
    </style>
</head>
<body>

<h2>Daftar Wisata</h2>

<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Ambil data dari getwisata.php
$send = curl("http://localhost/json/getwisata.php");

// Ubah JSON ke array
$data = json_decode($send, TRUE);

if (!empty($data)) {
    echo "<table>";
    echo "<tr><th>KOTA</th><th>LANDMARK</th><th>TARIF</th></tr>";
    foreach($data as $row){
        echo "<tr>";
        echo "<td>".$row['kota']."</td>";
        echo "<td>".$row['landmark']."</td>";
        echo "<td>".$row['tarif']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center; color:red;'>Data tidak tersedia.</p>";
}
?>

</body>
</html>
