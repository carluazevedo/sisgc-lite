<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
		'registrar_entrada' => array(
				array(
						'field' => 'dt_num',
						'label' => '<strong>'.'Número DT'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'motorista_cpf',
						'label' => '<strong>'.'CPF'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'motorista_nome',
						'label' => '<strong>'.'Nome'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'placa_trator',
						'label' => '<strong>'.'Trator'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'placa_reboque_1',
						'label' => '<strong>'.'Reboque 1'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'transp_nome',
						'label' => '<strong>'.'Nome'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'operacao_nome',
						'label' => '<strong>'.'Nome'.'</strong>',
						'rules' => 'required'
				)
		),
		'registrar_saida' => array(
				array(
						'field' => 'dt_num',
						'label' => '<strong>'.'Número DT'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'motorista_cpf',
						'label' => '<strong>'.'CPF'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'placa_trator',
						'label' => '<strong>'.'Trator'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'placa_reboque_1',
						'label' => '<strong>'.'Reboque 1'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'transp_nome',
						'label' => '<strong>'.'Nome'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'operacao_nome',
						'label' => '<strong>'.'Nome'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'notas_fiscais',
						'label' => '<strong>'.'Notas fiscais'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'valor',
						'label' => '<strong>'.'Valor total'.'</strong>',
						'rules' => 'required|regex_match[/[^0,00]/]',
						'errors' => array(
								'regex_match' => "Informe um <strong>valor</strong> maior que <strong>'0,00'</strong>."
						)
				),
				array(
						'field' => 'peso',
						'label' => '<strong>'.'Peso total'.'</strong>',
						'rules' => 'required'
				),
				array(
						'field' => 'entrega_tipo',
						'label' => '<strong>'.'Tipo de entrega'.'</strong>',
						'rules' => 'required',
						'errors' => array(
								'required' => 'Selecione o %s.'
						)
				),
				array(
						'field' => 'mercadoria_tipo',
						'label' => '<strong>'.'Tipo de mercadoria'.'</strong>',
						'rules' => 'required',
						'errors' => array(
								'required' => 'Selecione o %s.'
						)
				),
				array(
						'field' => 'destinatario_cnpj',
						'label' => '<strong>'.'CNPJ'.'</strong>',
						'rules' => 'required'
				)
		)
);
/**
 * Método alternativo para personalizar delimitadores de erros
 */
#$config['error_prefix'] = '<p class="form-control-static">';
#$config['error_suffix'] = '</p>';
