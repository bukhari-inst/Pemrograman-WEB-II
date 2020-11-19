<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUQORI - SOAL 1</title>
</head>

<body>
    <?php
    $price = 10;
    $taxRate = 0.08;
    echo 'Nilai $price: ' . $price;
    echo '<br>';
    echo 'Nilai $taxRate: ' . $taxRate;
    echo '<br>';
    echo '-----';
    echo '<br>';

    // Ketik code Anda dibawah
    $afterPrice = $price + $price * $taxRate;
    echo 'Harga setelah pajak adalah $' . $afterPrice;

    ?>
</body>

</html>