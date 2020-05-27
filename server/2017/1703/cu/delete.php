<?php
include("config.php");
$count = 0;
$id = 0;
if( isset($_POST['id']) ){
 $id = (int)$_POST['id'];
}
if( $id && $login ) {
 $sql = "DELETE FROM cunews WHERE id={$id}";
 $rs = $db->query($sql);
 $count = $rs->rowCount();
}
echo $count;

