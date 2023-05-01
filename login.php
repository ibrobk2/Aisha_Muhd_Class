<?php
if(isset($_GET['reg'])){
    echo "
    <script>
        alert('Registration Successful, You can now login.');
    </script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <div class="container">
        <h2>Login Page</h2>
        <form action="process.php" method="post">
            <!-- <input type="text" name="fname"  placeholder="Full name"><br><br> -->
            <input type="text" name="username"  placeholder="Username"><br><br>
            <!-- <input type="text" name="phone"  placeholder="Phone Number"><br><br>
            <input type="email" name="email"  placeholder="Email Address"><br><br> -->
            <input type="password" name="pass"  placeholder="Password"><br><br>
            <button name="btn_login">Login</button>
        </form>
        <p>Dont have account Register <a href="reg.php">Here</a></p>
    </div>
</body>
</html>