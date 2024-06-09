<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySQL & php</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost','root','root','HTTP5225Week5');

        if(!$connect) {
            echo "Error code: " . mysqli_connect_errno();
            echo "Error name: " . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT `Name`, `Hex` FROM colors';

        $results = mysqli_query($connect, $query);

        if(!$results) {
            echo 'Error Message ' . mysqli_error($connect);
            exit;
        }
        else {
            echo 'The query found ' . mysqli_num_rows($results);
        }

        foreach($results as $result) {
            echo '<h1>' . $result['Name'] . '</h1>';
            echo '<div style="height: 30px; width: 85px; background: ' . $result['Hex'] . '"></div>';
        }
    ?>
</body>
</html>