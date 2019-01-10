<?php include("config.php");

$kinds = "";
$cftion = "";
$gender = "";
$farea = "";
$ftime = "";
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
if (isset($_POST['farea'])) {
  $farea = htmlentities($_POST['farea']);
}
if (isset($_POST['ftime'])) {
  $ftime = htmlentities($_POST['ftime']);
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

//파일업로드 
$file = "";
$dir = "./uploads/find/";

if (is_uploaded_file($_FILES['upmain']['tmp_name']) && is_uploaded_file($_FILES['upsub']['tmp_name'])) {
  $upmain = basename($_FILES['upmain']['name']);
  $upsub = basename($_FILES['upsub']['name']);
  $targetmain = $dir . $upmain;
  $targetsub = $dir . $upsub;
  if (move_uploaded_file($_FILES['upmain']['tmp_name'], $targetmain) && move_uploaded_file($_FILES['upsub']['tmp_name'], $targetsub)) {
    $filemain = $upmain;
    $filesub = $upsub;
  }
}

if ($kinds && $cftion && $gender && $farea && $ftime && $pnumber1 && $pnumber2 && $pnumber3 && $sgity) {
  $sql = "INSERT INTO find SET ";
  $sql .= "kinds=:kinds";
  $sql .= ", cftion=:cftion";
  $sql .= ", gender=:gender";
  $sql .= ", farea=:farea";
  $sql .= ", ftime=:ftime";
  $sql .= ", pnumber1=:pnumber1";
  $sql .= ", pnumber2=:pnumber2";
  $sql .= ", pnumber3=:pnumber3";
  $sql .= ", sgity=:sgity";
  $sql .= ", filemain=:filemain";
  $sql .= ", filesub=:filesub";
  $rs = $db->prepare($sql);

  $rs->bindParam(":kinds", $kinds);
  $rs->bindParam(":cftion", $cftion);
  $rs->bindParam(":gender", $gender);
  $rs->bindParam(":farea", $farea);
  $rs->bindParam(":ftime", $ftime);
  $rs->bindParam(":pnumber1", $pnumber1);
  $rs->bindParam(":pnumber2", $pnumber2);
  $rs->bindParam(":pnumber3", $pnumber3);
  $rs->bindParam(":sgity", $sgity);
  $rs->bindParam(":filemain", $filemain);
  $rs->bindParam(":filesub", $filesub);
  $rs->execute();

  echo $sql;

}

header("Location: ./find.php");