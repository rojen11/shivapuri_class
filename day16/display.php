<?php 

include("connection.php");


$qry = "SELECT * FROM student;";


$result = mysqli_query($conn, $qry);




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

<table>
    <tbody>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>roll</th>
            <th>class</th>
            <th>address</th>
            <th>section</th>
            <th>gender</th>
            <th>phone_number</th>
            <th>email</th>
            <th>dob</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while($data = mysqli_fetch_assoc($result)) {

                echo "<tr>";
                echo "<td>".$data["id"]."</td>";
                echo "<td>".$data["name"]."</td>";
                echo "<td>".$data["roll"]."</td>";
                echo "<td>".$data["class"]."</td>";
                echo "<td>".$data["address"]."</td>";
                echo "<td>".$data["section"]."</td>";
                echo "<td>".$data["gender"]."</td>";
                echo "<td>".$data["phone_number"]."</td>";
                echo "<td>".$data["email"]."</td>";
                echo "<td>".$data["dob"]."</td>";
                echo "</tr>";
            }
        }

        ?>

    </tbody>

</table>

</body>
</html>