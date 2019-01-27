    <div class="imgslide">
      <img src="image/header/1.jpg" alt="slideimg" width="940" height="600">
      <img src="image/header/2.jpg" alt="slideimg" width="940" height="600">
      <img src="image/header/3.jpg" alt="slideimg" width="940" height="600">
    </div>
    <section class="section-th">
      <p class="phrase">
        안락사가 얼마 남지 않은 유기동물입니다<br>
        많은 사랑과 관심 부탁드립니다
      </p>
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
  <script src="js/imgslide.js"></script>