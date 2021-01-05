<?php

    $servername = "localhost";
    $username = "root";
    $password = "babu9866";
    $dbname = "web";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO exam (id, firstname, lastname, age)
    VALUES ('$id', '$first_name', '$last_name', $age)";

    if (mysqli_query($conn, $sql)) {
        echo "New data has been added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>