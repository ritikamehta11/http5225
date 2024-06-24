<?php

include ("functions.php");
require ("../reusables/connect.php");
$id = $_GET["id"];
$query = "DELETE FROM schools WHERE `id` = '$id'";

$school = mysqli_query($connect, $query);

if ($school) {
    set_message("School delete successfuly", "danger");
    header("Location: ../index.php");
} else {
    echo "Failed: ", mysqli_error($connect);
}

