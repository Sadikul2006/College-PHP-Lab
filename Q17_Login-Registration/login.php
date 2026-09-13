<?php
session_start();
include 'db_conn.php';

$msg = "";
if(isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = $_POST['confirm_password'];

    if(empty($username)) {
        $msg = "Please enter Username";
    }else if($password != $confirm_password) {
        $msg = "Password does not match.";
    }else {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
    
        if(mysqli_query($conn, $sql)) {
            $msg = 'Registration successful.';
        }else {
            $msg = 'Registration failed';
        }
    }
}


if(isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            header("Location: home.php");
            exit();
        }else {
            $msg = "Wrong password.";
        }
    }else {
        $msg = "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration & Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <!-- Registration -->
    <div id="registerForm">

        <h2>Create Account</h2>
        <?php if(isset($_POST['register'])) {
            echo '<p id="msg">'.$msg.'</p>';
        }?>
        <form action="" method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"nplaceholder="Enter password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm password">
            </div>

            <button class="btn" type="submit" name="register">
                Register
            </button>

        </form>

        <div class="switch">
            Already have an account?
            <span onclick="showLogin()">Login</span>
        </div>

    </div>


    <!-- Login -->
    <div id="loginForm">

        <h2>Welcome Back</h2>
        <?php if(isset($_POST['login'])) {
            echo '<p id="msg">'.$msg.'</p>';
        }?>
        <form action="" method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password">
            </div>

            <button class="btn" type="submit" name="login">
                Login
            </button>

        </form>

        <div class="switch">
            Don't have an account?
            <span onclick="showRegister()">Register</span>
        </div>

    </div>

</div>


<script>
    function showLogin() {
        document.getElementById("registerForm").style.display = "none";
        document.getElementById("loginForm").style.display = "block";
    }

    function showRegister() {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("registerForm").style.display = "block";
    }
    
</script>

</body>
</html>
