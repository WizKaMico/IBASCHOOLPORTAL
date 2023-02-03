<?php
	//connection
	include_once('../../connection/connection.php');
 
	$sql = "SELECT role, count(*) as number FROM login GROUP BY role";
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
<div id="piechart" style="width: 500px; height: 400px;"></div>
 
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
	               		echo "['".$row["role"]."', ".$row["number"]."],";  
	              	}  
              	?>  
         	]);  
    var options = {  
          		title: 'Percentage of Roles',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>