<?php
session_start();
include ("connection.php");
include_once ("functions.php");

$user_data = check_login($conn);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty Digital Revenue 2021</title>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>Faculty Digital Revenue 2021 (IN IDR)</h2>
	</center>
 
 
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['January'];					
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['February'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['March'];
					?>
					<?php } ?>,


					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['April'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['May'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['June'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['July'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['August'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['September'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['October'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['November'];
					?>
					<?php } ?>,

					<?php 
					$id = 1;
					$months = mysqli_query($conn,"SELECT * FROM charts");
					while($d=mysqli_fetch_array($months)) {
					echo $d['December'];
					?>
					<?php } ?>
					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<br> <br> <br> <br> <br>


<style>
.center {
  margin: 0;
  position: absolute;
  top: 80%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 25px;
}
</style>



		<?php
              if(isset($_SESSION['id']))
              {
                
     ?>   <a class="btn btn-info btn-lg; center" href="logout.php">
			<span class="glyphicon glyphicon-log-out"></span> Logout </a> <?php
              }else {
                echo "error";
              }
              
             
                ?>

</body>
</html>