<?php
require('dbconnect.php');
session_start();


if(!empty($_POST['content'])){
	$stmt = $db -> prepare('INSERT INTO lists SET content=?, created_at=NOW()');
	$stmt -> execute(array($_POST['content']));

	header('Location: index.php');
	exit();
}

$lists = $db -> prepare('SELECT * FROM lists WHERE content=?');
$lists -> bindValue(1,'test');
$lists -> execute();
$list_content = $lists -> fetchAll();
// // echo $lists;
// // var_dump($lists);
var_dump($list_content);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "id：" . $_SESSION['id']; ?>
<a href="logout.php">ログアウトする</a>


	<form action="" method="post">
		<input type="text" name="content">
		<button type="submit">todo追加</button>
	</form>

	<?php foreach($lists as $list): ?>
		<p><?php echo $list['content']; ?></p>
		<a href="delete.php?id=<?php echo $list['id']; ?>">削除</a>
		<hr>
	<?php endforeach; ?>
</body>
</html>