
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Bean Car App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

	<div></div>
	<div class="col-lg-12"></div>
		<br>
		<h1 class="text-warning text-center"> Display List </h1>
 		<br>
		<table class="table table-striped table-hover table-bordered">
			
			<tr class="bg-dark text-white text-center" >
				
				<th> Id </th>
				<th> Company Name </th>
				<th> Model Name </th>
				<th> Color Name </th>
				<th> Date of Purchase </th>
				<th> Price </th>
				<th> Engine Capacity </th>
				<th> Seating Capacity </th>
				<th> Licence Capacity </th>
				
				<th> Update </th>
				<th> Delete </th>

			</tr>

			<?php

			include 'connect.php';

			
			  $q = "select * from mrbeanapp";

			  $query = mysqli_query($conn,$q);

			  while($res = mysqli_fetch_array($query)) {


			?>



			<tr class="text-center">
				
				<td> <?php echo $res['id']; ?> </td>
				<td> <?php echo $res['companyname']; ?> </td>
				<td> <?php echo $res['modelname']; ?> </td>
				<td> <?php echo $res['colorname']; ?> </td>
				<td> <?php echo $res['dateofpur']; ?> </td>
				<td> <?php echo $res['price']; ?> </td>
				<td> <?php echo $res['enginecap']; ?> </td>
				<td> <?php echo $res['seatingcap']; ?> </td>
				<td> <?php echo $res['licencenum']; ?> </td>

				<td> <button class="btn-primary  btn"> <a href="update.php?id= <?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
				
				<td> <button class="btn-danger btn"> <a href="delete.php?id= <?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>

				

				

			</tr>

			<?php
				}
			?>



		</table>



</body>

</html>