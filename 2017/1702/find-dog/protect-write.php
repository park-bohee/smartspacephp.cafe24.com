<?php include("header.php"); ?>

<section class="write">
  <h2>유기 동물 등록</h2>
  <form action="protect-write-ok.php" method="post" enctype="multipart/form-data">
    <article>
      <div class="write-etc">
        <div class="write-etc-div">사진 1 ( 메인 )</div>
        <p>발견 지역 | 묘종 / 견종</p>
        <div class="msg-icon">
          <i class="far fa-clock"></i>
          <span>발견 시간</span>
          <i class="far fa-comment"></i>
          <span>2</span>
        </div>
      </div>
      <div class="form-group">
        <label for="upmain">사진 1 ( 메인 )</label>
        <input type="file" name="upmain" id="upmain">
      </div>
      <!-- <div class="form-group">    
        <label for="upsub">사진 2</label>
        <input type="file" name="upsub" id="upsub">
      </div> -->
    </article>
    <article>
      <div class="form-group">
        <label for="kinds">묘종 / 견종</label>
        <input type="text" name="kinds" id="kinds" class="form-control" placeholder="말티즈">
      </div>
      <div class="form-group">    
        <label for="cftion">분류</label>
        <input type="text" name="cftion" id="cftion" class="form-control" placeholder="강아지">
        <!-- 분류 classfication -->
      </div>
      <div class="form-group">    
        <label for="gender">성별</label>
        <input type="text" name="gender" id="gender" class="form-control" placeholder="남자 / 여자">
      </div>
      <div class="form-group">    
        <label for="darea">발견 지역</label>
        <input type="text" name="darea" id="darea" class="form-control" placeholder="XX구 XX동">
        <!-- 발견 discovery -->
      </div>
      <div class="form-group">    
        <label for="dtime">발견 날짜</label>
        <input type="text" name="dtime" id="dtime" class="form-control"placeholder="XX월 XX일">
      </div>
      <div class="form-group">        
        <label for="pnumber1">전화 번호</label>
        <input type="text" name="pnumber1" id="pnumber1" class="pnumber form-control">
        <input type="text" name="pnumber2" id="pnumber2" class="pnumber form-control">
        <input type="text" name="pnumber3" id="pnumber3" class="pnumber form-control">    
        <!-- 전화 번호 phone number -->
      </div>
      <div class="form-group">              
        <label for="sgity">특이 사항</label>
        <textarea name="sgity" id="sgity" class="form-control" rows="2"></textarea>
        <!-- 특이 사항 sigularity -->
      </div>
    </article>
    <div>
      <button type="submit" class="btn btn-success">등록하기</button>
    </div>
  </form>
</section>
      
<?php include("footer.php"); ?>
