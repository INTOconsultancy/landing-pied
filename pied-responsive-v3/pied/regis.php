<?php
$connect=mysqli_connect("landingpagepat.cqadeuab6cz9.us-east-1.rds.amazonaws.com","root","l4nd1ngp4g3","formulario");
if ($connect) {
		$nombre1= $_POST ['nombre1'];
		$nombre2= $_POST ['nombre2'];
		$email= $_POST ['email'];
		$Zipcode= $_POST ['Zipcode'];
		$number= $_POST ['number'];
		$pais= $_POST ['pais'];


		$consulta="insert into datos values ('$nombre1', '$nombre2', '$email', '$Zipcode', $number, '$pais')";

		$resultado=mysqli_query($connect,$consulta);

		if ($resultado) {
			header('Location: index.html');
			exit();
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}

		if (mysqli_close($connect)){
			echo "desconexion realizada. <br />";
		}
		else {
			echo "error en la desconexión";
		}
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {



}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM datos");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);




?>
