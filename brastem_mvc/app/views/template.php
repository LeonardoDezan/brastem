<!doctype html>
<html language="pt-br">
<head>
	<title>mjailton</title>
	<link rel="shortcut icon" href="<?php echo URL_BASE ?>assets/img/favicon.png" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/style_dataTable.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
	<!--font icones-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
</head>
	<body>

		</header>
		<?php include_once("cabecalho.php"); ?>
		<?php $this->load($view, $viewData);?>


		
	<!---->
		<script src="<?php echo URL_BASE ?>assets/js/jquery-ui.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_modal.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_data_table.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_mascara.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
		<script>
			$('#cep').mask('00000-000');
			$('#telefone').mask('(00) 0000-0000');
			$('#celular').mask('(00) 0 0000-0000');
			$('#cnpj_cpf').mask('00.000.000/0000-00', {reverse: true});
		</script>
		<script src="<?php echo URL_BASE ?>assets/js/alertas-js.js"></script>
		
	</body>
</html>


