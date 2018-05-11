<?php 

	function enviarEmail ($dados){
		
		$email= $dados['email'];
		$remetente= "contato@agregafilmes.com.br";
		
		$destino=	$email;
		$assunto= "Tentativa de contato realizada com sucesso!";
		
		$content = "<h3>Sua tentativa de contato conosco (Agrega Filmes) foi realizada com sucesso.</h3>";
		$content .= "<hr>";
		$content .= "<p>Agradecemos sua preferência em nos escolher, em breve entraremos em contato para obter mais detalhes. Fique atento a seu e-mail ou telefone.</p>";
		$content .= "<h5>*Esta é uma mensagem automática, não responda!</h5>";
		
		$header = "Content-Type: text/html; charset= utf-8\n";
		$header.="From: $remetente Reply-to: $remetente\n";
		
		return mail($destino,$assunto,$content,$header);
	}

?>