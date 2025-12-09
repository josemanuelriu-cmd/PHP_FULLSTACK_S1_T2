<?php

	function ShowList(int $num=10, int $increment=1):void{
		echo "El número fins a on comptar es $num <br>";
		echo "L'increment es de $increment <br><br>";
		for ($resultat = 1; $resultat <= $num; $resultat+=$increment) {
			echo "El número es: $resultat<br>";
		}		
	}

	ShowList();
	echo "<hr>";
	ShowList(5);
	echo "<hr>";
	ShowList(20,5);

?>