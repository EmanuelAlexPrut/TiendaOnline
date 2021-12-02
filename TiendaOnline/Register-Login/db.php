<?php



$con=mysqli_connect("localhost", "root", "", "tiendaonline");


if(!$con){

	die("No se ha podido realizar la conexión: ");
}else{

	mysqli_set_charset($con, "utf8");

	echo ("<script>console.log('Conexión a la base de datos realizada.');</script>");

}

?>