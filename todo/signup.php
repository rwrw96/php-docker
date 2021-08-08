<?php 
require('dbconnect.php'); 
session_start();


if(!empty($_POST)){
	if(empty($_POST['name'])){
		$error['name'] = 'blank';
	}
	if(empty($_POST['email'])){
		$error['email'] = "blank";
	}
	
	
	if(!isset($error)){
			$stmt = $db -> prepare('INSERT INTO users SET name=?, email=?, created_at=NOW()');
			$stmt -> execute(array($_POST['name'], $_POST['email']));

			$stmt = $db -> prepare('SELECT * FROM users where email=?');
			$stmt -> execute(array($_POST['email']));
			$user = $stmt -> fetch();

			$_SESSION['id'] = $user['id'];
			header('Location: index.php');
			exit();
		}
	}
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
  <h2>新規登録</h2>
	<form action="" method="post">
		<p>name</p>
		<?php if($error['name'] == "blank"): ?>
			<p>nameが未入力です</p>
		<?php endif; ?>	
		<input type="text" name="name">
		<p>email</p>
		<?php if($error['email'] == "blank"): ?>
			<p>emailが未入力です</p>
		<?php endif; ?>	
		<input type="text" name="email">
		<button type="submit">登録</button>
	</form>
</body>
</html>