<html>
	<head>
	
	</head>
	<body>
		<h1> Intervalo </h1>
		<p>
		<?php
			$valor_inicial = $_GET["valor_inicial"];
			$valor_final = $_GET["valor_final"];
			
			$valor_inicial++;
			for ($cont = $valor_inicial; $cont < $valor_final; $cont++) {
			
				echo " $cont ";
								
			} 
		?>
		</p>
		
	</body>
</html>