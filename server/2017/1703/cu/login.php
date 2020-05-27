<?php
include("header.php");
$userid = "";
$userpw = "";
if( isset($_POST['userid']) ){
 $userid = $_POST['userid'];
}
if( isset($_POST['userpw']) ){
 $userpw = $_POST['userpw'];
}
if( $userid && $userpw ) {
 $sql = "SELECT * FROM cuuser ";
 $sql .= "WHERE userid='{$userid}' ";
 $sql .= "and userpw='{$userpw}'";
 if( $rs = $db->query($sql) ) {
  if( $user = $rs->fetch() ) {
	$_SESSION['loginid'] = $user['userid'];
   $_SESSION['loginname'] = $user['username'];
  }
 }
 header("Location: index.php");
}
?>
<body>
	<div class="login">
		<form action="login.php" method="post" class="login_form">
			<div class="form-group">
				<input type="text" name="userid" id="userid" placeholder="아이디" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="password" name="userpw" id="userpw" placeholder="비밀번호" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-success">
				<i class="fas fa-sign-in-alt"></i> 로그인</button>
			<a href="join.php" class="btn btn-secondary">
				<i class="fas fa-user-plus"></i> 회원가입</a>
		</form>
	</div>
</body>

<script>
 function login() {
  var userid = $("#userid").val();
  var userpw = $("#userpw").val();
  if( ! userid || ! userpw ) {
   alert("필수항목이 빠졌습니다.");
   return false;
  }
 }
</script>

<?php include("footer.php"); 