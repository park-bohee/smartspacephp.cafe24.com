<?php include("header.php"); ?>

<section class="section-th">
  <p class="phrase">반려동물을 찾으시는 분은 '반려동물 찾아주세요' 에 글을 올려주세요</p>
  <div>
    <a href="protect-write.php" class="btn btn-success">
      유기동물 등록하기
      <img src="image/header/dog.png" alt="버튼 이미지" width="25">
    </a>
  </div>
  <?php
    $sql = "SELECT * FROM protect";
    $rs = $db->query($sql);
    $rows = $rs->fetchAll();
    foreach($rows as $row):

      $file = $row['file'];
      $src = "./uploads/protect/{$file}"; 
  ?>
  <article>
    <a href="protect-view.php?id=<?php echo $row['id'];?>">
      <div class="animal-img">
        <img src="<?php echo $src;?>" alt="대표 이미지" height="240">
      </div>
        <p><?php echo $row['darea']; ?> <?php echo $row['kinds']; ?></p>
      <div class="msg-icon">
        <i class="far fa-clock"></i>
        <span><?php echo $row['dtime']; ?></span>
        <i class="far fa-comment"></i>
        <span>2</span>
      </div>
    </a>
  </article>
  <?php endforeach; ?>
</section>

<?php include("footer.php"); ?>