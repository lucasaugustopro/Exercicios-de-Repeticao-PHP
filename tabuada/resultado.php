<html>
	<head>
	
	</head>
	<body>
		<h1> TABUADA </h1>
		<?php
			$valor = $_POST["valor"];
			$cont = 1;
		?>
			<table border="1">
					<tr> 
						<td> 
							Expressão
						</td>
						<td> 
							Resultado
						</td>
					</tr>
		<?php
			while ($cont <= 10) {
		?>
					<tr> 
						<td> 
							<?php 
								echo "$cont x $valor = "; 
							?>
						</td>
						<td> 
							<?php 
								$resultado = $cont * $valor;
								echo $resultado; 
							?>
						</td>
					</tr>
		<?php
					$cont++;
			}
		?>	
			</table>
		
			
	</body>
</html>



