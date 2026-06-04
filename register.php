<?php
// register.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed");
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>405 Method Not Allowed</title></head><body>";
    echo "<h1>405 Method Not Allowed</h1>";
    echo "<p>This page only accepts POST requests from the registration form.</p>";
    echo "<p>Request method: " . htmlspecialchars($_SERVER['REQUEST_METHOD']) . "</p>";
    echo "<p>Ensure you are submitting the form via <code>method='POST'</code> and opening the page through the server, e.g. <code>http://localhost/registration_form/index.html</code>.</p>";
    echo "</body></html>";
    exit;
}

include "db.php";

/* Get Form Data */

$fullname = $_POST['fullname'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$dob = $_POST['dob'];

$username = $_POST['username'];

$password = $_POST['password'];

$gender = $_POST['gender'];

$address = $_POST['address'];

$country = $_POST['country'];

/* Encrypt Password */

$hashedPassword =
    password_hash(
        $password,
        PASSWORD_DEFAULT
    );

/* Insert Query */

$sql = "INSERT INTO users (

    fullname,
    email,
    phone,
    dob,
    username,
    password,
    gender,
    address,
    country

)

VALUES (

    '$fullname',
    '$email',
    '$phone',
    '$dob',
    '$username',
    '$hashedPassword',
    '$gender',
    '$address',
    '$country'

)";

/* Execute Query */

if(mysqli_query($conn, $sql)){

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

  <title>Success</title>

  <style>

    body{

        margin:0;

        height:100vh;

        display:flex;

        justify-content:center;

        align-items:center;

        background:#0f172a;

        font-family:Arial,sans-serif;

        color:white;
    }

    .success-box{

        padding:40px;

        border-radius:20px;

        text-align:center;

        background:rgba(255,255,255,0.08);

        backdrop-filter:blur(20px);

        border:1px solid rgba(255,255,255,0.1);

        box-shadow:
            0 10px 40px rgba(0,0,0,0.3);
    }

    h1{

        margin-bottom:10px;

        font-size:32px;
    }

    p{

        color:#ddd;
    }

  </style>

</head>

<body>

  <div class="success-box">

    <h1>
      Registration Successful 🎉
    </h1>

    <p>
      Your account has been created successfully.
    </p>

  </div>

</body>

</html>

<?php

}else{

    echo "Error : " . mysqli_error($conn);

}

?>