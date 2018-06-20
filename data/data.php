<?php
  // Init pdo
  $pdo = null;
  //DSN
  $dsn = 'mysql:dbname=blog;host=localhost;charset=UTF8';
  //Mon nom d'utilisateur définit sur la bdd
  $username = 'blog';
  //password définit sur la bdd
  $password = 'blog';

  //Si erreur alors on l'attrape et on execute le code à l'intérieur de cache
  try {

    $pdo = new PDO($dsn, $username, $password);

  }catch (PDOException $e) {

    echo 'Connection failed : ' . $e->getMessage();

  }
?>
