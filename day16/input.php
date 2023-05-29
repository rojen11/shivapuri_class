<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $class = $_POST["class"];
    $address = $_POST["address"];
    $section = $_POST["section"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];


    $qry = "INSERT INTO student (name, roll, class, address, section, gender, phone_number, email, dob) VALUES ('$name', $roll, $class, '$address', '$section', '$gender', '$phone', '$email', '$dob');";


    $res = mysqli_query($conn, $qry);

    if (!$res) {
        echo mysqli_error($conn);
    }else {
        echo "Data successfully inserted in DB";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="roll">Roll</label>
            <input type="number" id="roll" name="roll">
        </div>
        <div>
            <label for="section">Section</label>
            <input type="text" id="section" name="section">
        </div>
        <div>
            <label for="class">Class</label>
            <input type="number" id="class" name="class">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address">    
        </div>
        <div>
            <span>Gender</span>
            <label for="male">Male</label>
            <input type="radio" id="male" value="male" name="gender">
            <label for="female">Female</label>
            <input type="radio" id="female" value="female" name="gender">
        </div>

        <div>
            <label for="phone">phone</label>
            <input type="text" id="phone" name="phone" >
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="dob">dob</label>
            <input type="date" id="dob" name="dob">
        </div>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>