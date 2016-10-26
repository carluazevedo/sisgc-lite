<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php echo $titulo; ?></title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<!-- Bootstrap Theme -->
		<!--<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php
		if (isset($incluir_cabecalho)) :
			foreach ($incluir_cabecalho as $i) : echo $i; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</head>
<!-- END HEADER -->

	<body>
		<main>
<?php isset($view) ? $this->load->view($view) : show_404('', FALSE); ?>