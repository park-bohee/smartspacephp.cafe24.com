<?php session_start();
  try {
    $db = new PDO("mysql:host=localhost; dbname=smartspacephp; charset=utf8", "smartspacephp", "rhdrkswjdqh2018");
  } catch ( PDOException $error) {
    echo "DB error <br>";
    echo $error->getMessage();
    exit;
  }

  $login = false;
  $loginid = "";
  $loginname = "";

  if (isset($_SESSION['loginid'])) {
    $loginid = $_SESSION['loginid'];
  }
  if (isset($_SESSION['loginname'])) {
    $loginname = $_SESSION['loginname'];
  }
  if ($loginid && $loginname) {
    $login = true;
  }
?>