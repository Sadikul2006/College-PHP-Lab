<!-- 
9. Write a php script to create form which contain input field like Name, Email,
Age and Gender. On click submit button for the next submission the values of
Name, Age and Gender should retain the previous values.
-->

<?php 
$name = "";
$email = "";
$age = "";
$gender = "";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" value="<?php echo $name ?>"><br><br>
        Email: <input type="email" name="email" value=""><br><br>
        Age: <input type="number" name="age" value="<?php echo $age ?>"><br><br>
        Gender: <input type="radio" name="gender" value="male" <?php if($gender == "male") echo 'checked'?>> Male 
                <input type="radio" name="gender" value="female" <?php if($gender == "female") echo 'checked'?>> Female 
                <input type="radio" name="gender" value="other" <?php if($gender == "other") echo 'checked'?>> Other
        <br><br><input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>