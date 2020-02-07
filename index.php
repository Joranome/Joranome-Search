<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="logoMdB.png" />
	<title>Joranome Search</title>
	<style type="text/css">
		body{
			font-family: arial;
			text-align: center;
		}
		input{
			font-size: 20px;
			border-radius: 20px;
			padding-left: 10px;
		}
		h1{
			color: blue;
			font-size: 60px;
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
	<h1>
		<table align="center">
			<tr><td></td><td rowspan="3"><img src="logoMdB.png" height="100px"></td></tr>
			<tr><td>Joranome - Search</td></tr>
			<tr><td></td></tr>
		</table>
	</h1>
	<form method="get" action="buscar.php">
		<input class="b" type="text" name="buscar" required><br><br>
		<input class="btn" type="submit" value="Buscar">
	</form>
	<hr>
	<h5>Si no existe la pagina que deseas buscar y tienes su información puedes <u>insertar la pagina</u></h5>
	<form method="post" action="insertar.php">
		<input type="text" name="nombre" placeholder="Nombre" required maxlength="100"><br><br>
		<input type="url" name="url" placeholder="URL" required maxlength="300"><br><br>
		<input type="text" name="tema" placeholder="Tema" required maxlength="50"><br><br>
		<input class="btn" type="submit" value="Insertar">
	</form>
</body>
</html>