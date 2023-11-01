<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['passw'] = $_POST['passw'];
} else {
	if(isset($_GET['borrar'])){
		session_unset();
	}
}

?>

<html>
	<head>
		<title>Recordar nombre</title>
	</head>

	<body>
		<h1>Registrarse</h1>
		<? if(!isset($_SESSION['user'])){?>
		<form method="POST">
			<input type="text" name='user' required><br>
			<input type="password" name='passw' required><br>
			<button>aceptar</button>
		</form>
		<?} else{
			echo "<span>nombre: ". $_SESSION['user'] ."</span><br>";
			echo "<span>contraseña: ". $_SESSION['passw'] ."</span><br>";
			echo "<a href='.?clear_session=true'>Salir</a><br>";
		} ?>
	</body>
</html>