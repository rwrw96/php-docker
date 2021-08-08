<?php 
require('dbconnect.php');
session_start();


if(!empty($_POST['email'])){
	$stmt = $db -> prepare('SELECT * FROM users WHERE email=?');
	$stmt -> execute(array($_POST['email']));
	$login_user = $stmt -> fetch();

	$users = $db -> query('SELECT * FROM users');
	$users -> execute();
	
	foreach($users as $user){
		if($user['email'] === $_POST['email']){
			$_SESSION['id'] = $login_user['id'];
			header('Location: index.php');
			exit();
		}		
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
		<input type="text" name="email">
		<button type="submit">ログイン</button>
	</form>
</body>
</html>