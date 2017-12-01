<?php

$nome 		 = $_POST['nome'];
$email 		 = $_POST['email'];
$idade 		 = $_POST['idade'];
$sexo 		 = $_POST['sexo'];
$time  		 = $_POST['time'];
$cores       = $_POST['cores'];
$observacoes = $_POST['observacoes'];
$foto        = $_POST['foto'];



//$_POST = array("nome" => "Marcel", "email" => "email@email.com", "idade" => "50", "sexo" => "M");





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once 'include/head.php'; ?>
</head>
<body>

	<!-- TOPO -->
		<?php 
			require_once 'include/header.php';
		?>
	<!-- FIM TOPO-->


	<div class="container-fluid">
		<div class="col-md-12">
			<!-- MENU LATERAL -->
			<?php require_once 'include/menu_lateral.php' ?>
			<!-- FIM MENU LATERAL -->

			<!-- CONTEUDO -->
			<div class="col-md-9">
				<h1>Olá</h1>	
				
				<?php 

				 echo "Nome: ".$nome; 
				 echo "<hr>";
				 echo "Email: ".$email; 
				 echo "<hr>";
				 echo "Idade: ".$idade; 
				 echo "<hr>";
				 echo "Sexo: ".$sexo; 
				 echo "<hr>";
				 echo "Time: ".$time; 
				 echo "<hr>";		
				 echo "Cores: ".$cores; 
				 echo "<hr>";
				 echo "Observações: ".$observacoes; 
				 echo "<hr>";				 				 		 				 
				 echo "Minha foto é: ".$foto; 
				 echo "<hr>";		

				?>

	


			</div>
			<!-- FIM CONTEUDO -->
		</div>
	</div>




	<!-- INICIO FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- FIM FOOTER -->


	<script src="js/main.js"></script>
</body>
</html>