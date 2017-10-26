
<?php

$file = fopen("test/test5.txt", "w");

fclose($file);

?>

<?php
$myfile = fopen("test/test.txt", "w") or die("Unable to open file!");

$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);

fclose($myfile);
?>