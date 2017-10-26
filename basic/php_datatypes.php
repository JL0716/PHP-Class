<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

<?php
echo "<h1>hello world!</h1>"
?>

<?php
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>

<?php
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
?>

<?php
$carsBrands = [ "Volvo", "BMW", "SAAB" ];
var_dump($carsBrands);

echo "陣列的宣告, 取用, 修改. 印出結果.<br>";
echo $carsBrands[0];
echo "<br>";
$carsBrands[1] = "UBike";
echo $carsBrands[1];
echo $carsBrands;

?>


<?php
$carsBrands = [ "name" => "mike",
    "gender" => "M",
    "area" => "新竹",
    "name" => "Nick Name"];
var_dump($carsBrands);

echo "陣列的宣告, 取用, 修改. 印出結果.<br>";
echo $carsBrands["name"];
echo "<br>";
$carsBrands["name"] = "Jack";
echo $carsBrands["name"];

?>

<?php
$x="Hello world!";
var_dump($x);
$x="";
var_dump($x);
$x=null;
var_dump($x);
?>

</body>
</html>