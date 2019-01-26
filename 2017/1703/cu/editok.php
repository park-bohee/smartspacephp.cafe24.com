<?php
include("config.php");
$id = 0;
$title = "";
$body = "";
$writer = "";
if( isset($_POST['id']) ) {
 $id = (int)$_POST['id'];
}
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

if( $id && $title && $body && $writer ) {
 $sql = "UPDATE cunews SET ";
 $sql .= "title=:title";
 $sql .= ", body=:body";
 $sql .= ", writer=:writer ";
 if( $file ) {
  $sql .= ", file=:file ";
 }
 $sql .= " WHERE id=:id";
 $rs = $db->prepare($sql);
 $rs->bindParam(":title", $title);
 $rs->bindParam(":body", $body);
 $rs->bindParam(":writer", $writer);
 if( $file ) {
  $rs->bindParam(":file", $file);
 }
 $rs->bindParam(":id", $id);
 $rs->execute();
}
header("Location: view.php?id={$id}");