<?php 
require('dbconnect.php');
session_start();


$error['email'] = '';

if(!empty($_POST)){
	$stmt = $db -> prepare('SELECT * FROM users WHERE email=?');
	$stmt -> execute(array($_POST['email']));
	$login_user = $stmt -> fetch();

	if(empty($_POST['email'])){
		$error['email'] = 'blank';
	}

	if($error['email'] === ''){
			$_SESSION['id'] = $login_user['id'];
			$_SESSION['error'] = $error; 
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
  <form action="" method="post">
		<p>email</p>
		<?php if($error['email'] == 'blank'): ?>
			<p>入力してください</p>
		<?php endif; ?>
		<?php if($error['email'] == 'nothing'): ?>
			<p>知らないメールアドレスです</p>
		<?php endif; ?>
		<input type="text" name="email">
		<button type="submit">ログイン</button>
	</form>
</body>
</html>