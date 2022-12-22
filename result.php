<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p>hello</p>
    <img src="img1.png" alt="" srcset="">
    <h1>result announced</h1> -->
</body>
</html>


<?php
include "database.php";
// include "form.php";
$query = "SELECT * FROM `candidate` ORDER BY RAND() LIMIT 0,1";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        // printf ("%s (%s)\n", $row["name"], $row["email"]);
        echo "Congratulations!! <br> The winner of the contest is: " .$row["name"];
        echo "<br>Whose email id is: " .$row["email"];
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
// mysqli_close($conn);
?>