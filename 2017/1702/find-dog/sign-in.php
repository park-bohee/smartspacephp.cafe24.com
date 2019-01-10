<?php include("header.php"); ?>
<section class="section-log">
  <div class="sign sign-in">
    <h2>로그인</h2>
    <form action="sign-in-ok.php" method="post">
      <label for="userid" class="control-label control-label-id">아이디 </label>
      <input type="text" name="userid" id="userid" class="form-control">
      <label for="userpw" class="control-label control-label-pw">비밀번호 </label>    
      <input type="password" name="userpw" id="userpw" class="form-control"> 
      <button type="submit" class="btn btn-success">확인</button>
      <a href="sign-up.php">회원가입</a>
    </form>
  </div>
</section>
<?php include("footer.php"); ?>