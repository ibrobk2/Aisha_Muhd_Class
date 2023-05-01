<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Page</title>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="process.php" method="post">
            <input type="text" name="fname"  placeholder="Full name"><br><br>
            <input type="text" name="username"  placeholder="Username"><br><br>
            <input type="text" name="phone"  placeholder="Phone Number"><br><br>
            <input type="email" name="email"  placeholder="Email Address"><br><br>
            <input type="password" name="pass"  placeholder="Password"><br><br>
            <button name="btn_reg">Register</button>
        </form>
        <p>Already have an account Login <a href="login.php">Here</a></p>

    </div>
</body>
</html>