<?php

    require('db_cred.php');
    echo "connecting to mysqli database";
    // database connection
    $connect = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD,   DB_NAME);

    if (mysqli_connect_errno()){
        // echo "not connected to databse due to : "+mysqli_connect_errno();
    }
    else{
        // echo "Connection Successful!";
    }



?>