<?php
	if(isset($_POST['nombre'])){
		$con = new mysqli("localhost","root","","search");
		$query=mysqli_query($con,"Insert into paginas (nombre,url,tema) values('".$_POST['nombre']."','".$_POST['url']."','".$_POST['tema']."')");
		?>
		<script type="text/javascript">
			alert("La pagina ha sido registrada");
		</script>
		<?php
		if($query>0){
			header("location: index.php");
		}
	}
?>