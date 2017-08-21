<html>
<head>
    <title>HNG - Sample PHP</title>
</head>
<body>
<h1>Sample PHP</h1>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sampledb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>

<?php
    $sql = "SELECT * FROM hng_info";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br />";
            echo "Name: " . $row["name"];
            echo "<br />";
            echo "Gender: " . $row["gender"];
            echo "<br />";
            echo "Age: " . $row["age"];
            echo "<br />";
        }
    } else {
        echo "Empty";
    }

    $conn->close();
?>

</body>
</html>