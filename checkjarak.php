<?php 
    // connection to database

    $conn = mysqli_connect("localhost", "root", "" , "smartfeeder");

    //read from tb_sensor
    $sql = mysqli_query($conn, "select * from tb_sensor order by id
        desc");    // last data will be on top 


        //read data on the top

        $data = mysqli_fetch_array($sql);
        $distance = $data['distance'];


        // if there is not value yet the value will always be 0
        if($distance== "") $distance = 0;


        //output temp

        echo $distance;

?>