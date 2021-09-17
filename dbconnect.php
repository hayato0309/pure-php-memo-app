<?php
try {
    $db = new PDO('mysql:dbname=memo_app;host=localhost;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    echo '接続エラー: ' . $e->getMessage();
}
?>