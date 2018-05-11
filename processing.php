<?php

$para= "contato.huntertg@gmail.com,luaannovais@live.com";//"contato@agregafilmes.com.br,bruno.caselli@yahoo.com.br,carolina.montilha@gmail.com";
$assunto= "Contato pelo Site";
$nome= $_REQUEST['nome'];
$sobrenome= $_REQUEST['sobrenome'];
$email= $_REQUEST['email'];
$tel= $_REQUEST['telefone'];
$opservicos= $_REQUEST['opservicos'];
$msg= $_REQUEST['suamsg'];

	$corpo2 = "<p><h4>Seu Nome e Sobrenome </h4> $nome $sobrenome</p>";
	$corpo2 .= "<hr>";
	$corpo2 .= "<p><h4>Seu e-mail </h4> $email</p>";
	$corpo2 .= "<hr>";
	$corpo2 .= "<p><h4>Seu telefone </h4> $tel</p>";
	$corpo2 .= "<hr>";
	$corpo2 .= "<p><h4>Seu interesse é no serviço de </h4> $opservicos</p>";
	$corpo2 .= "<hr>";
	$corpo2 .= "<p><h4>Sua mensagem </h4> $msg</p><br>";

	$corpo = "<h1>Mensagem de Contato</h1>";
	$corpo .= "<hr>";
	$corpo .= "<p><h4>Nome e Sobrenome: </h4> $nome $sobrenome</p>";
	$corpo .= "<hr>";
	$corpo .= "<p><h4>E-mail: </h4> $email</p>";
	$corpo .= "<hr>";
	$corpo .= "<p><h4>Telefone: </h4> $tel</p>";
	$corpo .= "<hr>";
	$corpo .= "<p><h4>Interesse no serviço de: </h4> $opservicos</p>";
	$corpo .= "<hr>";
	$corpo .= "<p><h4>Mensagem do cliente $nome: </h4> $msg</p><br>";
	$corpo .= "<hr>";
	$corpo .= "<h5>Confirme ao cliente $nome que sua tentativa de contato conosco foi realizada com sucesso.<br><br>Clique no botão abaixo:</h5><a href='#'><h3>CONFIRMAR RECEBIMENTO</h3></a>";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Reply-to: $email\n";

if(mail($para,$assunto,$corpo,$header)){
	$envio = true;
} else{
	$envio = false;
};

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
	<?php
	if ($envio==true)
	print "<title>SUCESSO! | AGREGA FILMES - Soluções que se adequam a seu negócio! ;&#41;</title>
	<link rel='icon' href='img/icon-success.png'>"; 
	else
	print "<title>ERRO! | AGREGA FILMES - Soluções que se adequam a seu negócio! ;&#41;</title>
	<link rel='icon' href='img/icon-error.png'>";
	?>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body class="bg-dark">
	
	<?php
	if ($envio==true)
	print"<div class='container-fluid col-12'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ATENÇÃO!</strong> Uma mensagem de confirmação será enviada em breve (<em>de 1 à 3 dias após o recebimento de seu contato</em>), verifique seu e-mail (confira nas pastas de <strong>SPAM</strong> ou <strong>LIXO ELETRÔNICO</strong>).<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div></div>
	<div class='container-fluid col-6 mx-auto'>
	<div class='row justify-content-center mt-2'>
	<img class='w-50 h-75 mb-5' src='img/logo.png' alt='Agrega Filmes - Produção de vídeos'>
		<h2 class='text-center text-white font-all'><i class='fas fa-check-square'></i> INFORMAÇÕES ENVIADAS COM SUCESSO, AGUARDE NOSSO RETORNO...</h2>
	</div>
		<div class='progress mt-1'>
  	<div class='progress-bar progress-bar-striped progress-bar-animated bg-success' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>
		</div>
		<div class='row justify-content-center mb-5 mt-4'><button type='button' class='btn btn-info' data-toggle='modal' data-target='#viewdados'><i class='fas fa-eye'></i> Visualizar informações enviadas...</button></div>
		<div class='row justify-content-center'>
			<p><a href='index.html#contato' class='btn btn-danger'><i class='fas fa-undo-alt fa-lg'></i> Retornar ao site...</a>
		</div></p>
	</div>
	<div id='viewdados' class='modal fade'>
		<div class='modal-dialog modal-lg' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title'><i class='fas fa-eye'></i> Visualização</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'><span aria-hidden='true'>&times;</span></button>
				</div>
				<div class='modal-body'>
							$corpo2
				</div>
				<div class='modal-footer'>
							<button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>
				</div>
			</div>
		</div>
	</div>";
	else
	print"<div class='container-fluid col-12'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>ATENÇÃO!</strong> Se o erro persistir entre em contato conosco pelo <strong>e-mail:</strong> contato@agregafilmes.com.br ou <strong>telefone:</strong> (11) 94294-2711.<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div></div>
	<div class='container-fluid col-6 mx-auto'>
	<div class='row justify-content-center mt-2'>
	<img class='w-50 h-75 mb-5' src='img/logo.png' alt='Agrega Filmes - Produção de vídeos'>
		<h2 class='text-center text-white font-all'><i class='fas fa-exclamation-triangle'></i> ERRO NO ENVIO DAS INFORMAÇÕES... Retorne ao site e tente novamente!</h2>
	</div>
		<div class='progress mt-1'>
  	<div class='progress-bar progress-bar-striped progress-bar-animated bg-warning' role='progressbar' style='width: 50%' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
		</div>
		<div class='row justify-content-center mt-4'>
			<p><a href='index.html#contato' class='btn btn-danger'><i class='fas fa-undo-alt fa-lg'></i> Retornar ao site...</a></p>
		</div>	
	</div>";

	?>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>