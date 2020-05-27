<?php include("config.php");
  $title = "";
  $content = "";

  if( isset($_POST['title']) ) {
    $title = $_POST['title'];
  }
  if( isset($_POST['content']) ) {
    $content = $_POST['content'];
  }

  if( $title && $content ) {
    $sql = "INSERT INTO nogchanews (title, content, writer, wdate) VALUES ";
    $sql .= "('{$title}', '{$content}', '{$loginname}', now())";

    $db->query($sql);
  }

	header("location: ./");
?>