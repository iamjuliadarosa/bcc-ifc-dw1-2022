function excluir (url) {
	if(confirm("Deseja realmente apagar esse registro? Essa ação não poderá ser desfeita!"))
		location.href = url;
}