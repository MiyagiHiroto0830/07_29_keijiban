<?php
include('function.php');
$pdo = connect_to_db();

$sql = 'SELECT * FROM kadai_table order by created_at DESC limit 5';

$stmt = $pdo->prepare($sql);

$status = $stmt->execute();


if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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