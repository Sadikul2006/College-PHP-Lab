<!-- 
7. Write a php script to create a form to take input as name and email and
provide area for comments and after input it should display message thank
you message to the sender and inform user like ‘ We will reply to your mail’.
Also check if the name is empty or not and also check whether the comment
empty or not and provide suitable message.
-->

<?php 
$msg = "";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    if(empty($name)) {
        $msg = "pls enter your name";
        
    }else if(empty($comments)) {
        $msg = "pls enter your message";
    }else {
        $msg = "Thank you for your message.<br>We will reply to your mail.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
        Email: <input type="text" name="email" placeholder="Enter your email"><br><br>
        Comments: <textarea name="comments" rows="5" cols="25" placeholder="Enter your message"></textarea><br><br>        
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php echo $msg ?>
</body>
</html>


