$('input[type=text]').keydown(function(e) {
	return e.which !== 13;
});

$('#motorista_cpf').mask('000.000.000-00');
$('#placa_trator, #placa_reboque_1, #placa_reboque_2').mask('SSS-0000');
$('#valor').mask('000.000.000,00', {reverse: true});
$('#peso').mask('000.000.000,000', {reverse: true});
$('#destinatario_cnpj').mask('00.000.000/0000-00');
$('#destinatario_cnpj').tooltip();

function converterCaixaAlta()
{
	nodes = document.querySelectorAll('input[type=text]');
	for (i = 0; i < nodes.length; i++) {
		nodes[i].value = nodes[i].value.toUpperCase();
	}
}
