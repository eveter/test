<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `url` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: /');
?>
