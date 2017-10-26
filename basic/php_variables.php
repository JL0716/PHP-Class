<?php

function myTest2() {
    static $x = 0;
    echo $x."<br>";
    $x++;//等於 $x = $x + 1;
}

myTest2();//x=1
myTest2();//x=2
myTest2();//x=3

echo "<br>"
?>




1. 宣告一個變數x, 給他一個值, 印到標準網頁格式中.
2. 宣告2個函式, 內部宣告2個變數x,y. 印到標準網頁格式中.
3. 執行2個函式.
4. 在函式中, 加入 html 語法, 應用在變數上面.
5. 在函式使用 global 宣告, 或 GLOBALS[] 取得全域變數, 印出全域變數, 修改全域變數.
6. 執行完函式後, 印出已經被修改的全域變數.



<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
$x=5; // global scope

function myTest() {
    $y=10; // local scope
    global $x;
    $x = 3;
    echo "<p>在 myTest() 函数内部测试变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
    echo "<br>";
}

function myFunc(){
    echo "<p>在 myFunc() 函数内部测试变量：</p>";
    $y = 100;
    echo "变量 x 是：".$GLOBALS["x"];
    echo "<br>";
    $GLOBALS["x"] = 5;
    echo "变量 y 是：$y";
    echo "<br>";
}

myTest();
myFunc();

echo "<p>在函数之外测试变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
echo "<br>";
?>

</body>
</html>




<?php
$x = 5;
$y = 6;

$z = $x + $y;

echo "x = ".$x."<br>";
echo "y = ".$y."<br>";
echo "z = x + y = ".$z."<br>";

echo "x = $x<br>";
echo "y = $y<br>";
echo "z = x + y = $z<br>";
?>

<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>
