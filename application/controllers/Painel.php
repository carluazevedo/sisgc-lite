<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public $titulo = 'SisGC';

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('identity')) redirect('auth');
		$this->load->model('painel_model');
	}

	public function index()
	{
		/* Informações para 'cabecalho.php' */
		$data['titulo']            = $this->titulo;
		$data['incluir_cabecalho'] = array(link_tag('styles/geral.css'));
		$data['view']              = 'painel/inicio';
		/* Informações para 'view' */
		$data['titulo_pagina'] = 'Viagens registradas';
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array('<script src="'.base_url('scripts/painel.js').'"></script>');
		/* Lógica do controlador */
		$colunas = array(
			'id',
			'dt_num',
			'status_viagem',
			'entrada_data',
			'saida_data',
			'motorista_nome',
			'placa_trator',
			'placa_reboque_1',
			'transp_nome',
			'operacao_nome',
			'operacao_unidade'
		);
		$data['registros'] = $this->painel_model->listar_registros('reg_viagens', $colunas);
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view('modelos/rodape', $data);
	}
}