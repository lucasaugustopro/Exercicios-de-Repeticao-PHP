﻿<html>
	<head>
	
	</head>
	<body>
		<h1> Média das idades de 10 pessoas </h1>
		
		<form method="get" action="media.php">
			<?php
				for ($cont = 1; $cont <= 10; $cont++){
			?>
					<p> <?php echo "$cont";?>ª pessoa </p>
					<p>
						Nome: <input type="text" name="nome<?php echo "$cont";?>">
					<br>
						Idade: <input type="text" name="idade<?php echo "$cont";?>">
					</p>
			<?php
				}
			?>
			
			<p>
				<input type="submit" value="Calcular">
			</p>
		</form>
	</body>
</html>