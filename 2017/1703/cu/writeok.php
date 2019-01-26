<?php
include("config.php");
$title = "";
$body = "";
$writer = "";
if( isset($_POST['title']) ) {
 $title = htmlentities($_POST['title']);
}
if( isset($_POST['body']) ) {
 $body = htmlentities($_POST['body']);
}
if( isset($_POST['writer']) ) {
 $writer = htmlentities($_POST['writer']);
}
//파일업로드 
$file = "";
$dir = "./upload/";
if(is_uploaded_file($_FILES['upfile']['tmp_name'])) {
 $upfile = basename($_FILES['upfile']['name']);
 $target = $dir . $upfile;
 if( move_uploaded_file($_FILES['upfile']['tmp_name'], $target) ) {
  $file = $upfile;
 }
}

if( $title && $body && $writer ) {
 $sql = "INSERT INTO cunews SET ";
 $sql .= "title=:title";
 $sql .= ", body=:body";
 $sql .= ", writer=:writer";
 $sql .= ", file=:file";
 $sql .= ", wdate=now()";
 $sql .= ", hit=0";
 $rs = $db->prepare($sql);
 $rs->bindParam(":title", $title);
 $rs->bindParam(":body", $body);
 $rs->bindParam(":writer", $writer);
 $rs->bindParam(":file", $file);
 $rs->execute();
}
header("Location: post.php");
