var id = "";
var cliente = "";
$(document).ready(function() {
	$('.linha-table').click(function() {
		$('.linha-table').removeClass('checked');
		$(this).addClass('checked');
		id = $(this.children[0]).text();
		cliente = $(this.children[1]).text();
	});
});

function excluirCliente() {
	if (id == "") {
		alert('Favor selecionar um atendimento para excluir.');
	} else {
		var boxConfirmar = confirm("Deseja excluir o atendimento do " + id + "-"
				+ cliente + "?");
		if (boxConfirmar == true) {
			window.location.href='../controllers/ExcluirAtendimentoController.php?id=' + id;
		} else {

		}
	}
}

function atualizarCliente() {
	if (id == "") {
		alert('Favor selecionar um atendimento para atualizar.');
	} else {
		var boxConfirmar = confirm("Deseja atualizar o atendimento do " + id + "-"
				+ cliente + "?");
		if (boxConfirmar == true) {
			window.location.href='editar-atendimento.php?id=' + id;
		} else {

		}
	}
}

