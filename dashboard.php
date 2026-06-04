<?php

include "session_check.php";

include "db.php";

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

  <title>Dashboard</title>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial,sans-serif;
    }

    body{

      background:#0f172a;

      color:white;

      padding:30px;
    }

    .topbar{

      display:flex;

      justify-content:space-between;

      align-items:center;

      margin-bottom:30px;
    }

    h1{
      font-size:32px;
    }

    .logout-btn{

      padding:12px 20px;

      border:none;

      border-radius:12px;

      background:#ef4444;

      color:white;

      cursor:pointer;

      text-decoration:none;

      font-weight:bold;
    }

    .table-container{

      overflow-x:auto;

      background:rgba(255,255,255,0.05);

      border-radius:20px;

      padding:20px;

      backdrop-filter:blur(10px);

      border:1px solid rgba(255,255,255,0.08);
    }

    table{

      width:100%;

      border-collapse:collapse;
    }

    th, td{

      padding:14px;

      text-align:left;

      border-bottom:
      1px solid rgba(255,255,255,0.08);
    }

    th{

      background:rgba(255,255,255,0.08);
    }

    tr:hover{

      background:rgba(255,255,255,0.04);
    }

  </style>

</head>

<body>

<div class="topbar">

  <h1>User Dashboard</h1>

  <a href="logout.php"
     class="logout-btn">
     Logout
  </a>

</div>

<div class="table-container">

<table>

  <tr>

    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>DOB</th>
    <th>Username</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Country</th>
    <th>Registered At</th>

  </tr>

  <?php

  while($row = mysqli_fetch_assoc($result)){

  ?>

  <tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['fullname']; ?></td>

    <td><?php echo $row['email']; ?></td>

    <td><?php echo $row['phone']; ?></td>

    <td><?php echo $row['dob']; ?></td>

    <td><?php echo $row['username']; ?></td>

    <td><?php echo $row['gender']; ?></td>

    <td><?php echo $row['address']; ?></td>

    <td><?php echo $row['country']; ?></td>

    <td><?php echo $row['registered_at']; ?></td>

  </tr>

  <?php
  }
  ?>

</table>

</div>

</body>

</html>