<?php include("config.php");
  $count = 0;
  $no = 0;

  if( isset($_POST['no']) ) {
    $no = $_POST['no'];
  }

  if( $no ) {
    $sql = "DELETE FROM nognews WHERE no={$no}";        
    $rs = $db->query($sql);
    $count = $rs->rowCount();
  }

	$prev = $_SERVER['HTTP_REFERER'];
	header("location:" . $prev);
?>