<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>連接到 MySQL Database</title>
</head>

<body>

<h1>連接到 MySQL Database</h1>

<?php
    echo "測試資料庫連線...";

    //註解: 變數 用來設定連線
    $host = "localhost";    //請看主機上的 /etc/hosts
    $user = "homestead";    //homestead 內建的帳號
    $password = "secret";   //homestead 內建的密碼

    //執行連線到資料庫的動作, 並將回傳的東西存放到 $dblink 中
    $dblink = new mysqli($host, $user, $password);

    //檢查是否連線錯誤
    if ($dblink->connect_error)
    {
        die("連線錯誤1:".$dblink->connect_error);     //物件導向
    }
    else
    {
        echo "連線成功<br>~";
    }
?>

</body>

</html>