<!-- 
8. Write a php script to create a form which will have a question with a single
choice as answer. On Submit button if the correct answer is chosen then
response like ‘Your answer is correct’ and if no answer is chosen then response
like ‘You must select one answer’, otherwise reply ‘Your answer is incorrect’.
-->
<?php
$msg = ""; 
if(isset($_POST['submit'])) {
    if((!isset($_POST['ans']))) {
        $msg = "You must select one answer";
    }else if ($_POST['ans'] == 30) {
        $msg = "Your answer is correct";
    }else{
        $msg = "Your answer is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ</title>
    <form action="" method="post">
        20 + 10 = ?<br><br>
        <input type="radio" name="ans" value="10">10
        <input type="radio" name="ans" value="20">20
        <input type="radio" name="ans" value="30">30
        <input type="radio" name="ans" value="40">40
        <br><br><input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <p> <?php echo $msg ?></p>
</head>
<body>
    
</body>
</html>