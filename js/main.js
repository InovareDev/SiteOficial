$(document).ready(function(){

	


	function loading (){
		$("#form_solicitacao").css('display', 'none');

	}	

	$("#form_solicitacao").submit(function(e){



		e.preventDefault();

		var dados = $("#form_solicitacao").serialize();
		var dados = 
		{ 
		nome: $("#nome").val(),
		email: $("#email").val(),
		tel: $("#telSolicitar").val(),
		msg: $("#msgServicos").val(),
		typeServices: $("#typeServicos").val()
		}

		$.post({

			url: 'getInformationClient.php',
			type: 'post',
			data:  'nome='+dados.nome+'&email='+dados.email+'&telSolicitar='+dados.tel+'&msg='+dados.msg+'&typeServices='+dados.typeServices,
			beforeSend: loading,	
			
			}).done(function(retorno){
					
					alert(retorno)				
			})
	})

}) 