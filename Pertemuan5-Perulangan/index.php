<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan - MOCHAMAD BUQORI</title>
</head>

<body>
    <?php
    echo "for Loop dan Iterasi <br>";
    // Ketik loop for dibawah
    for ($i = 51; $i <= 100; $i++) {
        echo $i;
        echo '<br>';
    }

    echo '<br>';
    echo "while Loop <br>";
    // Deklarasikan variable $i 
    $i = 2;

    // Ketik loop while dibawah
    while ($i <= 100) {
        if ($i % 2 == 0) {
            echo $i;
            echo '<br>';
        }
        $i++;
    }

    echo '<br>';
    // Ketik loop for dibawah
    echo "Break <br>";
    for ($i = 1; $i <= 1000; $i++) {
        if ($i > 500) {
            break;
        }

        echo $i;
        echo '<br>';
    }

    echo '<br>';
    echo "continue <br>";
    // Tulis loop for dibawah
    for ($i = 1; $i <= 1000; $i++) {
        if ($i % 3 == 0) {
            continue;
        }

        echo $i;
        echo '<br>';
    }

    echo '<br>';
    echo "Foreach <br>";
    $scores = array('Matematika' => 70, 'Bahasa' => 90, 'Sains' => 80);

    // Tulis loop foreach dibawah
    foreach ($scores as $key => $value) {
        echo $key . ': ' . $value . ' ';
    }
    ?>
</body>

</html>