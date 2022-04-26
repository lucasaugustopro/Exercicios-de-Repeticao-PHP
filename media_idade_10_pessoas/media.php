<html>
	<head>
	
	</head>
	<body>
		<h1> Média das idades de 10 pessoas </h1>
		
		<?php
			for ($cont = 1; $cont <= 10; $cont++){
				
				$nome = $_GET["nome$cont"];
				$idade = $_GET["idade$cont"];
				$soma = $soma + $idade;				
			}	
			
			$media = $soma / 10;
			echo "<p> A média das idades é $media </p>"
		?>
			
	</body>
</html>