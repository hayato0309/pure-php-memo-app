<?php require('dbconnect.php'); ?>
<?php
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メッセージが登録されました';
?>
