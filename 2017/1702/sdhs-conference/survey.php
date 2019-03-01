<?php 
  $sid = 0;
  if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
  }
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
    <div id="survey">
      <h3><span>SDHS</span> Conference 2018</h3>
      <form action="survey-ok.php" method="POST">
        <div class="form-group">
          <input type="hidden" name="sid" value="<?php echo $sid; ?>">
          <select name="best" class="custom-select" required>
            <option selected disabled value="">BEST 강의를 선택해주세요</option>
            <option value="1">처음엔 누구나 다 그렇다 ( KOI )</option>
            <option value="2">실리콘밸리로 가는 길 ( KOI )</option>
            <option value="3">동아리 소개 ( MOD )</option>
            <option value="4">해커가 되는 방법 ( ROOT )</option>
            <option value="5">2018 ON 총결산 ( ON )</option>
            <option value="6">BSP와 랜덤맵 알고리즘 ( ON )</option>
            <option value="7">남 탓하지 않기 ( ON )</option>
            <option value="8">WEB & CHATBOT ( SS )</option>
            <option value="9">크롤링과 이미지 인식 ( SS )</option>
            <option value="10">변화하는 시대, 리더들의 방향 ( TOI )</option>
            <option value="11">전공과 자기 개발 ( LUGH )</option>
          </select>
        </div>
        <div class="form-group">
          <label for="good">* 좋았던 점 혹은 느낀 점을 입력해주세요</label>
          <textarea class="form-control" id="good" name="good" rows="3" autocomplete="off" required></textarea>
        </div>
        <div class="form-group">
          <label for="improve">* 개선되었으면 하는 점을 입력해주세요</label>
          <textarea class="form-control" id="improve" name="improve" rows="3" autocomplete="off" required></textarea>
        </div>
      <button type="submit" class="btn btn-primary">설문조사 제출하기</button>
      </form>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>
</html>