<!-- 
6. Write a php script to find grade of your marks in a paper that would be taken
from user through a form and grade would be displayed on the form
-->

<?php 
$grade = "";
if(isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if($marks >= 90) {
        $grade = "A+";
    }else if ($marks >= 80) {
        $grade = "A";
    }else if ($marks >= 70) {
        $grade = "B";
    }else if ($marks >= 60) {
        $grade = "C";
    }else if ($marks >= 50) {
        $grade = "D";
    }else {
        $grade = "F";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" placeholder="Enter your mark" name="marks">
        <input type="submit" value="Submit" name="submit">
        <p>Grade : <?php echo $grade; ?></p>
    </form>
</body>
</html>