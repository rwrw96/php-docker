<?php
require('dbconnect.php');
session_start();


$stmt = $db -> prepare('DELETE FROM lists WHERE id=?');
$stmt -> execute(array($_GET['id']));

header('Location: index.php');
exit();
?>