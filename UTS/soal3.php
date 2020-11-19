<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUQORI - SOAL 2</title>
</head>

<body>
    <?php
    for ($b = 0; $b <= 100; $b++) {
        if ($b % 3 == 0 && $b % 5 == 0) {
            echo $b . '<br>';
            echo 'FizzBuzz';
        } else if ($b % 5 == 0) {
            echo $b . '<br>';
            echo 'Buzz';
        } else if ($b % 3 == 0) {
            echo $b . '<br>';
            echo 'Fizz';
        }
        // else {
        //     echo $b . '<br>';
        // }
        echo '<br>';
    }
    ?>
</body>

</html>