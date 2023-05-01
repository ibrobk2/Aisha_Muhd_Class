<?php
include "server.php";



//REGISTRATION SECTION
if(isset($_POST['btn_reg'])){
    //variables 

    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    // echo $fname;
    $sql = "INSERT INTO users (id, full_name, username, phone, email, password) VALUES (null, '$fname', '$username', '$phone', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: login.php?reg=success");
    }else{
        echo "<script>
            alert('There is an Error!');
            window.location = 'reg.php';
        </script>";
    }
}


//LOGIN SECTION
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $pwd = $_POST['pass'];
    $pass = md5($pwd);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    // $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['logged'] = $username;
        header("Location:dashboard.php?login=Login_success");
    }else{
        echo "<script>
            alert('Invalid Username or Password..');
            window.location = 'login.php';
        </script>";
    }
}

?>