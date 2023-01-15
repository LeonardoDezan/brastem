<!doctype html>
<html language="pt-br">
	
<head>
	<title>mjailton</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="js/datatables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="js/datatables/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="js/datatables/css/style_dataTable.css">
	<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
	<link rel="stylesheet" href="css/grade.css">
	<link rel="stylesheet" href="css/style.css">
	<!--font icones-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<script src="js/jquery.min.js"></script>
</head>
<?php include "cabeçalho.php";?>
	<body>
		<div class="conteudo">
			<section class="caixa">
				<?php
				$link = isset($_GET["link"]) ? $_GET["link"] : null;
				$page[1] = "home.php";
				$page[2] = "cliente/index.php";
				$page[3] = "cliente/create.php";

			if ($link){
					if (file_exists($page[$link])){
						include $page[$link];
					}else{
						include "home.php"; 	
					}								
			}else{
					include "home.php";
			}

				
				
				?>
			</section>
		</div>
		
	<!---->
		<script src="js/jquery-ui.js"></script>
		<script src="js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="js/js.js"></script>
		<script src="js/componentes/js_modal.js"></script>
		<script src="js/componentes/js_data_table.js"></script>
	</body>
</html>