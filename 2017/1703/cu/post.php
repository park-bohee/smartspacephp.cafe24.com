<?php
include("header.php");
$sqltmp = "SELECT * FROM cunews";
$rstmp = $db->query($sqltmp);
$total = $rstmp->rowCount();
$rstmp = null;
$list = 10;
$lastpage = ceil($total / $list);
$page = 0;
if( isset($_GET['page']) ) {
 $page = (int)$_GET['page'];
}
if( ! $page ) $page = 1;
$start = ($page - 1) * $list;

$prev = $page - 1;
if( $prev < 1 ) $prev = 1;

$next = $page + 1;
if( $next > $lastpage ) $next = $lastpage;

?>
<article class="post">
 <p class="text-right">
  <a href="write.php" class="btn btn-info"><span class="glyphicon glyphicon-pencil"><i class="fas fa-pencil-alt"></i></span> 글쓰기</a>
 </p>
 <table id="newslist" class="table table-hover">
  <tr class="active">
   <th>번호</th>
   <th>제목</th>
   <th>글쓴이</th>
   <th>날짜</th>
   <th>조회</th>
  </tr>
<?php
$sql = "SELECT * FROM cunews ORDER BY wdate DESC limit {$start}, {$list}";
$rs = $db->query($sql);
$data = $rs->fetchAll();
foreach($data as $news):
?>  
  <tr>
   <td><?php echo $news['id'];?></td>
   <td>
    <a href="view.php?id=<?php echo $news['id'];?>">
    <?php echo $news['title'];?>
    </a>
   </td>
   <td>
    <?php echo $news['writer'];?>
   </td>
   <td><?php echo $news['wdate'];?></td>
   <td><?php echo $news['hit'];?></td>
  </tr>
<?php 
endforeach;
?>  
 </table>
 <p class="post_page">
  <a href="post.php?page=<?php echo $prev;?>#newslist" class="btn btn-default"><i class="fas fa-chevron-left"></i> 이전페이지</a>
  <a href="post.php?page=<?php echo $next;?>#newslist" class="btn btn-default">다음페이지 <i class="fas fa-chevron-right"></i></a>
 </p>
</article>
<?php include("footer.php"); ?>