<?php
	include 'bus.php';
	include 'bike.php';
	include 'truck.php';
	
	class Vehicle extends Bus {
		use Bike, Truck;       // Note : if the 2 traits have same method then we have to use -> Truck::speed insteadof Bike;  in curly, that means which method I want to access have to be define here. If I want to access both of them then we have to --> Bike::speed as bSpeed(whatever I named it), then this bSpeed have to use in echo/during calling the function.

	}

	$obj = new Vehicle();
	echo $obj->engine() . '<br>';  //extending through class.

	echo $obj->speed() . '<br>';   //this comes from bike trait.
	echo $obj->weight() . '<br>';   //this comes from truck trait.


?>