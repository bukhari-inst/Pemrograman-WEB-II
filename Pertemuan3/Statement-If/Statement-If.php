<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 99 * 99;
    $y = 77 * 77;
    // statement if
    if ($x > 9800) {
        echo 'Variable $x lebih besar dari 9800.';
    }
    if ($y > 6000) {
        echo 'Variable $y lebih besar dari 6000.';
    }

    echo "<br>";

    // else & elseif
    $age = 31;
    if ($age >= 30) {
        echo "Kamu berumur 30 tahun atau lebih.";
    } else {
        echo "Kamu berumur dibawah 30 tahun.";
    }

    echo "<br>";

    //&& dan ||
    //Menggabungkan Statement Kondisional
    // &&||orandlogical operator
    $x = 1071;
    if (($x % 3 == 0) && ($x % 7 == 0)) {
        echo "x adalah kelipatan 3 dan kelipatan 7.";
    } else if (($x % 3 == 0) && ($x % 7 != 0)) {
        echo "x adalah kelipatan 3 tetapi bukan kelipatan 7.";
    } else if (($x % 3 != 0) && ($x % 7 == 0)) {
        echo "x adalah kelipatan 7 tetapi bukan kelipatan 3.";
    } else {
        echo "x bukan kelipatan 7 atau kelipatan 3.";
    }

    echo "<br>";

    //Statement switch 
    $num = 5;
    $remainder = $num % 3;
    switch ($remainder) {
        case 0:
            echo "Sangat beruntung!!";
            break;
        case 1:
            echo "Beruntung!";
            break;
        case 2:
            echo "Sedikit beruntung.";
            break;
        default:
            echo "Tidak beruntung...";
            break;
    }
    ?>
</body>

</html>