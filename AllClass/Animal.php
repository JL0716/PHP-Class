<?php

// 1. 定義 Animal 類別
// 2. 屬性 position 可以被繼承
// 3. 初始化時可以設定物種名稱及初始化位置
// 4. 可以取得物種名稱
// 5. 可以從外部得到食物
class Animal
{
    private $animalType;
    protected $position;

    public function __construct($animalTypeFromOut)     //建構子   通常用來初始化動作
    {
        $this->animalType = $animalTypeFromOut;
        $this->position = ["x"=> 0, "y"=> 0];
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function getFood($footName)
    {
        echo "得到食物: ".$footName."<br>";
    }
}



?>