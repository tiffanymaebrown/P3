<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--My Css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<title>Courtview Cleaners Price</title>
</head>

<body>
	<!--Navigation-->
	<?php require_once('assets/partials/nav.php'); ?>

	<h1>Delivery Orders</h1>
	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>SERVICE</th>
			<th>ADDRESS</th>
			<th>PHONE</th>
			<th>EMAIL</th>
			<th>DESCRIPTION</th>
		</tr>

	<?php
		$d = file_get_contents('data.json');
		$d = json_decode($d, true);
		foreach($d as $k => $o){
			echo '<tr>
					<td>'.++$k.'</td>
					<td>'.$o['fn'].'</td>
					<td>'.$o['service'].'</td>
					<td>'.$o['add'].'</td>
					<td>'.$o['ph'].'</td>
					<td>'.$o['eml'].'</td>
					<td>'.$o['msg'].'</td>
				</tr>';
		}
	?>
	</table>
	<br>
	
	<!--Footer-->
	<?php require_once('assets/partials/footer.php'); ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>