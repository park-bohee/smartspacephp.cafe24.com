<?php include("header.php") ?>
<section class="section-th">
  <p class="phrase">많은 관심과 사랑으로 보살펴주세요</p>
  <?php
    $sql = "SELECT * FROM fdparcel";
    $rs = $db->query($sql);
    $rows = $rs->fetchAll();

    foreach($rows as $row):
      $id = $row['id'];
      $fileone = $row['fileone'];
      $filetwo = $row['filetwo'];
      $filethree = $row['filethree'];
      
      $srcone = "./uploads/parcel/{$fileone}"; 
      $srctwo = "./uploads/parcel/{$filetwo}"; 
      $srcthree = "./uploads/parcel/{$filethree}"; 

      $sql_cnt = "SELECT count(*) FROM fdparcelcmt WHERE id={$id}";
      $rs_cnt = $db->query($sql_cnt);
      $row_cnt = $rs_cnt->fetch();    
  ?>
  <article>
    <a href="parcel-out-view.php?id=<?php echo $row['id']; ?>">
      <div class="animal-img">
        <img src="<?php echo $srcone; ?>" alt="대표 이미지" height="240">
      </div>
      <p><?php echo $row['kinds']; ?> <?php echo $row['name']; ?> 책임분양</p>
      <div class="msg-icon">
        <i class="far fa-heart"></i>
        <span>0</span>
        <i class="far fa-comment"></i>
        <span><?php echo $row_cnt['count(*)']; ?></span>
      </div>
    </a>
  </article>
  <?php endforeach; ?>
</section>
<?php include("footer.php") ?>