<?php
	
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$operacio = $_POST["operacio"];
	
	if (Validar($num1) and Validar($num2)){
		$resultat = Calcular($num1, $num2, $operacio);		
		echo "El resultat es igual a $resultat";
	}

	function Calcular($num1, $num2, $operacio){

		switch ($operacio){
			case '+': 
				$resultat = $num1 + $num2;    
    			break;
			case '-': 
				$resultat = $num1 - $num2;    
    			break;
			case '*': 
				$resultat = $num1 * $num2;    
    			break;
			case '%': 
			case '/':
				if ($num2 == 0) {
					$resultat ="infinit";
				} elseif($operacio=='%') {
					$resultat = $num1 % $num2;   
				} 
				else {
					$resultat = $num1 / $num2;
				}
				break;    			
  		}
		return $resultat;
	}

	function Validar($num):bool{
		$bolean = is_numeric($num);
		if ($num == '') {
			echo "Error, ha d'indicar els valors";
			return FALSE;
		} elseif (!$bolean) {	
			echo "Error, el valor no és un número";
			return FALSE;
		}
		return TRUE;
	}
?>