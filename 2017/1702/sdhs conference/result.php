<?php include("config.php"); ?>
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
  <?php 
    $sql = "SELECT best, count(best) as cnt FROM sdhs group by best";
    $res = $db->query($sql);
    
    $rows = $res->fetchAll();
    foreach($rows as $row):
      $best = $row['best'];
      $cnt = $row['cnt'];
  ?>
    <input type="hidden" id="best<?php echo $best; ?>" value="<?php echo $cnt; ?>">
  <?php endforeach; ?>
  <div id="wrap">
    <div id="result">
      <h3><span>SDHS</span> Conference 2018</h3>
      <canvas id="chart"></canvas>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/chart.min.js"></script>
  <script type="text/javascript">
    var ctx = document.getElementById("chart");
    
    var arr = new Array();

    for (let i = 1; i <= 12; i++) {
      var id = 'best' + String(i);
      var best = document.getElementById(id) ? document.getElementById(id) : 0;
      if ( best ) {
        best = Number(best.value);
      }
      arr.push(best);  
    }

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["김민규, 김재현", "한재상", "김원길, 은영환", "최찬우", "조가연", "이용기", "최정익", "허정욱, 전승민", "박보희", "김영종", "김유빈"],
        datasets: [{
          label: '',
          data: [arr[0], arr[1], arr[2], arr[3], arr[4], arr[5], arr[6], arr[7], arr[8], arr[9], arr[10], arr[11]],
          backgroundColor: [
            'rgba(255, 116, 115, 0.8)',
            'rgba(255, 201, 82, 0.8)',
            'rgba(71, 184, 224, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(103, 213, 181, 0.8)',
            'rgba(238, 119, 133, 0.8)',
            'rgba(200, 158, 196, 0.8)',
            'rgba(132, 177, 237, 0.8)',
            'rgba(255, 188, 66, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(255, 99, 132, 0.8)'
          ],
          borderColor: [
            'rgba(255, 116, 115, 1)',
            'rgba(255, 201, 82, 1)',
            'rgba(71, 184, 224, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(103, 213, 181, 1)',
            'rgba(238, 119, 133, 1)',
            'rgba(200, 158, 196, 1)',
            'rgba(132, 177, 237, 1)',
            'rgba(255, 188, 66, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 2,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              min: 0,
              stepSize: 5
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>
</body>
</html>