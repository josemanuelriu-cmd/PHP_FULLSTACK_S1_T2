<?php
	define("PREUMINIM" , 10);
	define("COSTMINUT" , 5);
	define("TEMPSMINIM" , 3);

	$time = $_POST["durada"];		
	$boleanTime = is_numeric($time);	

	if ($time == '' or !$boleanTime) {
		echo "Error, ha d'introduir un valor numéric";
	} 
 	else {
		$preu = calcularPreuTrucada($time);		
		echo "El preu de la trucada es de $preu centims";
	}

	function calcularPreuTrucada($minutes){
		if ($minutes <=TEMPSMINIM) {
			$price = PREUMINIM;
		}
		else {
			$extra = $minutes-TEMPSMINIM;
			$price = PREUMINIM + ($extra*COSTMINUT);
		}
		return $price;
	}

?>