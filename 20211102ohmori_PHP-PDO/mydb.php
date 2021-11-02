<?php

$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'root';
$password = '';
//※XAMPPを使用している場合は、passwordの中身は空にしてください。

try {
  $dbh = new PDO($dsn, $user, $password);
  print("接続に成功しました。<br>");
} catch (PDOException $e) {
  print('Error:' . $e->getMessage());
}

$dbh = null;
