<?php include("header.php") ?>

<section class="section-th">
  <p class="phrase">많은 관심과 사랑으로 보살펴주세요</p>
  <?php
    $sql = "SELECT * FROM parcel";
    $rs = $db->query($sql);
    $rows = $rs->fetchAll();
    foreach($rows as $row):

    $fileone = $row['fileone'];
    $filetwo = $row['filetwo'];
    $filethree = $row['filethree'];
    
    $srcone = "./uploads/parcel/{$fileone}"; 
    $srctwo = "./uploads/parcel/{$filetwo}"; 
    $srcthree = "./uploads/parcel/{$filethree}"; 
  ?>
  <article>
    <a href="parcel-out-view.php?id=<?php echo $row['id']; ?>">
      <div class="animal-img">
        <img src="<?php echo $srcone; ?>" alt="대표 이미지" height="240">
      </div>
      <p><?php echo $row['kinds']; ?> <?php echo $row['name']; ?> 책임분양</p>
      <div class="msg-icon">
        <i class="far fa-heart"></i>
        <span>4</span>
        <i class="far fa-comment"></i>
        <span>2</span>
      </div>
    </a>
  </article>
  <?php endforeach; ?>
</section>

<?php include("footer.php") ?>
