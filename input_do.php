<h2>Practice</h2>
<pre>
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

    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メッセージが登録されました';

} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}


?>
</pre>