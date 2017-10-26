<?php
$t = date("H");
var_dump($t);

if ( $t < "20" ) {
    echo "Have a good day!";
}
echo "<br>";

$hour = "6";
// ? : 條件判斷
$t = ( $hour >= 12 ) ? $hour - 12 : $hour;
var_dump($t);

echo "<br>";
?>

<?php
$t=date("H");

if ($t<"10") {
    echo "Have a good morning!";
} elseif ($t<"20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

?>

