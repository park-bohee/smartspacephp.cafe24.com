<?php include("config.php"); ?>
<?php 
  $sid = 0;
  $best = "";
  $good = "";
  $improve = "";

  if ( isset($_POST['sid']) ) {
    $sid = $_POST['sid'];
  }
  if ( isset($_POST['best']) ) {
    $best = $_POST['best'];
  }
  if ( isset($_POST['good']) ) {
    $good = $_POST['good'];
  }
  if ( isset($_POST['improve']) ) {
    $improve = $_POST['improve'];
  }

  $sql = "INSERT INTO sdhs (sid, best, good, improve) VALUES($sid, '{$best}', '{$good}', '{$improve}')";
  $db->query($sql);  

  $sqls = "SELECT no FROM sdhs WHERE sid={$sid}";
  $ress = $db->query($sqls);
  
  $rows = $ress->fetch();
  $nos = $rows['no'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SDHS Conference 2018</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div id="wrap">
    <div id="lucky">
      <h3><span>SDHS</span> Conference 2018</h3>
      <div>
        <p id="thank">설문의 응해주셔서 감사합니다 !</p>
        <p id="lucky-num"><?php echo $nos; ?></p>
      </div>
      <button id="btn" class="btn btn-primary" onclick="luckyNum()">행운권 번호 확인하기</button>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
  <script>
    function luckyNum() {
      var t = document.getElementById("thank");
      var n = document.getElementById("lucky-num");
      var b = document.getElementById("btn");

      b.style.visibility = "hidden";
      t.style.display = "none";
      n.style.display = "block";
    }
  </script>
 </body>
</html>