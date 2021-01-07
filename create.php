<?php
if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['contents']) || $_POST['contents'] == ''
) {
    exit('ParamError');
}
$name = $_POST['name'];
$content = $_POST['contents'];

// DB接続
include('function.php');
$pdo = connect_to_db();
// // SQL作成&実行
$sql = 'INSERT INTO
kadai_table(id, name, content, created_at) VALUES(NULL, :name, :content, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo(); // データ登録失敗次にエラーを表示 exit('sqlError:'.$error[2]);
} else {
    // 登録ページへ移動
    header('Location:input.php');
}
