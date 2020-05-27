<?php include("config.php");
  $userid = "";
  $userpw = "";

  if (isset($_POST['userid'])) {
    $userid = htmlentities($_POST['userid']);
  }
  if (isset($_POST['userpw'])) {
    $userpw = htmlentities($_POST['userpw']);
  }

  if ($userid && $userpw) {
    $sql = "SELECT * FROM fduser WHERE userid='{$userid}' AND userpw=password('{$userpw}')";
    if ($rs = $db->query($sql)) {
      if ($user = $rs->fetch()) {
        $_SESSION['loginid'] = $user['userid'];
        $_SESSION['loginname'] = $user['username'];
      }
    }
  }
  
  header('location: ./');
?>