<html>
	<head>
	
	</head>
	<body>
		<h1> CONTADOR </h1>
		<?PHP
			$valor = $_GET["valor"];
			
			$CONT  =  1;

			do {

				ECHO " <p> ESTOU CONTANDO $CONT  </p>";

				$CONT++;
				
			} while ($CONT <= $valor);
	?>

		
	</body>
</html>