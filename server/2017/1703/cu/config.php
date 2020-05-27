<?php
session_start();//세션 시작,항상 맨 윗줄
try { //예외처리, 에러발생하면 다른 조치
  $db = new PDO("mysql:host=localhost; dbname=smartspacephp; charset=utf8", "smartspacephp", "rhdrkswjdqh2018");
} catch(PDOException $error) {
 echo "DB Error";
 //echo $error->getMessage();
 exit;
}

$login = false;
$loginid = "";
$loginname = "";

if( isset($_SESSION['loginid']) ) {
    $loginid = $_SESSION['loginid'];
}
if( isset($_SESSION['loginname']) ) {
 $loginname = $_SESSION['loginname'];
}
if( $loginid && $loginname ) {
 $login = true;
}