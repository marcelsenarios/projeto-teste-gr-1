<?php
$foto = $_GET['foto'];
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
				<h1>Pagina de fotos</h1>	
				


				<div class="jumbotron">

					<?php
					// $array_fotos = array(
					// 	"avangers.jpg",
					// 	"batman.jpg",
					// 	"dontpanic.jpg",
					// 	"evilcorp.jpg",
					// 	"ironman.jpg",
					// 	"mario.jpg",
					// 	"mrrobot.png",
					// 	"oculos.jpg",
					// 	"pi.jpg",
					// 	"starwars.jpg",
					// 	"westworld.png"
					// );

					// $array_titulo = array(
					// 	"Avangers",
					// 	"Batman",
					// 	"Dont Panic",
					// 	"Evil Corp",
					// 	"Iron Man",
					// 	"Super Mario",
					// 	"Mr Robot",
					// 	"Oculos",
					// 	"PI",
					// 	"Star Wars",
					// 	"West World"
					// );	


					$array = array(
					array("foto" => "avangers.jpg", "titulo" => "Avangers", "info" => "sad sadsadsad sad sa dsad asda"),
					array("foto" => "batman.jpg", "titulo" => "Batman", "info" => "sad Dsd54s87ds d87s d7s98d 7s98d 7as"),
					array("foto" => "dontpanic.jpg", "titulo" => "Dont Panic", "info" => ""),
					array("foto" => "evilcorp.jpg", "titulo" => "Evil Corp", "info" => ""),
					array("foto" => "ironman.jpg", "titulo" => "Iron Man", "info" => ""),
					array("foto" => "mario.jpg", "titulo" => "Mario", "info" => ""),
					array("foto" => "mrrobot.png", "titulo" => "Mr Robot", "info" => ""),
					array("foto" => "oculos.jpg", "titulo" => "Oculos", "info" => ""),
					array("foto" => "pi.jpg", "titulo" => "PI", "info" => ""),
					array("foto" => "starwars.jpg", "titulo" => "Star Wars", "info" => ""),
					array("foto" => "westworld.png", "titulo" => "West World", "info" => "")
					);				


					//print_r($array);
					?>
					

					<h1><?php echo $array[$foto]['titulo']; ?></h1>		
					<img src="images/<?php echo $array[$foto]['foto']; ?>" class="img-responsive">
					<p><?php echo $array[$foto]['info']; ?></p>
				</div>



			</div>
			<!-- FIM CONTEUDO -->
		</div>
	</div>




	<!-- INICIO FOOTER -->
	<?php require_once 'include/footer.php'; ?>
	<!-- FIM FOOTER -->

</body>
</html>