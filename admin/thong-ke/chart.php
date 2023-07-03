
<div class="container">
<h1>Biểu đồ</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Loại', 'Số lượng'],
  <?php
  foreach($item as $loai){
    echo "['$loai[ten_loai]',$loai[so_luong]]," ; 
  }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<a class="btn btn-success" href="index.php?list">Thống kê hàng hóa</a>
</div>