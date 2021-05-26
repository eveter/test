<?php
  $task = $_POST['url'];
  if($url == '') {
    echo 'Введите ссылку';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO url(url) VALUES(:url)';
  $query = $pdo->prepare($sql);
  $query->execute(['url' => $url]);

  header('Location: /');
?>
