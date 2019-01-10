<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>강아지풀</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">  
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="wrap">
    <header>
      <div class="logo">
        <a href="index.php">
          <p>강아지풀</p>
          <img src="image/header/logo.png" alt="로고이미지" width="80px" height="80px">
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="parcel-out.php">유기동물 분양</a></li>
          <li><a href="protect.php">유기동물 보호중이에요</a></li>
          <li><a href="find.php">반려동물 찾아주세요</a></li>
          <li>
          <?php if($login): ?>
            <div class="login">
              <p><?php echo $loginname; ?>님</p>
              <a href="sign-out-ok.php" class="btn btn-default">로그아웃</a>
            </div>
          <?php else: ?>
            <a href="sign-in.php">로그인</a>
          <?php endif; ?>
          </li>
        </ul>
      </nav>
    </header>
