<html>
	<head>
	
	</head>
	<body>
		<h1> TABELA DINÂMICA</h1>
		<?php
			$linhas = $_POST["linhas"];
			$cont = 1;
		?>
			<table border="1">
		<?php
			while ($cont <= $linhas) {
		?>
					<tr> 
						<td> linha </td>
						<td> <?php echo "$cont"; ?></td>
					</tr>
		<?php
					$cont++;
			}
			
		?>	
			</table>
		
			
	</body>
</html>



