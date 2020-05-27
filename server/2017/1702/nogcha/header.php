<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">    
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <title>박녹차</title>
</head>
<body>
  <div class="wrap">
    <header>
      <div class="logo">
        <a href="index.php">
          <p>박녹차</p>
          <i class="fas fa-seedling"></i>
        </a>
      </div>
      <?php if($login): ?>
        <div class="signout">
          <?php echo $loginname; ?>님
          <a href="signout-ok.php" class="btn btn-default">로그아웃</a>
        </div>
      <?php else: ?>
        <div class="signin">
          <form action="signin-ok.php" method="post">
            <div class="form-group">
              <input type="text" name="userid" class="form-control" placeholder="아이디" autocomplete=off required>
            </div>
            <div class="form-group">
              <input type="password" name="userpw" class="form-control" placeholder="비밀번호" autocomplete=off required>
            </div>
            <button type="submit" class="btn btn-warning">로그인</button>
          </form>
        </div>
      <?php endif; ?>
    </header>
    <section>