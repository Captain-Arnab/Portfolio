<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Counter";
    $conn = new mysqli($servername, $username, $password, $dbname, 3308);
    $visits;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE count SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM count WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
            $visits = $row["visits"];
            echo $visits;
        }
    } else {
        echo "no results";
    }
    
?>