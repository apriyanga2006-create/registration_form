<?php

session_start();

include "db.php";

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE username='$username'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $user = mysqli_fetch_assoc($result);

    if(
        password_verify(
            $password,
            $user['password']
        )
    ){

        $_SESSION['user'] =
            $user['username'];

        header("Location: dashboard.php");

    }else{

        echo "
        <h2 style='font-family:Arial;text-align:center;margin-top:100px;color:red;'>
            Wrong Password
        </h2>
        ";

    }

}else{

    echo "
    <h2 style='font-family:Arial;text-align:center;margin-top:100px;color:red;'>
        User Not Found
    </h2>
    ";

}

?>