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
$sql = 'SELECT * FROM kadai_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $output = "";
    // foreach ($result as $record) {
    //     $output .= "<tr>";
    //     $output .= "<td>{$record["name"]}</td>";
    //     $output .= "<td>{$record["content"]}</td>";
    //     $output .= "</tr>";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Document</title>
</head>

<body>
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



        </div>
    </div>



</body>

</html>