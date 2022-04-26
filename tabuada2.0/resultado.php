<html>
	<head>
	
	</head>
	<body>
		<h1> TABUADA 1.0 </h1>
		<?php
			$valor = $_POST["valor"];
			
			echo "<h3> Tabuada do $valor </h3>";
			$cont = 1;
		?>
			<table border="1">
		<?php
			while ($cont <= 10) {
			$resultado = $cont * $valor;
		?>
				<tr> 
					<td> 
						<?php echo "$cont * $valor"; ?> 
					</td>
					<td> 
						<?php echo "$resultado"; ?>
					</td>
				</tr>
		<?php
				$cont++;
			}
		?>	
			</table>
		
	</body>
</html>




