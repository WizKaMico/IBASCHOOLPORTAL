<?php
	//connection
	include_once('../../connection/connection.php');
 
	$sql = "SELECT user_gender, count(*) as number FROM early_registration GROUP BY user_gender";
	$query = $con->query($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- this is where we show our chart -->
<?php ?>
<div id="piechart" style="width: 350px; height: 200px;"></div>
 
<!-- Load our Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
	google.charts.load('current', {'packages':['corechart']});  
	google.charts.setOnLoadCallback(drawChart);  
	function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
              	['Role', 'Total'],  
              	<?php  
	              	while($row = $query->fetch_assoc()){  
	               		echo "['".$row["user_gender"]."', ".$row["number"]."],";  
	              	}  
              	?>  
         	]);  
    var options = {  
          		title: 'Early Registration Total (Gender Separated)',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>