<html>
	<head>
	
	</head>
	<body>
		<h1> TABUADA 1.0 </h1>
		
		<?php
			$valor = $_POST["valor"];
			
			echo "<h3> Tabuada do $valor </h3>";
			$cont = 1;
			while ($cont <= 10) {
				//aqui virá o cáculo e a amostragem do resultado
				
				$produto = $cont * $valor;
				
				echo "<p> $cont x $valor = $produto </p>";
			
				$cont++;
			}
		?>
	</body>
</html>




