<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops week4</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row">
        
          <?php
            function getUsers(){
              $url = "users.json";
              $data = file_get_contents($url);
              return json_decode($data, true);
            }
        
            $users = getUsers();
            if(!empty($users)){
              for($i = 0; $i < count($users); $i++){
                echo
                '<div class="col-md-3">
                  <div class="card" style="">
                  <div class="card-body">
                    <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                    <p class="card-text">Username - ' . $users[$i]['username'] . '</p>
                    <p class="card-text">Email - ' . $users[$i]['email'] . '</p>
                    <p class="card-text">Phone - ' . $users[$i]['phone'] . '</p>
                    <p class="card-text">Website - ' . $users[$i]['website'] . '</p>
                    <h5 class="card-title">Address</h5>
                    <p class="card-text">Street - ' . $users[$i]['address']['street'] . '</p>
                    <p class="card-text">Suite - ' . $users[$i]['address']['suite'] . '</p>
                    <p class="card-text">City - ' . $users[$i]['address']['city'] . '</p>
                    <p class="card-text">Zipcode - ' . $users[$i]['address']['zipcode'] . '</p>
                    <p class="card-text">Geo -lat: ' . $users[$i]['address']['geo']['lat'] . '</p>
                    <p class="card-text">Geo -lng: ' . $users[$i]['address']['geo']['lng'] . '</p>
                    <h5 class="card-title">Company</h5>
                    <p class="card-text">Name - ' . $users[$i]['company']['name'] . '</p>
                    <p class="card-text">CatchPhrase - ' . $users[$i]['company']['catchPhrase'] . '</p>
                    <p class="card-text">Bs - ' . $users[$i]['company']['bs'] . '</p>
                  </div>
                </div>
                </div>';
              }
            }

            if (!empty($users)) {
              foreach ($users as $user) {
                  echo
                  '<div class="col-md-3">
                <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">' . $user['name'] . '</h5>
                    <p class="card-text">Username - ' . $user['username'] . '</p>
                    <p class="card-text">Email - ' . $user['email'] . '</p>
                    <p class="card-text">Phone - ' . $user['phone'] . '</p>
                    <p class="card-text">Website - ' . $user['website'] . '</p>
                    <h5 class="card-title">Address</h5>
                    <p class="card-text">Street - ' . $user['address']['street'] . '</p>
                    <p class="card-text">Suite - ' . $user['address']['suite'] . '</p>
                    <p class="card-text">City - ' . $user['address']['city'] . '</p>
                    <p class="card-text">Zipcode - ' . $user['address']['zipcode'] . '</p>
                    <p class="card-text">Geo -lat: ' . $user['address']['geo']['lat'] . '</p>
                    <p class="card-text">Geo -lng: ' . $user['address']['geo']['lng'] . '</p>
                    <h5 class="card-title">Company</h5>
                    <p class="card-text">Name - ' . $user['company']['name'] . '</p>
                    <p class="card-text">CatchPhrase - ' . $user['company']['catchPhrase'] . '</p>
                    <p class="card-text">Bs - ' . $user['company']['bs'] . '</p>
                  </div>
              </div>
              </div>';
              }
          }
          ?>
        </div>
      </div>
    </div>
</body>
</html>