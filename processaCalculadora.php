<?php

	$numero1  		= $_GET["numero1"];
	$numero2 		= $_GET["numero2"];
	$operacao 		= $_GET["operacao"];

	echo "<h3> Confira o resultado do calculo efetuado! </h3> </br>"; 
	
	
	//Lógica para somar
	if ($operacao == "somar") {
		$operacao = $numero1 + $numero2;
		echo "O resultado da soma dos valores é " .$operacao;
	}

	//Lógica para subtrair
	if ($operacao == "subtrair") {
		$operacao = $numero1 - $numero2;
		echo "O resultado da subtração dos valores é " .$operacao;		
	}	

	//Lógica para dividir
	if ($operacao == "dividir") {
		if($numero2 == 0){
			echo "O segundo valor na divisão não pode ser zero.";
		}else{
			$operacao = $numero1 / $numero2;
			echo "O resultado da divisão dos valores é " .$operacao;
		}		
		
	}
	
	//Lógica para multiplicar
	if ($operacao == "multiplicar") {
		$operacao = $numero1 * $numero2;
		echo "O resultado da multiplicação dos valores é " .$operacao;
		
	}

?>