<?php
include ("reusables/connect.php");
include ('reusables/nav.php');
include ('inc/functions.php');

if (isset($_POST['login'])) {
  // $query = 'SELECT * FROM users  WHERE `email ` =  " ' . $_POST['email'] . ' " AND `password ` = "' . md5($_POST['password']) . '"  LIMIT 1';
  $query = "SELECT * FROM users WHERE `email` = '" . mysqli_real_escape_string($connect, $_POST['email']) . "' AND `password` = '" . md5($_POST['password']) . "' LIMIT 1";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result)) {
    $record = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $record['id'];
    $_SESSION['name'] = $record['name'];
    $_SESSION['email'] = $record['email'];
    header('Location: index.php');
    die();
  } else {
    set_message("No records found", "danger");
    header("Location: login.php");
    die();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="col">
    <?php echo get_message(); ?>
  </div>
  <form method="POST" action="login.php" class="col-md-4 offset-md-4">
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email">

    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-primary" name="login">Login</button>
  </form>

</body>

</html>