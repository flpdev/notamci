$('#upar').click(function(event) {
	
	var conteudo = $('#boxprincipal').val();

	$('#conteudooculto').empty();
	$('#conteudooculto').append(conteudo);
	$('#validacao').empty()
	$('#boxprincipal').val('');

	var itens = $('.primeiroexe');	

	for (var i = 0; i <= itens.length-1 ; i++) {
		
		var item = itens[i];

		var questao = $(item).find('#component_value_01').text();
		var respCorreta = $(item).find('.acerto').find('p').text();

		if(respCorreta != "") {

			$('#alerta').fadeOut();

			var linha = [];
			linha.push("<div class='panel panel-default'>");
			linha.push("<div class='panel-heading'>");
			linha.push("<textarea class='form-control' name='quest[]'  rows='10' readonly>" + questao + "\n\nResposta: " + respCorreta + "</textarea>");
			linha.push("</div>");


			$('#validacao').append($(linha.join('')));

		}
	}

	if(linha != null){
		$('#enviar').fadeIn();
	}

});

$( document ).ready(function() {
	if($("#painelresposta").text() != ''){
		$("#banner").fadeOut();
	}
});