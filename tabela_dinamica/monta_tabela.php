<html>
	<head>
<link rel="stylesheet" type="text/css" href="estilo_tabela.css">	
	</head>
	<body>
		<h1> TABELA DINÂMICA </h1>
		
		<table border="1">
		<?php
			$linhas = $_GET["linhas"];
			
			for ($cont=1; $cont <= $linhas; $cont++) {	
		?>
				<tr>
					<td>
						<p> Linha da tabela nº </p>
					</td>
					<td>
						<p> <?php echo "$cont"; ?> </p>
					</td>
				</tr>
		<?php	
			}
		?>	
		</table>
	</body>
</html>









