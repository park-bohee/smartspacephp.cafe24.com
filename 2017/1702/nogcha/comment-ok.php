<?php include("config.php");
  if( !$login ):
?>
  <script>
    alert("로그인을 해야 댓글 달기가 가능합니다");
    history.back();
  </script>
<?php
  exit;
  endif;

  $no = 0;
  $usercom = "";
  
  if( isset($_POST['no']) ) {
    $no = $_POST['no'];
  }
  if( isset($_POST['usercom']) ) {
    $usercom = $_POST['usercom'];
  }

  if( $no && $usercom ) {
    $sql = "INSERT INTO nogcomment SET";
    $sql.= " no={$no}";
    $sql.= ", username='{$loginname}'";
    $sql.= ", usertime=now()";
    $sql.= ", usercom='{$usercom}'";
    
    $db->query($sql);
  }

  header("location: view.php?no={$no}");
?>