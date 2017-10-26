<?php

$a = [ "x"=>1, "y"=>3, 4, 5, "z"=>7, 9 ];
var_dump($a);
//echo $a[6];


$cars_origin = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$cars = [
    //  0             1  2
    ["Volvo"        ,22,18],    //0
    ["BMW"          ,15,13],    //1
    ["Saab"         ,5,2],      //2
    ["Land Rover"   ,17,15]     //3
];

echo $cars[0][0].": 库存：".$cars[0][1].", 销量：".$cars[0][2].".<br>";
echo $cars[1][0].": 库存：".$cars[1][1].", 销量：".$cars[1][2].".<br>";
echo $cars[2][0].": 库存：".$cars[2][1].", 销量：".$cars[2][2].".<br>";
echo $cars[3][0].": 库存：".$cars[3][1].", 销量：".$cars[3][2].".<br>";

?>

<?php
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
