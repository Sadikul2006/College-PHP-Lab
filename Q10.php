<!-- 
10. Write a php script to create form which contain input field like Name, Email
and Comment amongst which name and Email should be hidden. On click
submit the Comment will be displayed along with Name and Email like
”Thanks for comment ….Name, Email”.
-->


<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['comment'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-hidden-input</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="name" value="Sadikul">
        <input type="hidden" name="email" value="Sadik@gmail.com">
        <textarea name="comment"  rows="5" cols="25" placeholder="Enter your comments"></textarea><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php if(isset($_POST['comment'])) 
        echo '<p>Thanks for comment '.$msg.', '.$name.', '.$email.'</p>';
    ?>
</body>
</html>

