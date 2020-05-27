<?php include("header.php"); ?>
<?php if( !$login ): ?>
<script>
  alert("로그인 후 이용해주세요");
  history.back();
</script>
<?php endif;?>
  <div class="write">
    <form action="write-ok.php" method="post">
      <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="제목" require>
      </div>
      <div class="form-group">
        <textarea name="content" rows="10" class="form-control" placeholder="내용" require></textarea>
      </div>
      <a href="index.php" class="btn btn-default">목록</a> 
      <button type="submit" class="btn btn-success">저장</button>
    </form>
  </div>
<?php include("footer.php"); ?>