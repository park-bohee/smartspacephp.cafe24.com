<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>강아지풀</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</head>
<body>
  <div class="wrap">
    <header>
      <div class="logo">
        <a href="index.php">
          <p>강아지풀</p>
          <img src="image/header/logo.png" alt="로고이미지" width="70" height="70">
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="parcel-out.php">유기동물 분양받아요</a></li>
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