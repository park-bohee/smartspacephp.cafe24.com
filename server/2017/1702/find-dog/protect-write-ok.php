<?php include("config.php");

  $kinds = "";
  $cftion = "";
  $gender = "";
  $darea = "";
  $dtime = "";
  $pnumber1 = "";
  $pnumber2 = "";
  $pnumber3 = "";
  $sgity = "";

  if (isset($_POST['kinds'])) {
    $kinds = htmlentities($_POST['kinds']);
  }
  if (isset($_POST['cftion'])) {
    $cftion = htmlentities($_POST['cftion']);
  }
  if (isset($_POST['gender'])) {
    $gender = htmlentities($_POST['gender']);
  }
  if (isset($_POST['darea'])) {
    $darea = htmlentities($_POST['darea']);
  }
  if (isset($_POST['dtime'])) {
    $dtime = htmlentities($_POST['dtime']);
  }
  if (isset($_POST['pnumber1'])) {
    $pnumber1 = htmlentities($_POST['pnumber1']);
  }
  if (isset($_POST['pnumber2'])) {
    $pnumber2 = htmlentities($_POST['pnumber2']);
  }
  if (isset($_POST['pnumber3'])) {
    $pnumber3 = htmlentities($_POST['pnumber3']);
  }
  if (isset($_POST['sgity'])) {
    $sgity = htmlentities($_POST['sgity']);
  }

  // 파일업로드 
  $file = "";
  $dir = "./uploads/protect/";

  if (is_uploaded_file($_FILES['upmain']['tmp_name'])) {
    $upfile = basename($_FILES['upmain']['name']);
    $target = $dir . $upfile;
    if (move_uploaded_file($_FILES['upmain']['tmp_name'], $target)) {
      $file = $upfile;
    }
  }

  if ($kinds && $cftion && $gender && $darea && $dtime && $pnumber1 && $pnumber2 && $pnumber3 && $sgity) {
    $sql = "INSERT INTO fdprotect SET ";
    $sql .= "kinds=:kinds";
    $sql .= ", cftion=:cftion";
    $sql .= ", gender=:gender";
    $sql .= ", darea=:darea";
    $sql .= ", dtime=:dtime";
    $sql .= ", pnumber1=:pnumber1";
    $sql .= ", pnumber2=:pnumber2";
    $sql .= ", pnumber3=:pnumber3";
    $sql .= ", sgity=:sgity";
    $sql .= ", file=:file";
    $sql .= ", date=now()";
    $rs = $db->prepare($sql);

    $rs->bindParam(":kinds", $kinds);
    $rs->bindParam(":cftion", $cftion);
    $rs->bindParam(":gender", $gender);
    $rs->bindParam(":darea", $darea);
    $rs->bindParam(":dtime", $dtime);
    $rs->bindParam(":pnumber1", $pnumber1);
    $rs->bindParam(":pnumber2", $pnumber2);
    $rs->bindParam(":pnumber3", $pnumber3);
    $rs->bindParam(":sgity", $sgity);
    $rs->bindParam(":file", $file);
    $rs->execute();
  }

  header("Location: ./protect.php");
?>