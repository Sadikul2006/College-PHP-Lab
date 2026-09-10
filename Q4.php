<!-- 
4. Write a php script to create array using array() and foreach loop to print the
following:
Monday
Tuesday
Wednesday
Jan => January
Feb => February
Mar => March
Also sort the array of days.
-->



<?php
$days = array("Wednesday", "Monday", "Tuesday");
foreach ($days as $day) {
    echo $day . "<br>";
}
echo "<br>";



$months = array(
    "Jan" => "January",
    "Feb" => "February",
    "Mar" => "March"
);
foreach ($months as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
echo "<br>";



sort($days);
echo "Sorted Days:<br>";
foreach ($days as $day) {
    echo $day . "<br>";
}
?>
