<!-- 13. Write a php program to copy the content from one file to another file. -->

<?php 
$data = file_get_contents("data.txt");

file_put_contents("copy_data.txt", $data);
?>

