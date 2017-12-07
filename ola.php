<?php

// echo '<pre>';
// 	print_r($_POST);
// echo '</pre>';


$nome 		 = $_POST['nome'];
$email 		 = $_POST['email'];
$idade 		 = $_POST['idade'];
$sexo 		 = $_POST['sexo'];
$time  		 = $_POST['time'];
$cores       = $_POST['cores'];
$observacoes = $_POST['observacoes'];
$foto        = $_POST['foto'];



//$_POST = array("nome" => "Marcel", "email" => "email@email.com", "idade" => "50", "sexo" => "M");



function retornaNomeSexo($sexo) {

	if($sexo == "M") {
		$sexoFinal = "Masculino";
	} else if($sexo == "F") {
		$sexoFinal = "Feminino";
	} else if($sexo == "O") {
		$sexoFinal = "Outros";	
	} else {
		$sexoFinal = "Indefinido";
	}

	return $sexoFinal;
}


function retornaNomeTime($time) {
	switch ($time) {
		case 1:
			$timeFinal = 'Corinthians';
			break;
		case 2:
			$timeFinal = 'Palmeiras';
			break;
		case 3:
			$timeFinal = 'São Paulo';
			break;
		case 4:
			$timeFinal = 'Santos';
			break;					
		default:
			$timeFinal = "Time não informado";
			break;
	}

	return $timeFinal;
}



function retornaNomeCor($cor) {
	switch ($cor) {
		case 1:
			$corFinal = 'Azul';
			break;
		case 2:
			$corFinal = 'Branco';
			break;
		case 3:
			$corFinal = 'Cinza';
			break;
		case 4:
			$corFinal = 'Vermelho';
			break;	
		case 5:
			$corFinal = 'Verde';
			break;								
		default:
			$corFinal = "Cor não informada";
			break;
	}

	return $corFinal;	
}



//echo count($cores);


foreach ($cores as $cor) {
	$nomeCor .= retornaNomeCor($cor). " - ";
}


/*
for($x = 0; $x <= count($cores); $x++ ) {

	$nomeCor .= retornaNomeCor($cores[$x]). " - ";
}
*/
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
				 echo "Sexo: ".retornaNomeSexo($sexo); 
				 echo "<hr>";
				 echo "Time: ".retornaNomeTime($time); 
				 echo "<hr>";		
				 echo "Cores: ".$nomeCor; 
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

	
</body>
</html>