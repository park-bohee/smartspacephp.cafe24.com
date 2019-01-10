<?php include("header.php"); ?>
<section class="section-log">
  <div class="sign sign-up">
    <h2>회원가입</h2>
    <form action="sign-up-ok.php" method="post">
      <label for="username" class="control-label control-label-nb">이름 </label>    
      <input type="text" name="username" id="username" class="form-control">
      <label for="userid" class="control-label control-label-id">아이디 </label>
      <input type="text" name="userid" id="userid" class="form-control">
      <label for="userpw" class="control-label control-label-pw">비밀번호 </label>    
      <input type="password" name="userpw" id="userpw" class="form-control">
      <label for="usermail" class="control-label control-label-mail">이메일 </label>    
      <input type="email" name="useremail" id="usermail" class="form-control">
      <button type="submit" class="btn btn-success">확인</button>      
      <a href="sign-in.php">로그인</a>
    </form>
  </div>
</section>
<?php include("footer.php"); ?>