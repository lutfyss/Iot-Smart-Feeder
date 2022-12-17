<?php

$conn = mysqli_connect("localhost", "root", "" , "smartfeeder");




$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$distance = $_GET['distance'];
$motion = $_GET['motion'];

//store in database

//return id to 1 if the value blank
mysqli_query($conn, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

$store = mysqli_query($conn, "insert into tb_sensor(temperature,
humidity,distance,motion)values('$temperature', '$humidity', '$distance','$motion')");


//test 

if($store)
echo "Success sent";
else
echo "Failed sent";



?>