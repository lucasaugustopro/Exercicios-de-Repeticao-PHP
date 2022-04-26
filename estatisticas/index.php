<html>
	<head>
	
	</head>
	<body>
		<h1> Estatísticas </h1>
		
		<form method="post" action="calcula.php">
			<?php
				for ($cont=1; $cont <= 3; $cont++) {
			?>
					<p>
						<?php echo "$cont";?>ª pessoa
					</p>
					<p>
						Sexo: <br>
						<input type="radio" name="sexo<?php echo "$cont";?>" value="m"> Masculino <br>
						<input type="radio" name="sexo<?php echo "$cont";?>" value="f"> Feminino
					</p>

					<p>
						Altura: 
						<input type="text" name="altura<?php echo "$cont";?>" size="2"> 
					</p>
			<?php
				}
			?>
			
			<p> <input type="submit" value="Calcular estatísticas"> </p>		
		</form>
		
		
	</body>
</html>