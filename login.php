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
				<h1>Pagina de login</h1>	
				
				<?php 

				// echo "Meu nome é: ".$_GET['nome']; 
				// echo "<hr>";
				// echo "Meu email é: ".$_GET['email']; 
				// echo "<hr>";
				// echo "Minha idade é: ".$_GET['idade']; 
				// echo "<hr>";
				// echo "Minha foto é: ".$_GET['foto']; 
				// echo "<hr>";		

				?>

				<form action="ola.php" method="post">
					<div class="form-group">
						<label> Nome</label>	
						<input type="text" name="nome" value="" class="form-control" required>
					</div>

					<div class="form-group">
						<label> E-mail</label>	
						<input type="email" name="email" value="" class="form-control" required>
					</div>



					<div class="form-group">
						<label> Idade</label>	
						<input type="number" name="idade" value="" class="form-control" required>
					</div>					


					<div class="form-group">
						<label for="inputSexo">Informe o sexo</label>
						
						<select name="sexo" id="inputSexo" class="form-control">
							<option value="">---</option>
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
							<option value="T">Transgenero</option>
						</select>

					</div>					


					<div class="form-group">
						<label> Time de futebol</label>	
						<br>
						<input type="radio" name="time" value="1" id="radioCorinthians"><label for="radioCorinthians"> Corinthians</label>		
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
						<input type="radio" name="time" value="2"> Palmeiras
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
						<input type="radio" name="time" value="3"> São Paulo
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
						<input type="radio" name="time" value="4" id="radioSantos"><label for="radioSantos"> Santos</label>
					</div>	


					<div class="form-group">
						<label> Quais cores</label>	
						<br>
						<!--<input type="checkbox" name="concordo[]" value="1"> Concorda?-->
						<input type="checkbox" name="cores[]" value="1" id="id1"><label for="id1"> Azul?</label>
						<input type="checkbox" name="cores[]" value="2"> Branco?
						<input type="checkbox" name="cores[]" value="3"> Cinza?
						<input type="checkbox" name="cores[]" value="4"> Vermelho?
						<input type="checkbox" name="cores[]" value="5" id="id5"><label for="id5"> Verde? </label>
					</div>						

					<div class="form-group">
						<label> Observaçõe</label>	
						
						<textarea name="observacoes" class="form-control" value=""></textarea>

					</div>	

					<div class="form-group">
						<label> Foto</label>	
						<input type="file" name="foto" class="form-control">
					</div>	


					<button class="btn btn-default">Submit</button>
				</form>


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