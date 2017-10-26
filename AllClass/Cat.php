<?php

include_once "Animal.php";

class Cat extends Animal
{

}

$cat = new Cat("test");
echo $cat->getAnimalType();

?>