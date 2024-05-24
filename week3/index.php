<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 Demo</title>
</head>
<body>
<?php
        $hour = date('H');
        if ($hour < 12){
            echo 'Good Morning!';
        }
        else{
            echo 'Good Afternoon!';
        }



        $day = date('D');
        echo '<br>'.$day.'<br>';


        $hour = rand(1,24);
        echo $hour.'<br>';
        if($hour <= 12){
            echo 'Good Morning!';
        }
        if($hour > 12 && $hour <= 15){
            echo 'Good Afternoon!';
        }
        if($hour > 15 && $hour <= 20){
            echo 'Good Evening!';
        }
        if($hour > 20 && $hour <= 24){
            echo 'Good Night!';
        }

        $number = rand(1,100);
        echo '<br>'.$number.'<br>';


        if($number % 3 == 0 && $number % 5 == 0){
            echo 'FizzBuzz';
        }
        elseif($number % 3 == 0){
            echo 'Fizz';
        }
        elseif($number % 5 == 0){
            echo 'Buzz';
        }
        else{
            echo $number;
        }

    ?>
</body>
</html>