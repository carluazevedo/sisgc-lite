<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1><?php echo $titulo_pagina; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover small"><!-- table-bordered -->
						<thead>
							<tr class="active">
								<th title="Número do DT">NÚM. DT</th>
								<th>STATUS</th>
								<th>DATA ENTRADA</th>
								<th>DATA SAÍDA</th>
								<th title="Permanência em pátio">PERMAN.</th>
								<th>MOTORISTA</th>
								<th>TRATOR</th>
								<th>REBOQUE</th>
								<th>TRANSPORTADORA</th>
								<th>ORIGEM</th>
								<th colspan="3">AÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$registros) : ?>
							<tr>
								<td class="text-center danger" colspan="12">Não há registros de viagens.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($registros as $reg) : ?>
								<?php
									#$json_values = array($reg->id, $reg->status_viagem);
									#$json_editar = json_encode($json_values);
								?>
								<tr>
									<td><?php echo $reg->dt_num; ?></td>
									    <?php echo $this->viagens_model->status_viagem_tb($reg->status_viagem); ?>
									<td><?php echo $this->viagens_model->formata_data_mysql($reg->entrada_data); ?></td>
									<td><?php echo $this->viagens_model->formata_data_mysql($reg->saida_data); ?></td>
									<td><?php echo $this->viagens_model->permanencia($reg->entrada_data, $reg->saida_data); ?></td>
									<td><?php echo $reg->motorista_nome; ?></td>
									<td><?php echo $reg->placa_trator; ?></td>
									<td><?php echo $reg->placa_reboque_1; ?></td>
									<td><?php echo $reg->transp_nome; ?></td>
									<td><?php echo $reg->operacao_nome, ($reg->operacao_unidade != '') ? ' - '.$reg->operacao_unidade : '' ; ?></td>
									<td class="acoes">
										<button type="button" class="btn btn-sm btn-info acao-visualizar" title="Visualizar" value="<?php echo $reg->id; ?>" onclick="visualizarViagem(this)">
											<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
										</button>
									</td>
									<td class="acoes">
										<button type="button" class="btn btn-sm btn-success acao-editar" title="Editar" value="<?php echo $reg->id; ?>" onclick="editarViagem(this)">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
										</button>
									</td>
									<td class="acoes">
										<button type="button" class="btn btn-sm btn-danger acao-remover" title="Remover" value="<?php echo $reg->id; ?>" onclick="removerViagem(this)">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
										</button>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>