<?php require_once("confirmfunction.php"); ?>

<?php 

	if (isset($_REQUEST['email'])){
		if (enviarEmail($_REQUEST)){
			$mensagem= "Enviada com sucesso!";
		} else{
			$mensagem2= "Erro no envio...";
		}
	}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit=no">
	<meta name="author" content="Luan Novais e Rayan Salewski, EvoTech">
	<meta name="description" content="Produzindo filmes sempre com qualidade.">
	<meta name="keywords" content="filmes,produtora,2018,efeitos,cinema,vídeos,imagem,media,image,socialmedia,divulgação">
	<meta name="robots" content="index, follow">
	<title>CONFIRMAÇÃO DE CONTATO [AUTO PROCESS] | AGREGA FILMES &copy;</title>
	<link rel="icon" href="img/icon-confirm.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body class="bg-dark">
	<div class="container mt-1">
		<div class="card card-login mx-auto my-auto col-12 col-md-8 col-lg-6 font-all border border-info">
		<div class="card-header bg-info text-white"><h3 class="text-center"><i class="fas fa-user-plus"></i> CONFIRMAR CONTATO</h3></div>
		<div class="card-body">
		<?php
			if(isset($mensagem)){
			echo "<p class='text-center alert alert-success'>Enviado para <strong>".$_REQUEST['email']."</strong>. <i class='far fa-smile'></i></p>";
			}
			if(isset($mensagem2)){
			echo "<p class='text-center alert alert-danger'><strong>E-mail inválido! <i class='far fa-frown'></i></strong></p>";
			}
		?>
			<form action="confirmv2.php" method="get">
				<div class="form-group d-none">
					<label for="email"><h5><i class="fas fa-envelope"></i> E-mail do cliente</h5></label>
					<input class="form-control border border-info" type="email" name="email" id="email" placeholder="Digite o e-mail do cliente...">
				</div>
					<button type="submit" class="btn btn-info btn-block d-none">Enviar confirmação <i class="fas fa-share-square"></i></button>
					<div class="text-center">
						<?php 
				
						if(isset($mensagem)){
							echo "<p class='border border-success rounded bg-success text-white p-2 mt-2'><i class='fas fa-check-circle'></i> $mensagem</p>";
						}
						if(isset($mensagem2)){
							echo "<p class='border border-danger rounded bg-danger text-white p-2 mt-2'><i class='fas fa-times-circle'></i> $mensagem2</p>";
						}
					
					?>
					<a href="index.html" class="d-block small mt-3 text-info"><i class="fas fa-backward"></i> Voltar ao site...</a>
					<a href="confirm.php" class="d-block small mt-1 text-info"><i class="fas fa-info-circle"></i> Deu erro? Clique aqui e faça o processo manualmente.</a>
					</div>
				</form>
			</div>
			<div class="card-footer bg-white mx-auto mx-md-0"><span class="badge badge-dark float-left float-md-left m-2 m-md-auto"><span class="badge badge-warning">AUTO PROCESS</span> <i class="fas fa-save"></i></span><small class="text-dark float-left float-md-right m-2 m-md-auto"> by Evotech Solutions | 2018.</small></div>
		</div>
	</div>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>