<!-- 16. Write a php program to implement method overriding and inheritance. -->

<?php
class Animal {
    function sound() {
        echo "Animal makes a sound.";
    }
}

class Dog extends Animal {
    function sound() {
        echo "Dog barks.";
    }
}

$dog = new Dog();
$dog->sound();

?>