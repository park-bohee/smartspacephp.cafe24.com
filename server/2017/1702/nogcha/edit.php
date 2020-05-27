<?php include("header.php"); ?>
<?php 
  $no = 0;

  if( isset($_GET['no']) ) {
    $no = $_GET['no'];
  }

  if( $no ) {
    $sql = "SELECT * FROM nogchanews WHERE no={$no}";
    $rs = $db->query($sql);
    $news = $rs->fetch();
  }
?>
  <div class="write">
    <form action="edit-ok.php" method="POST">
      <input type="hidden" name="no" value="<?php echo $no?>">
      <div class="form-group">
        <input type="text" name="title" class="form-control" value="<?php echo $news['title']?>" autocomplete=off>
      </div>
      <div class="form-group">
        <textarea name="content" rows="10" class="form-control" autocomplete=off><?php echo $news['content']?></textarea>
      </div>
      <a href="index.php" class="btn btn-default">목록</a> 
      <button type="submit" class="btn btn-success">수정완료</button>
    </form>
  </div>
<?php include("footer.php"); ?>