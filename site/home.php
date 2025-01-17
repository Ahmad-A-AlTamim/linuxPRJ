<?php

    $servername = "db";
    $username = "root";
    $password = "123";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    
<form action="post">
    <input type="text" name='name'>
    <input type="submit">
</form>
<?php
 $name = $_POST['name'];
 if($name.length > 0){
    $query = "SELECT * FROM mydb.dect WHERE word = '$name'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['word'] . "<br>";
        }
    } else {
        echo "0 results";
    }
 }
?>



</body>
</html>
