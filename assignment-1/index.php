<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css" type="text/css">
  <title>Document</title>
</head>

<body>
  <?php
  require ("reusables/conn.php");
  $query = "SELECT * FROM venue  INNER JOIN venue_details ON `venue`.`venue_id` = `venue_details`.`venue_id`";

  $venueS = mysqli_query($connect, $query);
  // foreach ($venue as $row) {
  //   echo $row['NAME'];
  // }
  
  ?>
  <h1>Places of Attraction in Toronto!</h1>
  <div class="cards">

    <?php foreach ($venueS as $row) {

      echo "<a href='https://www.google.com' > <div class='card'> <h4> " . $row['NAME'] . "</h4>";
      echo $row['CATEGORY'] . "<br/>";
      // echo $row['PHONE'] . "<br/>";
      echo "<span class='bold-subhead'>Description: </span>" . $row['ATTRACTION'];
      echo "</div></a> ";
    } ?>

  </div>



</body>

</html>