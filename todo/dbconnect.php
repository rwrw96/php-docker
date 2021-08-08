<?php 
try{
    $db = new PDO ('mysql:dbname=phpdb; host=172.17.0.3', 'root', 'kazuki108');
} catch (PDOException $e){
    echo $e->getMessage();
}

?>