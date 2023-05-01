<?php

session_start();

$data = $_SESSION['deta'];

foreach($data as $info){
    echo $info."<br>";
}


?>