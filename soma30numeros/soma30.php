<html>
	<head>
	
	</head>
	<body>
		<h1> Soma 30 números </h1>
		<p>
		<?php
			$soma = 0;
			for ($cont = 1; $cont <= 5; $cont++) {
			
				$valor = $_GET["valor$cont"];
				$soma = $soma + $valor;
			}			
			
			echo "<p> A soma total é $soma </p>";			
			
		?>
		</p>
		
	</body>
</html>