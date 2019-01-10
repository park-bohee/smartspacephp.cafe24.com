<?php include("header.php"); ?>

<?php

$id = 0;

if ( isset($_GET['id']) ) {
  $id = $_GET['id'];
}

$sql = "SELECT * FROM find WHERE id={$id}";
$rs = $db->query($sql);
$row = $rs->fetch();

$filemain = $row['filemain'];
$filesub = $row['filesub'];
$srcmain = "./uploads/find/{$filemain}";
$srcsub = "./uploads/find/{$filesub}";

?>

<section class="view">
  <h2 class="animal-name"><?php echo $row['farea'] ?> <?php echo $row['kinds'] ?></h2>
  <article>
    <table>
      <tr>
        <td>묘종 / 견종</td>
        <td><?php echo $row['kinds'] ?></td>
        <td>분류</td>
        <td><?php echo $row['cftion'] ?></td>
      </tr>
      <tr>
        <td>성별</td>
        <td><?php echo $row['gender'] ?></td>
        <td>발견 날짜</td>
        <td><?php echo $row['ftime'] ?></td>
      </tr>
      <tr>
        <td>발견 지역</td>
        <td><?php echo $row['farea'] ?></td>
        <td>전화 번호</td>
        <td><?php echo $row['pnumber1'] ?> - <?php echo $row['pnumber2'] ?> - <?php echo $row['pnumber3'] ?></td>
      </tr>
      <tr>
        <td>특이 사항</td>
        <td colspan="3"><?php echo $row['sgity'] ?></td>
      </tr>      
    </table>
    <div class="view-div">
      <img src="<?php echo $srcmain ?>" alt="강아지 사진" class="view-img" width="790">
    </div>
    <div class="view-div">
      <img src="<?php echo $srcsub ?>" alt="강아지 사진" class="view-img" width="790">
    </div>
  </article>
  <div class="comment">
    <div class="msg-icon">
      <i class="far fa-heart"></i>
      <span>4</span>
      <i class="far fa-comment"></i>
      <span>2</span>
    </div>
    <form action="find-comment-ok.php" method="post">
      <div class="form-group">
        <input type="text" name="content" class="form-control" id="user-text" placeholder="댓글">
      </div>
      <button type="submit" class="btn btn-success">확인</button>  
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    </form>
    <?php 
      $dsql = "SELECT * FROM findcmt WHERE id={$id}";
      $rs = $db->query($dsql);
      $rows = $rs->fetchAll();
      foreach($rows as $row):
    ?>
    <div class="comment-user">
      <p class="user-name"><?php echo $row['writer']; ?></p>
      <p class="user-time"><?php echo $row['wdate']; ?></p>
      <p class="user-com"><?php echo $row['content']; ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include("footer.php"); ?>
