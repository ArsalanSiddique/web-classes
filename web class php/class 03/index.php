<?php


$cars = [
	["bmw", 		12, 77, 35, 5],
	["mercedes", 	15, 80, 55, 6],
	["toyota", 		8, 95, 88, 8],
	["honda", 		0, 05, 99, 9],
	["kia", 		01, 03, 87, 10],
	["Alswin", 		5, 9, 66, 6],
	["Suzuki", 		10, 0, 45, 8],
];


// echo "<pre>";
// var_dump($cars);
// echo "</pre>";


// echo "<br/>Name: ".$cars[4][0];
// echo "<br/>Stock: ".$cars[4][1];
// echo "<br/>Sold: ".$cars[4][2];


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cars</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-10">
				<table class="m-3 table table-bordered table-hover">
					<thead>
					<tr>
						<th>Name</th>
						<th>Stock</th>
						<th>Sold</th>
						<th>Price (Lakh)</th>
						<th>Milege</th>
					</tr>
					</thead>
					<tbody>
						<?php

						for($i = 0; $i < count($cars); $i++) {

							$car = $cars[$i];

							echo "<tr>";

							for($j = 0; $j < count($car); $j++) {
								echo "<td>".$car[$j]."</td>";
							}

							echo "</tr>";
						}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	

</body>
</html>