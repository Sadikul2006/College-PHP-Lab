<!-- 15. Write a php program to implement method overloading. -->

<?php

class Calculator {
    function add(...$numbers) {
        return array_sum($numbers);
    }
}

$obj = new Calculator();

echo "Addition of 2 numbers: " . $obj->add(10, 20);
echo "<br>";

echo "Addition of 3 numbers: " . $obj->add(10, 20, 30);

?>

