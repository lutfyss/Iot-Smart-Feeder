<?php 
    // connection to database

    $conn = mysqli_connect("localhost", "root", "" , "smartfeeder");

    //read from tb_sensor
    $sql = mysqli_query($conn, "select * from tb_sensor order by id
        desc");    // last data will be on top 


        //read data on the top

        $data = mysqli_fetch_array($sql);
        $motion = $data['motion'];


        // if there is not value yet the value will always be 0
        if($motion== "") $motion = 0;


        //output temp

        echo $motion;

?>