<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>

<body>
    <?php
    //Latihan php
    echo "Hello World - Echo<br>";
    Print "Hello World - Print<br>";

    //konstatnta dan variabel
    define("Pi", 3.142857142857143);
    echo Pi."<br>";
    $arr = [
    
    ]
    $tahun = 2020;
    echo "Tahun $tahun.<br>";
    
    //operator aritmatika
    $pengurangan = 3033032020 - 3033031924;
    $penjumlahan = 3033032020 + 3033031924;
    $perkalian = 3033032020 * 3033031924;
    $pembagian = 3033032020 / 3033031924;
    $hasilbagi = 200 % 4;

    echo "3033032020 - 3033031924 = $pengurangan<br>";
    echo "3033032020 + 3033031924 = $penjumlahan<br>";
    echo "3033032020 * 3033031924 = $perkalian<br>";
    echo "3033032020 / 3033031924 = $pembagian<br>";
    echo "200 % 4 = $hasilbagi<br>";
    
    //Operator Assigment
    $tambahdua = 4;
    $kurangdua = 6;
    $tambahdua += 2;
    $tambahdua = $tambahdua + 2;
    $kurangdua -= 2;
    echo "tambahdua $tambahdua.<br>";
    echo "kurangdua $kurangdua.<br>";
    ?>
</body>

</html>