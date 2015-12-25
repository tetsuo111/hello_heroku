<?php

require('../vendor/autoload.php');


$host = 'us-cdbr-iron-east-03.cleardb.net';
$db_user = 'b25c7548cad8b5';
$db_pass = '26989079';


$conn = mysqli_connect($host , $db_user , $db_pass);

if(!$conn){
  mysqli_query($conn ,'SET NAMES utf8' );
  die('接続失敗'  .mysql_error());
}

?>

