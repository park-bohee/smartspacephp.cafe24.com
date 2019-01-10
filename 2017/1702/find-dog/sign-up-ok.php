<?php include("config.php");

  $userid = "";
  $userpw = "";
  $username = "";
  $useremail = "";

  if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
  }
  if (isset($_POST['userpw'])) {
    $userpw = $_POST['userpw'];
  }
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
  }
  if (isset($_POST['useremail'])) {
    $useremail = $_POST['useremail'];
  }

  if ($userid && $userpw && $username && $useremail) {
    $sql = "INSERT INTO user SET";
    $sql .= " userid='{$userid}'";
    $sql .= ", userpw='{$userpw}'";
    $sql .= ", username='{$username}'";
    $sql .= ", useremail='{$useremail}'";

    $db->query($sql);
  
  }

  header("Location: ./");

?>