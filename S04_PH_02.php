<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>


    <h1>
        <?php

        // for (initialization; condition; increment) {
        // Code to execute
        // }
        // for ($i = 1; $i <= 10; $i++) {
        //     echo $i . "<br>";
        // }



        // While Loop
        // $tankIsFull = false;
        // $gallonsAdded = 0;
        // while (!$tankIsFull) {
        //     $gallonsAdded++;
        //     echo "Added gallon $gallonsAdded to the tank.<br>";
        //     if ($gallonsAdded >=10 ) {
        //         $tankIsFull = true;
        //     }
        // }



        // Do..While Look
        // $i = 6;
        // do {
        //     echo "The value of i is: $i<br>";
        //     $i++;
        // } while ($i <= 5);


        // forEach Loop
        $friendsEmails = ["alice@example.com", "bob@example.com", "carol@example.com"];
        foreach ($friendsEmails as $email) {
            echo "Sending email to: $email<br>";
        }

        echo "<hr>";

        $empEmails = ["emp@example.com", "emp2@example.com", "emp3@example.com"];
        foreach ($empEmails as $email) {
            echo "Sending email to: $email<br>";
        }



        ?>
    </h1>


</body>

</html>