<?php include("config.php");
  $count = 0;
  $no = 0;

  if( isset($_POST['no']) ) {
    $no = $_POST['no'];
  }

  if( $no ) {
    $sql = "DELETE FROM nogchanews WHERE no={$no}";        
    $rs = $db->query($sql);
    $count = $rs->rowCount();
  }

  echo $count;
  
	$prev = $_SERVER['HTTP_REFERER'];
	header("location:" . $prev);
?>