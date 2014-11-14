<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chamadas Mobile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "chamadamobile");
if(!$con){
	echo "Falha ao conectar com o banco de dados:" . mysqli_connect_error();
}
$email = $_SESSION['email'];
$query = "Select m.Nome from materia as m, usuario as u where u.Email = '$email' and u.Cod_usuario = m.Cod_professor ;";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
	echo $row["Nome"]. "<br>";
}


$query2 = "SELECT A.Nome FROM aluno as A, chamada as C WHERE C.dia = '2014-09-28' and C.Cod_materia = '1' and C.Cod_turma = '1' and A.Matricula = C.Matricula_aluno;";
$result2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($result2);
echo json_encode($row2);


?>



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Chamadas Mobile</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Fazer Chamada</a>
                    </li>
                    <li>
                        <a href="">Gerenciar</a>
                    </li>
                    <li>
                        <a href="">Enviar Relatório</a>
                    </li>
					<li>
                        <a href="">Editar Chamada</a>
                    </li>
					<li>
                        <a href="login.html">Sair</a>
                    </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

      <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
			<br>
			
            <div class="col-md-8">

                <div class="panel panel-default">
				<div class="panel-heading">
                        <h4>Selecione</h4>
                    </div>
                    <div class="panel-body">
         
				<form class="form-inline" action="" method="post">
				
				<!-- Button Group de matéria-->
				<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						Matéria <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
				</div>
                    
				<p>
				<!-- Data-->
				<div class="input-group margin-bottom-sm">
				<span class="input-group-addon">Data da chamada	</span>
				<input class="form-control" type="date" placeholder="Data">
				</div>
				</p>	
				<!-- Turma-->
					
				<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Turma <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">1º Semestre</a></li>
					<li><a href="#">2º Semestre</a></li>
					<li><a href="#">3º Semestre</a></li>
				</ul>
				</div>
				
                    </div>
                
            </div>
			</div>
			</div>
			
			<div class="row">
			<div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Lista de Alunos</h4>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
							<!--<p><label>João</label>    <button type="button" class="btn btn-danger">Ausente</button></p>
							<p><label>Dante</label>   <button type="button" class="btn btn-danger">Ausente</button></p>
							<p><label>Julia</label>   <button type="button" class="btn btn-danger">Ausente</button></p> -->
							  <!-- Default panel contents -->
				
  <!-- Table -->
				<table class="table">
				<tr>
				<th>Name</th>
				<th></th>
				</tr>
				<tbody>
				<tr> <td>Júlia</td> <td></td><td></td><td></td><td><button onclick= alteraPresenca(1) type="button" class="btn btn-danger" id = "1">Ausente</button></td>
				<tr> <td>João</td> <td></td><td></td> <td></td><td><button onclick= alteraPresenca(2) type="button" class="btn btn-danger" id = "2">Ausente</button></td>
				<tr> <td>Dante</td> <td></td><td></td><td></td><td><button onclick= alteraPresenca(3) type="button" class="btn btn-danger" id = "3">Ausente</button></td>
				</tbody>
				</table>
				</div>
						</form>
                    </div>
                </div>
            </div>
			<button type="submit" class="salvar">Salvar Chamada</button>
			<button type="submit" class="enviar">Enviar Chamada</button>
			
			
			</form>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p>Copyright &copy; Vagalumes</p></center>
                </div>
            </div>
        </footer>
</div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	function alteraPresenca(id){
    classe = document.getElementById(id).className;
    if(classe == 'btn btn-danger'){
       document.getElementById(id).className = 'btn btn-success';
	   document.getElementById(id).innerHTML = "Presente";
   }else{
       document.getElementById(id).className = 'btn btn-danger';
	   document.getElementById(id).innerHTML = "Ausente";
   }
}
    </script>

</body>

</html>
