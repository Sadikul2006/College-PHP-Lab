<!-- 14. Write a php program to implement class and object with constructor. -->

<?php
class Student {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age;
    }
}

$student = new Student("Sadikul", 20);
$student->display();

?>