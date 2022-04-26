<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas </h1>
		<?php
			$vetsexo = array();
			$vetaltura = array();
			
			for ($cont = 1; $cont <= 3; $cont++) {
				$vetsexo[$cont] = $_POST["sexo".$cont];
				$vetaltura[$cont] = $_POST["altura".$cont];
			}
			
			$conta_sexo_masculino = 0;
			$conta_sexo_feminino = 0;
			for ($cont = 1; $cont <= 3; $cont++){
				if ($vetsexo[$cont] == "m") {
					$conta_sexo_masculino = $conta_sexo_masculino + 1;
				}
				else {
					$conta_sexo_feminino = $conta_sexo_feminino + 1;
				}
			}
			
			$maior_altura = 0;
			for ($cont = 1; $cont <= 3; $cont++){
				if ($vetaltura[$cont] >= $maior_altura) {
					$maior_altura = $vetaltura[$cont];
					$sexo_maior_altura = $vetsexo[$cont];
				}
			}
			
			echo "<p> A quantidade de pessoas do sexo masculino é $conta_sexo_masculino </p>";
			echo "<p> A quantidade de pessoas do sexo feminino é $conta_sexo_feminino </p>";
			if ($sexo_maior_altura == "m") {
				echo "<p> A maior altura é $maior_altura de uma pessoa do sexo masculino </p>";
			}
			else {
				echo "<p> A maior altura é $maior_altura de uma pessoa do sexo feminino </p>";
			}
		?>
		
	</body>
</html>