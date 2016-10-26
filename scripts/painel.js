function inserirLinhaTabela()
{
	t_length = document.querySelector('tbody tr').childElementCount;
	t_footer = document.querySelector('tfoot tr');

	for (t = 0; t < t_length; t++) {
		t_coluns = document.createElement('TD');
		t_footer.appendChild(t_coluns);
	}
}

inserirLinhaTabela();