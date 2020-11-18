<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUQORI - SOAL 2</title>
</head>

<body>
    <?php
    $money = 20;
    $price = 10;
    $taxRate = 0.08;
    echo 'Nilai $money: ' . $money;
    echo '<br>';
    echo 'Nilai $price: ' . $price;
    echo '<br>';
    echo 'Nilai $taxRate: ' . $taxRate;
    echo '<br>';
    echo '-----';
    echo '<br>';
    // Ketik code Anda dibawah
    $afterPrice = $price + $price * $taxRat;
    if ($money > $afterPrice) {
        echo 'Anda dapat membeli item ini!';
    } else if ($money == $afterPrice) {
        echo 'Anda dapat membeli item ini, Tetapi uang anda akan habis!';
    } else if ($money < $afterPrice) {
        echo 'Anda tidak dapat membeli item ini!';
    }
    ?>
</body>

</html>