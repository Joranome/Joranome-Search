<!DOCTYPE html>
<html>
<head>
	<title>Joranome Search</title>
	<link rel="icon" type="image/png" href="logoMdB.png" />
	<style type="text/css">
		a{
			font-size: 20px;
		}
		sub{
			color: green;
		}
		body{
			font-family: arial;
		}
		input{
			font-size: 20px;
			border-radius: 20px;
			padding-left: 10px;
		}
		h1{
			color: blue;
		}
		.b{
			width: 50%;
			border-radius: 20px;
			font-size: 25px;
			padding-left: 10px;
		}
		.btn{
			cursor: pointer;
			border:0px;
		}
		.btn:hover{
			background-color: blue;
			color:white;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td><h1>Joranome Search</h1></td>
			<td width="20px"></td>
			<td><?php
				if(isset($_GET['buscar'])){
					?>
					<form method="get" action="buscar.php">
						<input class="b" type="text" name="buscar" value="<?php echo $_GET['buscar']; ?>">
						<input class="btn" type="submit" value="Buscar">
					</form>
					<?php
				}?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td width="20px"></td>
			<td>
				<?php
					if(isset($_GET['buscar'])){
						$i=0;
						$con = new mysqli("localhost","root","","search");
						$query=mysqli_query($con,"Select * from paginas where UPPER(tema) like UPPER('%".$_GET['buscar']."%')");
						while($row=mysqli_fetch_array($query)){
							$i++;
							?>
							<a href="<?php echo $row['url']; ?>"><?php echo $row['Nombre']; ?></a><br>
							<sub><?php echo $row['url']; ?></sub>
							<br><hr>
						<?php
						}
						if($i==0){
							?>
							<p>No se encontraron resultados :(</p>
							<?php
							$j=0;
							$query=mysqli_query($con,"Select * from paginas where UPPER(SUBSTRING(tema,1,3)) like UPPER('%".substr($_GET['buscar'], 0,3)."%')");
							while($row=mysqli_fetch_array($query)){
								$j++;
								if($j==1){
									?><p>Mostrando resultados de <?php echo substr($_GET['buscar'], 0,3) ?>:</p><?php
								}
								?>
								<a href="<?php echo $row['url']; ?>"><?php echo $row['Nombre']; ?></a><br>
								<sub><?php echo $row['url']; ?></sub>
								<br><hr>
							<?php
							}
						}
					}
				?>
			</td>
		</tr>
	</table>
	
	<br>

</body>
</html>