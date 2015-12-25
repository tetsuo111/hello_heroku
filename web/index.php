<?php

require('../vendor/autoload.php');

echo "hello world";


$conn = mysqli_connect('127.0.0.1' , 'root' , 'root');

if($conn){
  //データベースの選択
  mysqli_select_db($conn , 'sample_db');
  mysqli_query($conn , 'SET NAMES utf8');
  //データベースから取り出しSQL文 1
  $sql = 'SELECT message_id , message_title , message , user_name , entry_date FROM message_tb ORDER BY message_id';

  //SQL文の実行
  $query = mysqli_query($conn , $sql);
}else{
  echo "error";
}


e




?>

