<?php

require('../vendor/autoload.php');

echo "hello world";


 $url = parse_url(getenv("mysql://b25c7548cad8b5:26989079@us-cdbr-iron-east-03.cleardb.net/heroku_3089e5be4c942aa?reconnect=true"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $link = mysqli_connect($server, $username, $password, $db);
    $result = mysqli_query($link, "select * from user");

    while($user = mysqli_fetch_array($result)) {
      echo $user['id'], " : ", $user['name'], "<br>";
    }



?>

