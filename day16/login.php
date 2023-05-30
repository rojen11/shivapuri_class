<?php

    include("connection.php");

    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (!isset($email) || !isset($password)) {
            echo "Email and password is required!";
        } else {
            $qry = "SELECT email, password from user WHERE email='$email'";

            $res = mysqli_query($conn, $qry);

            if (mysqli_num_rows($res) > 0) {
                $data = mysqli_fetch_assoc($res);

                if (password_verify($password, $data["password"])) {
                    // user found
                    $_SESSION["loggedInUser"] = $data["email"];
                    echo "Logged in";
                    die();
                } else {
                    // invalid password
                    echo "Invalid email/password";
                }
            } else {
                // user not found
                    echo "User not found";
            }


        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">
    </form>
    
</body>
</html>