<?php
    $servername = "db";
    $username = "root";
    $password = "123";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "<form method='post'>";
    echo "<input type='text' value='enter your name' name='name'>";
    echo "<input type='submit' value='submit'>";
    echo "</form>";
    $name = $_POST['name'];
    echo $name;
    $sql = "INSERT INTO mydb.dect  VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>