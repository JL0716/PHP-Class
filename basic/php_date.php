<?php
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l") . "<br>";
?>

© 2010-<?php echo date("Y") . "<br>"?>

<?php
echo "现在时间是 " . date("h:i:sa");
?>

<?php
date_default_timezone_set("Asia/Taipei");//+8
echo "当前时间是 " . date("h:i:sa") . "<br>";
?>

<?php

echo "Unix 秒數起點日期:" . date("Y-m-d h:i:sa", 0);

$d = mktime(9, 12, 31, 6, 10, 2015);

echo $d."<br>";

echo "创建日期是 " . date("Y-m-d h:i:sa", $d)."<br>";
?>

<?php
$d=strtotime(" 15 April 2015 10:38pm");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d)."<br>";
?>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate),"<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
echo "現在的時間:".time()."<br>";

$d1=strtotime("December 31");
$d2=ceil(($d1-time())/60/60/24);
echo "距离十二月三十一日还有：" . $d2 ." 天。";
?>

