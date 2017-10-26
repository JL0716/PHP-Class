<?php

//定義類別, 物件的藍圖
class Cat//類別名稱
{
//    public $name;//變數
    private $name;//變數
    private $test = "test";
    protected $position;

    public function __construct($name) {//建構子  通常用來做初始化的動作
        $this->position = [ "x" => 0, "y" => 0 ];
        $this->name = $name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function test() {//函式
        echo "test";
    }

    public function moveDxDy( $dx, $dy ) {
        $this->position["x"] = $this->position["x"] + $dx;
        $this->position["y"] = $this->position["y"] + $dy;
//        $this->position["x"] += $dx;
//        $this->position["y"] += $dy;
//        $x = $this->position["x"];
//        $y = $this->position["y"];
//        echo "($x,$y)<br>";
        $this->position();

//        $x = $x + $dx;
//        $y = $y + $dy;
//        $position = [ "x" => $x, "y" => $y ];
//        echo "($x,$y)<br>";

        var_dump($this->position);
        return $this->position;
    }

    public function position() {
        $x = $this->position["x"];
        $y = $this->position["y"];
        echo "($x,$y)<br>";
    }
}

$cat = new Cat("Kitty");//實體化, 根據藍圖產生 新的物件
$cat2 = new Cat("BanBan");

//var_dump( $cat );

//$cat->name = "ChangeName...";//屬性可以直接存取, 不建議
//echo $cat->name."<br>";//屬性
echo $cat->getName()."<br>";
//$cat->test;//無法從外部存取
//$cat->position;
//echo $cat2->name."<br>";
echo $cat2->getName()."<br>";

$cat->test();//方法

//1. 定義一個位置的屬性
//2. 設計一個用 x, y 座標的概念 讓 Cat 移動 dx, dy 的方法
//3. 移動之後, Cat 會回報他目前的座標

$cat->position();

$pos = $cat->moveDxDy(1,1);
var_dump( $pos );
echo "(".$pos['x'].",".$pos["y"].")<br>";


$cat->moveDxDy(1,1);

$cat->moveDxDy(1,-1);