<?php
include("function.php");
$id = $_GET['id'];

$pdo = connect_to_db();
$sql = 'SELECT * FROM kadai_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<form action="update.php" method="post">
    <input type="text" name="name" value="<?= $record["name"] ?>">
    <input type="text" name="content" value="<?= $record["content"] ?>">
    <input type="hidden" name="id" value="<?= $record['id'] ?>">
</form>