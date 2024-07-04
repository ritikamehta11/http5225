<?php


$connect = mysqli_connect('localhost', 'root', 'root', 'places_toronto');
if (!$connect) {
  die("Connection Failed: " . mysqli_connect_error());
}

