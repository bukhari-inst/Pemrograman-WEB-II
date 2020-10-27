<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHIAZMIE A.N.-Array</title>
</head>

<body>
    <?php

    // Buat array dibawah
    $colors = array('Merah', 'Biru', 'Kuning');

    echo '$colors[0]: ', $colors[0];
    echo "<br>";
    $colors[] = 'Putih';

    echo '$colors[3]: ', $colors[3];
    echo "<br>";

    // Definisikan array associative dibawah
    $scores = array(
        'Matematika' => 70, 'Bahasa' => 90,
        'Sains' => 80
    );
    $scores['Sains'] += 5;
    echo '[Sains:] ', $scores['Sains'];

    ?>
</body>

</html>