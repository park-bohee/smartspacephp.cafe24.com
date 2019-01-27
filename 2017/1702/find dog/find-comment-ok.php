<?php include("config.php");
  if(!$login):
?>
  <script>
    alert("로그인을 해야 댓글 달기가 가능합니다");
    history.back();
  </script>
<?php
  exit;
  endif;

  $id = 0;
  $content = "";
  
  if( isset($_POST['id']) ) {
    $id = $_POST['id'];
  }
  if( isset($_POST['content']) ) {
    $content = $_POST['content'];
  }

  if( $id && $content ) {
    $sql = "INSERT INTO fdfindcmt SET";
    $sql.= " no={$id}";
    $sql.= ", writer='{$loginname}'";
    $sql.= ", content='{$content}'";
    $sql.= ", wdate=now()";
    
    $db->query($sql);
  }

  header("Location: find-view.php?id={$id}");
?>