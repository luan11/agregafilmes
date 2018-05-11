var btnEnvio = document.querySelector("#btn-envio");
btnEnvio.addEventListener("click", function(event){

	var form = document.querySelector("#form-contato");
	var campos = obtemCamposForm(form);
	var avisoErro = document.querySelector("#avisoErro");
	var validacao = validaCampos(campos);
	var borda = addBorda(campos);

	if (!validacao){
		event.preventDefault();
		borda;
		avisoErro.classList.remove("d-none");
	}else{
		avisoErro.classList.add("d-none");
		event.currentTarget();
	}
	
});

function obtemCamposForm (form){

	var campos = {
		nome: form.nome,
		sobrenome: form.sobrenome,
		email: form.email,
		telefone: form.telefone,
		opservicos: form.opcoesServicos,
		mensagem: form.suamsg
	}

	return campos;
}

function validaCampos (campos){
	var status;

	if(campos.nome.value == 0 || campos.sobrenome.value == 0 || campos.email.value == 0 || campos.telefone.value == "" || campos.mensagem.value == 0){
		status = false;
	}else{
		status = true;
	}

	return status;
}

function addBorda (campos){

	if(campos.nome.value == 0){campos.nome.classList.add("border-danger");}else{campos.nome.classList.remove("border-danger");};
	if(campos.sobrenome.value == 0){campos.sobrenome.classList.add("border-danger");}else{campos.sobrenome.classList.remove("border-danger");};
	if(campos.email.value == 0){campos.email.classList.add("border-danger");}else{campos.email.classList.remove("border-danger");};
	if(campos.telefone.value == ""){campos.telefone.classList.add("border-danger");}else{campos.telefone.classList.remove("border-danger");};
	if(campos.mensagem.value == 0){campos.mensagem.classList.add("border-danger");}else{campos.mensagem.classList.remove("border-danger");};

}