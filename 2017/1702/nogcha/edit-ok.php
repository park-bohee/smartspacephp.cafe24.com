<?php include("config.php");
  $no = 0;
  $title = "";
  $content = "";

  if( isset($_POST['no']) ) {
    $no = $_POST['no'];
  }
  if( isset($_POST['title']) ) {
    $title = $_POST['title'];
  }
  if( isset($_POST['content']) ) {
    $content = $_POST['content'];
  }

  $sql = "UPDATE nognews SET";
  $sql .= " title='{$title}'";
  $sql .= ", content='{$content}'";
  $sql .= ", wdate=now()";
  $sql .= " WHERE no={$no}";

  $rs = $db->query($sql);

  header("Location: view.php?no={$no}");
?>