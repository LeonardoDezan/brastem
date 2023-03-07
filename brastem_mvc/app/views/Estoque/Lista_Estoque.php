	<body>

		<div class="conteudo">
			<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 m-0"><i class="fas fa-sign-out-alt m-0 h2 text-amarelo"></i> Estoque</h1>
							<div>
							</div>
						</div>
					</div>
					<div class="mostraFiltro">
					<div class="rows mt-4">
						<div class="col-6 position-relative">
							<label class="text-label">Produto</label>
							<input type="text" name="" class="form-campo">
							<!--lista de produto-->
						</div>
						<div class="col-2">
							<label class="text-label">Valor</label>
							<input type="text" name="" class="form-campo">
						</div>
						<div class="col-2">
							<label class="text-label">Quantidade</label>
							<input type="number" name="" class="form-campo">
						</div>
						<div class="col-2 mt-4">
							<input type="submit" name="" value="Pesquisar" class="btn btn-amarelo width-100">
						</div>
					</div>
					</div>
				</div>
				<br>
				<!-- <span href="" class="msg msg-vermelho h5"><i class="fas fa-exclamation-triangle"></i> Produto não encontrado. <a href="" class="text-branco">Cadastre aqui</a> ou realize uma nova pesquisa <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span> -->
				
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
                        <thead>
                          <tr>
                            <th>Código</th>                
                            <th>Produto</th>
                            <th>Qualidade</th>
                            <th>Tamanho</th>
                            <th>Quantidade em Estoque</th>
                            <th>Valor</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center"> 10/06/2020</td>
                                <td align="center">Produto</td>
                                <td align="center">1</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">R$ 1.280,00</td>
								<td align="center">
									<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-add"></i> Carrinho </a>
									<a href="#" class="btn btn-azul btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Adicionar </a>
								</td>   
                            </tr>

                                                        
                                                       
                        </tbody>
                    </table>
				</div>
				
			</div>
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