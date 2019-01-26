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
 $db->query("UPDATE cunews SET hit=hit+1 WHERE id={$id}");
 $sql = "SELECT * FROM cunews WHERE id={$id}";
 $rs = $db->query($sql);
 if( $rs->rowCount() ) {
  $data = $rs->fetch();
  $title = $data['title'];
  $writer = $data['writer'];
  $body = $data['body'];
  $wdate = $data['wdate'];
  $hit = $data['hit'];
  $file = $data['file'];
 }
}
?>
<article class="view_article">
 <h3><?php echo $title;?></h3>
 <hr>
 <p>
  글쓴이 : <?php echo $writer;?>&nbsp;
  날짜 : <?php echo $wdate;?>&nbsp;
  조회 : <?php echo $hit;?>
 </p>
 <hr>
 <p><?php echo $body;?></p>
 <?php if($file): ?>
 <p>
  <img src="./upload/<?php echo $file;?>" alt="<?php echo $file;?>" style="max-width: 100%;">  
 </p>
 <?php endif; ?>
 <hr>
 <p>
  <a href="edit.php?id=<?php echo $id;?>" class="btn btn-warning">수정</a>
  <a href="<?php echo $id;?>" class="btn btn-danger del">삭제</a>
  <a href="post.php" class="btn btn-default">목록으로</a>
 </p>
</article>
<script>
 $(".del").click(function(event){
  event.preventDefault();
  var id = $(this).attr("href");
  if( ! id ) return;
  if( ! confirm("지울까요?") ) return;
  $.post("delete.php", {"id":id}, function(count){
   count = parseInt(count,10);
   if( count ) {
    alert("삭제되었습니다.");
    location.href="/";
   } else {
    alert("삭제실패.");
   }
  });
 });
</script>   

<?php include("footer.php"); ?>