<?php include("header.php"); ?>
<?php 
  $no = 0;

  if( isset($_GET['no']) ) {
    $no = $_GET['no'];
  }
  if( $no ) {
    $sql = "SELECT * FROM nogchanews WHERE no={$no}";
    $rs = $db->query($sql);
  }
  if( $rs->rowCount() ) {
    $news = $rs->fetch();
  }
?>
  <div class="write">
    <form action="" method="post">
      <div class="form-group">
        <p class="view-title"><?php echo $news['title']?></p>
      </div>
      <hr>
      <div class="form-group">
        <p class="view-content"><?php echo $news['content']?></p>
      </div>
      <a href="index.php" class="btn btn-default">목록</a> 
<?php
  $sql = "SELECT writer FROM nogchanews WHERE no={$no}";
  $rs = $db->query($sql);
  $row = $rs->fetch();
  $writer = $row['writer'];

  if($loginname == $writer):
?>            
      <a href="edit.php?no=<?php echo $news['no']; ?>" class="btn btn-success">수정</a>
      <a href="<?php echo $news['no']; ?>" class="btn btn-danger news-delete">삭제</a>
<?php endif; ?>        
    </form>
  </div>
<?php 
  $sql = "SELECT * FROM nogchacomment WHERE no={$no}";
  $rs = $db->query($sql);
  $msg_count = $rs->rowCount();
?>
  <div class="comment">
    <div class="comment-icon">
      <i class="far fa-heart fa-lg"></i>
      <span>0</span>
      <i class="far fa-comment fa-lg"></i>
      <span><?php echo $msg_count; ?></span>
    </div>
    <form action="comment-ok.php" method="post">
      <div class="form-group">
        <input type="text" name="usercom" class="form-control" id="user-text" placeholder="댓글" autocomplete=off>
      </div>
      <input type="hidden" name="no" value="<?php echo $no?>">
      <button type="submit" class="btn btn-warning">확인</button>  
    </form>
<?php
  $sql = "SELECT * FROM nogchacomment WHERE no={$no} ORDER BY usertime ASC";
  $rs = $db->query($sql);
  $coms = $rs->fetchAll();
  foreach($coms as $com) {
?>
    <div class="user-comment">
      <p class="user-name"><?php echo $com['username']?></p>
      <p class="user-time"><?php echo substr($com['usertime'], 0, 10)?></p>
      <p class="user-com"><?php echo $com['usercom']?></p>
    </div>
<?php } ?>
  </div>
  <script src="js/script.js"></script>
<?php include("footer.php"); ?>