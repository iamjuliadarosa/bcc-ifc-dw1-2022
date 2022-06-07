function deletar (url) {
	if(confirm("Deseja realmente apagar esse registro? Essa ação não poderá ser desfeita!"))
		location.href = url;
}
function excluir (url) {
	if(confirm("Deseja realmente apagar esse registro? Essa ação não poderá ser desfeita!"))
		location.href = url;
}
function editar () {
	if(window.confirm("Deseja realmente editar esse registro?")){
		window.open('manutencaoMarca.php');
	}
}
