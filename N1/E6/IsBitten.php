<?php
	
	//$boleanMossegat = IsBitten();

	//if ($boleanMossegat) {
	if (IsBitten()){
		echo "<h1>Charlie em va mossegar el dit!</h1>";
	} 
 	else {
		echo "<h1>Charlie NO em va mossegar el dit!</h1>";
	}

	function IsBitten(){
		$value = rand(1, 2);
		if ($value==1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

?>