##########################
# CREATING LOADING TABLE #
##########################

#
# Table structure for table 'reg_viagens'
#

CREATE TABLE IF NOT EXISTS `reg_viagens` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`status_viagem` tinyint(1) NOT NULL,
	`entrada_data` datetime NOT NULL,
	`entrada_usuario` varchar(64) NOT NULL,
	`saida_data` datetime NOT NULL,
	`saida_usuario` varchar(64) NOT NULL,
	`carga_risco` tinyint(1) NOT NULL,
	`carga_escolta` tinyint(1) NOT NULL,
	`dt_num` varchar(64) NOT NULL,
	`motorista_cpf` varchar(14) NOT NULL,
	`motorista_nome` varchar(128) NOT NULL,
	`placa_trator` varchar(8) NOT NULL,
	`placa_reboque_1` varchar(8) NOT NULL,
	`placa_reboque_2` varchar(8) DEFAULT NULL,
	`transp_nome` varchar(128) NOT NULL,
	`transp_unidade` varchar(64) NULL,
	`operacao_nome` varchar(128) NOT NULL,
	`operacao_unidade` varchar(64) NULL,
	`notas_fiscais` varchar(128) NULL,
	`valor` decimal(11,2) NULL,
	`peso` decimal(11,3) NULL,
	`entrega_tipo` varchar(20) NULL,
	`mercadoria_tipo` varchar(10) NULL,
	`destinatario_cnpj` varchar(18) NULL,
	`destinatario_nome` varchar(128) NULL,
	`destinatario_unidade` varchar(64) NULL,
	`rota` varchar(256) NULL,
	`observacoes` varchar(256) NOT NULL,
	PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;
