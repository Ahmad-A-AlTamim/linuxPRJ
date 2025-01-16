<?php
    $servername = "db";
    $username = "root";
    $password = "123";
    $conn = mysqli_connect($servername, $username, $password);
    echo "<h1>Fuck Baker</h1>";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "Connection failed";
    }
    echo "Connected successfully";
    $query = "SELECT * FROM mydb.dect";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo $row['word'] . "<br>";
    }
    ?>