<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (!isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["cpassword"])) {
    echo "All fields must be set";
  } else {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($password != $cpassword) {
      echo "password and confirm password doesn't match.";
    } else {

      $hashed_password = password_hash($password, PASSWORD_BCRYPT);

      $qry = "INSERT INTO user(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

      $res = mysqli_query($conn, $qry);

      if (!$res) {
        echo "Failed to register";
        echo mysqli_error($conn);
        die();
      }
    }
  }
}

?>
<html>

<head>
</head>

<body>
  <form method="POST">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" />
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" />
    <label for="email">Email</label>
    <input type="email" name="email" id="email" />
    <label for="password">Password</label>
    <input type="password" name="password" id="password" />
    <label for="cpassword">Confirm Password</label>
    <input type="password" name="cpassword" id="cpassword" />
    <input type="submit" value="submit" />

  </form>
</body>

</html>