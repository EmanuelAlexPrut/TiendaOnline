<?php
session_start();
include "db.php";

if(isset($_POST["email"])){
	$email= $_POST["email"];
}else{
	$email="";
}

if(isset($_POST["password"])){
	$password= $_POST["password"];
}else{
	$password="";
}

if(isset($_POST["email"]) && isset($_POST["password"]))
{

$passPrueba = sha1($password);//encripta en hash
$sql ="SELECT * FROM `registerlogin` WHERE email='$email'";
$result=mysqli_query($con, $sql); 

if($result){
$values = $result ->fetch_assoc();

if($values['password']==$passPrueba){
	
	echo "<script>alert('Logueado Correctamente');</script>";
	header('Refresh:0 ; url= index.html');
}else{
	echo "<script>alert('Contrasena Incorrecta');</script>";
	header("Refresh:0");
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>LogIn</title>
</head>
<body>
<nav class="mainBar">
	<div class="logo">
		<img src="leon1.jpg"width=120px height=120px>
	</div>
</nav>
<form action="formulario-Login.php" method = "post">
<div class="registerBox">
		
		<div class="form1">
		<div class="title flex">
		<h1>LogIn:</h1>
		</div>

		<label for="email">Email:</label>
		<div class="e">
		<input type="text" name="email" /><br>
		</div>

        <label for="password">Password:</label>
		<div class="p">
		<input type="password" name="password" /><br>
		</div>
        
        <div class="b">
 		<input class="ok flex" type="submit" value="LogIn"/>
		</div>

        <div>
        <p>If its your first time here, you can register! Click on<a href="formulario-Register.php"> Register</a></p>
        </div>
	</form>
   
	</div>	
</body>
</html>