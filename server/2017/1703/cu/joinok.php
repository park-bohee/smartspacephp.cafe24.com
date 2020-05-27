<?php
include("config.php");
$username = "";
$userid = "";
$userpw = "";
$phone = "";
$email = "";

if( isset($_POST['username']) ) {
 $username = $_POST['username'];
}
if( isset($_POST['userid']) ) {
 $userid = $_POST['userid'];
}
if( isset($_POST['userpw']) ) {
 $userpw = $_POST['userpw'];
}
if( isset($_POST['phone']) ) {
    $phone = $_POST['phone'];
}
if( isset($_POST['email']) ) {
    $email = $_POST['email'];
}
if( $username && $userid && $userpw && $phone && $email ) {
 $sql = "INSERT INTO cuuser SET ";
 $sql .= "username='{$username}'";
 $sql .= ", userid='{$userid}'";
 $sql .= ", userpw='{$userpw}'";
 $sql .= ", phone='{$phone}'";
 $sql .= ", email='{$email}'";

 $db->query($sql);
}

header("Location: ./");
