<?php 
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

    <p>You are successfully logged in.</p>

    <h2>My Profile</h2>

    <p>Username: <?php echo htmlspecialchars($username); ?></p>

    <a href="?logout">Logout</a>

</body>
</html>