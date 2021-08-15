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
    return htmlspecialchars($str, ENT_QUOTES|ENT_HTML5, "UTF-8");
    }
  // HTMLに出力する際
    echo h('<script>alert("スクリプト");</script>');

