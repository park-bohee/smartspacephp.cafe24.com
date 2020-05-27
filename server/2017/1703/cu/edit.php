<?php 
include("header.php");
$id = 0;
$title = "";
$body = "";
$writer = "";
$wdate = "";
$hit = 0;
$file = "";
if( isset($_GET['id']) ) {
 $id = (int)$_GET['id'];
}
if( $id ) {
 $sql = "SELECT * FROM cunews WHERE id={$id}";
 $rs = $db->query($sql);
 if( $rs->rowCount() ) {
  $data = $rs->fetch();
  $title = $data['title'];
  $writer = $data['writer'];
  $body = $data['body'];
  $file = $data['file'];
 }
}
?>
<article>
 <h2>글 수정 페이지</h2>
 <form action="editok.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="title">제목</label>
   <input type="text" name="title" id="title" required class="form-control" value="<?php echo $title;?>">
   <input type="hidden" name="id" value="<?php echo $id;?>">
  </div>
  <div class="form-group">
   <label for="writer">글쓴이</label>
   <input type="text" name="writer" id="writer" required class="form-control" value="<?php echo $writer;?>">
  </div>
  <div class="form-group">
   <label for="body">본문</label>
   <textarea name="body" id="body" rows="10" required class="form-control"><?php echo $body;?></textarea>
  </div>
  <div class="form-group">
   <label for="upfile">첨부파일</label>
   <input type="file" name="upfile" id="upfile" class="form-control" accept="image/*">
   <?php if($file): ?>
    <a href="./uploads/<?php echo $file;?>" target="_blank"><?php echo $file;?></a>
   <?php endif;?>
  </div>
  <button type="submit" class="btn btn-primary">글저장</button>
  <a href="post.php" class="btn btn-default">목록으로</a>
 </form>
</article>
<?php include("footer.php"); ?>