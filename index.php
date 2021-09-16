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
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}

$memos = $db->query('SELECT * FROM memos ORDER BY id DESC');

?>

<article>
<?php while ($memo = $memos->fetch()): ?>
    <p><a href="#"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
    <time><?php print $memo['created_at']; ?></time>
    <hr>
<?php endwhile; ?>
</article>