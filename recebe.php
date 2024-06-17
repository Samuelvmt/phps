<?php 

	if (isset($_POST['escolher'])) {
		echo "Você escolheu: <br />";
		$escolheu = $_POST['escolher'];

		//var_dump($escolheu) . "<br />";
		for ($i=0; $i < count($escolheu) ; $i++) { 
			echo "<br />" . "{$escolheu[$i]}" . "<br />";
		}
	}else{
		echo "Você não escolheu";
	}

	if (isset($_POST['estado'])) {
		echo "<br>Você escolheu: " . $_POST['estado'];		
	}else {
		echo "<br>Você não selecionou nenhum estado";
	}
	

 ?>