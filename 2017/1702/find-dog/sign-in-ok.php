<?php include("config.php");

  $userid = "";
  $userpw = "";

  if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
  }
  if (isset($_POST['userpw'])) {
    $userpw = $_POST['userpw'];
  }

  if ($userid && $userpw) {

    $sql = "SELECT * FROM user WHERE userid='{$userid}' AND userpw='{$userpw}'";
    if ($rs = $db->query($sql)) {
      if ($user = $rs->fetch()) {
        $_SESSION['loginid'] = $user['userid'];
        $_SESSION['loginname'] = $user['username'];
      }
    }
  }
  
  header("Location: ./");

?>