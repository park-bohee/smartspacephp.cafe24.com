<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>CU</title>
	<link rel="stylesheet" href="css/cu.css" type="text/css">
	<link rel="shortcut icon" type="image⁄x-icon" href="http://icons-for-free.com/icon/download-chip_potato_chip_snack_icon-288022.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/myScript.js"></script>
	<script src="js/click.js"></script>
</head>

<body>
	<nav>
		<div class="line_top">
			<div class="header_login">
				<div>
			<?php if($login): ?>
				<a href="logout.php">로그아웃</a>
				<a href="#"><?php echo $loginname?>님</a>
			<?php else: ?>
				<a href="join.php">회원가입</a>
				<a href="login.php">로그인</a>
			<?php endif; ?>	
				</div>
			</div>
		</div>
		<div class="header_title">
			<a href="index.php">
				<img src="image/logo.jpg" alt="CU">
			</a>
			<div class="header_menu">
				<ul class="header_ul">
					<li class="header_li">
						<a href="goods.php">상품</a>
					</li>
					<li class="header_li">
						<a href="event.php">행사</a>
					</li>
					<li class="header_li">
						<a href="service.php">서비스</a>
					</li>
					<li class="header_li">
						<a href="membership.php">멤버십</a>
					</li>
					<li class="header_li">
						<a href="business.php">창업</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>