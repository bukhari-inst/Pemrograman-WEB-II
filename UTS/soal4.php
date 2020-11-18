<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUQORI - SOAL 2</title>
</head>

<body>
    <?php
    $prices = array(10, 6, 7, 8);
    echo 'Nilai $prices: ';
    foreach ($prices as $price) {
        echo $price . ' ';
    }
    echo '<br>';
    echo '-----';
    echo '<br>';
    // Ketik code Anda dibawah
    $priceSum = array_sum($prices);
    echo 'Harga total adalah $' . $priceSum;
    ?>
</body>

</html>