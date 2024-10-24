<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php

        $myVal = 2;
        $myNewVal = "3";

        $val = 3;

        $a = 5;

        if ($myVal < $myNewVal && $val === $myNewVal) {
            echo "Your Condition is true ".++$a;
        } else {
            echo "Your Condition is false ";
        }

        ?>
    </h1>
</body>

</html>