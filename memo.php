<h2>Practice</h2>

<?php
try {
    $db = new PDO(
        'mysql:dbname=memo_app;host=localhost;charset=utf8',
        'root',
        'root',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        )
    );
} catch(PDOException $e) {
    echo '接続エラー: ' . $e->getMessage(); 
}

$memos = $db->query('SELECT * FROM memos WHERE id=1');
$memo = $memos->fetch();
?>

<article>
    <pre><?php print($memo['memo']); ?></pre>

    <a href="index.php">戻る</a>
</article>