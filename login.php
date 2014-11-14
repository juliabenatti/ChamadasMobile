<?php 
session_start();

$con = mysqli_connect("localhost", "root", "", "chamadamobile");
if(!$con){
	echo "Falha ao conectar com o banco de dados:" . mysqli_connect_error();
}

$email = $_POST['email'];
$senha = $_POST['senha'];
//SELECT m.Nome from materia as m, usuario as u where u.Email = "julia@gmail.com" and u.Cod_usuario = m.Cod_professor

$query = "Select * from usuario where email = '$email' and senha = '$senha';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
	if(!$row){
		echo "else";
		unset($_SESSION['email']);
		unset($_SESSISON['senha']);
		header('location:login.html');
		
	}else{
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header('location:fazerchamada.php');
	}
?>
/*
$sql = "Select * from Usuario where email = '$email' and senha = '$senha';";
$result = mysqli_query($mysqli, $sql) or die ("Erro");
if(mysqli_num_rows($result) > 0){
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	header('location:fazerchamada.php');
}else{
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:login.html');
}

?>*/
