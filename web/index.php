<?php

require('../vendor/autoload.php');



$conn = mysqli_connect('us-cdbr-iron-east-03.cleardb.net' , 'b25c7548cad8b5' , 'b25c7548cad8b5');

if(!$conn){
  mysqli_query($conn , 'SET NAMES utf8');
  die('接続失敗です' .mysqli_error());
}


mysqli_close($conn);



?>

