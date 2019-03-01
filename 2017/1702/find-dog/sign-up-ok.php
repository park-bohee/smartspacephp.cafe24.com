<?php include("config.php");

  $userid = "";
  $userpw = "";
  $username = "";
  $useremail = "";

  if (isset($_POST['userid'])) {
    $userid = htmlentities($_POST['userid']);
  }
  if (isset($_POST['userpw'])) {
    $userpw = htmlentities($_POST['userpw']);
  }
  if (isset($_POST['username'])) {
    $username = htmlentities($_POST['username']);
  }
  if (isset($_POST['useremail'])) {
    $useremail = htmlentities($_POST['useremail']);
  }

  if ($userid && $userpw && $username && $useremail) {
    $sql = "INSERT INTO fduser SET";
    $sql .= " userid='{$userid}'";
    $sql .= ", userpw=password('{$userpw}')";
    $sql .= ", username='{$username}'";
    $sql .= ", useremail='{$useremail}'";

    $db->query($sql);
  }

  header("Location: ./");
?>