<?php

if(isset($_GET['login'])){
    echo "<script>
        alert('". $_GET['login']."')
    </script>" ;
}
session_start();

$user = $_SESSION['logged'];

echo $user;


?>