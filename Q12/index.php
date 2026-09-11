<!-- 12. Write a php program to write some information from a form into a text file. -->
<?php 
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'] ?? "";

    $data = "Name: $name\nEmail: $email\nAge: $age\nGender: $gender\n\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    $msg = "Information saved successfully.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
        Email: <input type="email" name="email" placeholder="Enter your email"><br><br>
        Age: <input type="number" name="age" placeholder="Enter your age"><br><br>
        Gender: <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <br><br><input type="submit" name="submit" value="Submit">
    </form>
    <?php if(isset($_POST['submit'])) echo '<p>'.$msg.'</p>' ?>
</body>
</html>