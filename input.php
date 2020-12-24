<?php
$dbn = 'mysql:dbname=gsacf_d29_07;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}
$dbn2 = 'mysql:dbname=gsacf_d29_07;charset=utf8;port=3306;host=localhost';
$user2 = 'root';
$pwd2 = '';

try {
    $pdo2 = new PDO($dbn2, $user2, $pwd2);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}
$sql = 'SELECT * FROM kadai_table order by created_at DESC limit 5';
$sql2 = 'SELECT * FROM kadai2_table order by created_at DESC limit 5';
$stmt = $pdo->prepare($sql);
$stmt2 = $pdo2->prepare($sql2);
$status = $stmt->execute();
$status2 = $stmt2->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
};
if ($status2 == false) {
    $error2 = $stmt2->errorInfo();
    exit('sqlError:' . $error2[2]);
} else {
    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
};


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kadai</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <h1>2ちゃんねる</h1>
    <div class="main1">
        <div class="content1">
            <h2>掲示板</h2>
            <section>
                <h2>投稿内容一覧</h2>
                <?php foreach ($result as $record) : ?>

                    <div><?php echo $record['id'] ?> 名前：<?php echo $record['name'] ?> <?php echo $record['created_at'] ?></div>
                    <div> <?php echo $record['content'] ?></div>
                    <div>------------------------------------------</div>
                <?php endforeach; ?>
            </section>


            <section>
                <h2>新規投稿</h2>
                <form action="create.php" method="post">
                    名前 : <input type="text" name="name" value=""><br>
                    投稿内容: <input type="text" name="contents" value=""><br>
                    <button type="submit">投稿</button>
                </form>
            </section>

            <a href="select.php">全て見る</a>
        </div>
    </div>


</body>

</html>