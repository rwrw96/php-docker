<?php 
require('index.php');
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
    <?php 

    if ($_POST){
        echo "選択されたのは、" . h(implode(',', $_POST['lang'])) . "です。";
    } else {
        echo '選択してください';
    }
    ?>
</body>
</html>