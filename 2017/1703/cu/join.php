<?php include("header.php"); ?>
<div class="join">
    <form action="joinok.php" method="post" onsubmit="return check();" class="join_form">
    <div class="form-group">
        <input type="text" name="username" id="username" required class="form-control" placeholder="이름">
    </div>
    <div class="form-group">
        <input type="text" name="userid" id="userid" required class="form-control" placeholder="아이디">
    </div>
    <div class="form-group">
        <input type="password" name="userpw" id="userpw" required class="form-control" placeholder="비밀번호">
    </div>
    <div class="form-group">
        <input type="password" name="userpw2" id="userpw2" required class="form-control" placeholder="비밀번호 확인">
    </div>
    <div class="form-group">
        <input type="text" name="phone" id="phone" required class="form-control" placeholder="전화번호">
    </div>
    <div class="form-group">
        <input type="text" name="email" id="email" required class="form-control" placeholder="Email">
    </div>
    <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> 회원가입</button>
 </form>
</div>

<script>
 function check() {
  var username = $("#username").val();
  var userid = $("#userid").val();
  var userpw = $("#userpw").val();
  var userpw2 = $("#userpw2").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  if( ! username || ! userid || ! userpw || ! userpw2 || ! phone || ! email ) {
   alert("필수항목이 빠졌습니다.");
   return false;
  }
  if( userpw != userpw2 ) {
   alert("비밀번호가 다릅니다.");
   return false;
  }
 }
</script>

<?php include("footer.php"); ?>