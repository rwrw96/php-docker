<?php 
require 'function.php';

// for($i = 1; $i <= 100; $i++){
//     if($i % 15 == 0){
//         echo 'FizzBuzz'.'<br>';
//     } elseif ($i % 5 == 0){
//         echo 'Buzz'.'<br>';
//     } elseif ($i % 3 == 0){
//         echo 'Fizz'.'<br>';
//     } else{
//         echo $i.'<br>';
//     }
// }

echo Greeting('山田');

$date = new DateTime();
echo $date->format('Ymd');
// var_dump($date);
echo '<p style="color:red;font-size:30px">pタグ</p>';

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
    }
  // HTMLに出力する際
    echo h('<script>alert("スクリプト");</script>');
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
        <form action="post.php" method="post">
            <input type="checkbox" name="lang[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="lang[]" id="java" value="java">
            <label for="java">java</label>
            <input type="checkbox" name="lang[]" id="ruby" value="ruby">
            <label for="ruby">ruby</label>
            <input type="submit" value="送信">
        </form>
    </body>
    </html>

