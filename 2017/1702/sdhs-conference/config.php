<?php

	try {
    $db = new PDO("mysql:host=localhost; dbname=smartspacephp; charset=utf8", "smartspacephp", "rhdrkswjdqh2018");
  } catch ( PDOException $error) {
    echo "DB error <br>";
    echo $error->getMessage();
    exit;
  }

?>