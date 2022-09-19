	

	<?php
	
// error_reporting(0);
		$username = "root";
		$password = "";
		$server = 'localhost:7882';
		$db = 'foodwebsite';

		$connection = mysqli_connect($server,$username,$password,$db);


		if(isset($_POST['submit'])){
			$name = $_POST['Name'];
			$order = $_POST['Order'];
			$quantity = $_POST['Quantity'];
			$address = $_POST['Address'];
			$number = $_POST['Number'];
			$add_food = $_POST['Add_food'];
			
			$date = date("d.m.y",strtotime($_POST['date']));

		

			$ins = "INSERT INTO `food_order`(`Name`, `Order`, `Quantity`, `Address`, `Number`, `Add_food`, `Date`) VALUES ('[$name]','[$order]','[$quantity]','[$address]','[$number]','[$add_food]','[$date]')";

			$query = mysqli_query($connection,$ins);
			


		}


	?>



