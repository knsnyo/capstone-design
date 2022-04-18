<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" href="https://naver.github.io/billboard.js/release/latest/dist/theme/datalab.min.css">
  <script src="https://naver.github.io/billboard.js/release/latest/dist/billboard.pkgd.min.js"></script>
  <script defer src="../../front/js/chart.js?afeter4"></script>
  <script defer src="../../front/js/chart1.js?after4"></script>
  <script defer src="../../front/js/chart2.js?after4"></script>
</head>

<body>
  <?php include "../../front/header/header.php" ?>
  <div style="margin-top: 60px;">
    <div style="margin-bottom:40px;">
      <h1><span style="font-size:20pt; 
      display:flex; 
      justify-content:center; 
      align-items:center; ">Graph</span></h1>
    </div>
      <div style="float:left; width:33%;"><div id="barChart"></div></div>
      <div style="float:left; width:33%;"><div id="barChart1"></div></div>
      <div style="float:left; width:33%;"><div id="barChart2"></div></div>
      <div style="clear:both;"></div>
    </div>
  </div>
  <?php include "../../front/footer/footer.php" ?>
</body>
</html>