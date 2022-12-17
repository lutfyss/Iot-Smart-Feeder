<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "smartfeeder";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";


$temperature = $humidity = $distance = $motion =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temperature = test_input($_POST["RAIN"]);
        $humidity = test_input($_POST["PH"]);
        $distance = test_input($_POST["PH"]);
        $motion = test_input($_POST["PH"]);
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO tb_sensor (RAIN, PH)
        VALUES ('" . $RAIN . "', '" . $PH . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();


}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}