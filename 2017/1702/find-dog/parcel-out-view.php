<?php include("header.php"); ?>

<?php
  
  $id = 0;

  if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
  }  

  $sql = "SELECT * FROM parcel WHERE id={$id}";
  $rs = $db->query($sql);
  $row = $rs->fetch();

  $fileone = $row['fileone'];
  $filetwo = $row['filetwo'];
  $filethree = $row['filethree'];
  
  $srcone = "./uploads/parcel/{$fileone}"; 
  $srctwo = "./uploads/parcel/{$filetwo}"; 
  $srcthree = "./uploads/parcel/{$filethree}"; 

?>

<section class="view">
  <h2 class="animal-name"><?php echo $row['kinds'] ?> <?php echo $row['name'] ?></h2>
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
        <td>나이</td>
        <td><?php echo $row['age'] ?>세</td>
      </tr>
      <tr>
        <td>모색</td>
        <td><?php echo $row['color'] ?></td>
        <td>접종 유무</td>
        <td><?php echo $row['ino'] ?></td>
      </tr>
      <tr>
        <td>중성화 유무</td>
        <td><?php echo $row['neu'] ?></td>
        <td>특이 사항</td>
        <td><?php echo $row['sgity'] ?></td>
      </tr>      
    </table>
    <div class="view-div">
      <img src="<?php echo $srcone ?>" alt="강아지 사진" class="view-img" width="790">
    </div>
    <p class="phrase">
      파양동물 입양 시 소정의 책임비가 발생하니 참고 부탁드립니다<br>
      이 때 발생되는 책임비는 또 다른 파양동물의 관리 비용에 이용되고 있습니다<br>
      아이들에 평생을 결정하는 선택, 신중히 생각해 보신 후에 연락해주세요
    </p>
    <div class="view-div">
      <img src="<?php echo $srctwo ?>" alt="강아지 사진" class="view-img" width="790">
    </div>
    <p class="phrase">
      강아지풀에서 보호관리 중인 보호동물 아이들은<br>
      유동적인 부분이 많아 전화, 상담을 통해 확인이 어려운 점 양해드리며<br>
      방문 하시면 더 많은 아이들을 만나 보실 수 있습니다
    </p>
    <div class="view-div">
      <img src="<?php echo $srcthree ?>" alt="강아지 사진" class="view-img" width="790">
    </div>
  </article>
  <div class="comment">
    <div class="msg-icon">
      <i class="far fa-heart"></i>
      <span>4</span>
      <i class="far fa-comment"></i>
      <span>2</span>
    </div>
    <form action="parcel-comment-ok.php" method="post">
      <div class="form-group">
        <input type="text" name="content" class="form-control" id="user-text" placeholder="댓글">
      </div>
      <button type="submit" class="btn btn-success">확인</button>  
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    </form>
    <?php 
      $dsql = "SELECT * FROM parcelcmt WHERE id={$id}";
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
