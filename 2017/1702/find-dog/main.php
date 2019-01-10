
    <div class="imgslide">
      <img src="image/header/1.jpg" alt="이미지슬라이드1" width="940px" height="600px">
      <img src="image/header/2.jpg" alt="이미지슬라이드2" width="940px" height="600px">
      <img src="image/header/3.jpg" alt="이미지슬라이드3" width="940px" height="600px">
    </div>
    <section class="section-th">
      <p class="phrase">
        안락사가 얼마 남지 않은 유기동물입니다<br>
        많은 사랑과 관심 부탁드립니다
      </p>
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
            <span><script>document.write(parseInt(Math.random() * 10) + 1)</script></span>
            <i class="far fa-comment"></i>
            <span>2</span>
          </div>
        </a>
      </article>
        <?php endforeach; ?>
    </section>