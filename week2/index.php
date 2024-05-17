<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    
    <?php
    echo "<h1>Week 2 php demo</h1>";  //semicolon is important
    //static text and html both works on echo
    echo "let\'s edit it"; //use escape character to avoid error
    echo '<img src="" alt="">'; //add a placeholder img here
    $var1 = 'apple';
    $var2 = "mango";
    echo ' '.$var1.' '.$var2;
   

    $fruits["fruit1"] = "grapes";
    $fruits["fruit2"] = "pineapple";

    echo ' '.$fruits["fruit2"];

    
    ?>
</body>
</html>