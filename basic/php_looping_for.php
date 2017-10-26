<?php
for ($x=0; $x<=10; $x++) {
    echo "数字是：$x <br>";
}
?>

<?php
$colors2 = [ "red", "green", "blue", "yellow" ];
var_dump($colors2);

$colors = [ "red", "a" => "green", 5 => "blue", "yellow" ];
var_dump($colors);

foreach ($colors as $key => $value) {
    echo "$key:$value <br>";
}
?>