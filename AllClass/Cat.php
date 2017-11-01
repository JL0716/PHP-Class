<?php

include_once "Animal.php";

class Cat extends Animal
{
    private $petName;

    public function __construct($petNameFromOut) {
	parent::__construct("貓");//需要呼叫父類別初始化的方法,否則父類別不會做
        $this->petName = $petNameFromOut;
    }

    public function getPetName() {
        return $this->petName;
    }
}

$cat = new Cat("Kitty");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
