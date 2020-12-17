<?php

    $conn = new mysqli('localhost', 'root', 'syclone', 'gdlwebcamp_db');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

?>