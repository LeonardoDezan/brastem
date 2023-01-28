<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 m-0"><i class="fas fa-sign-out-alt m-0 h2 text-amarelo"></i> Consulta vendas</h1>
							<div>
								<a href="" class="btn btn-vermelho d-inline-block filtro ml-1"><i class="fas fa-filter"></i> Filtrar</a>
							</div>
						</div>
					</div>
					<div class="mostraFiltro">
					<div class="rows mt-4">
						<div class="col-6 position-relative">
							<label class="text-label">Produto</label>
							<input type="text" name="" class="form-campo">
							<!--lista de produto-->
							<div class="listaProdutos" style="display:none">
								<ul>
									<li><a href="">Arroz</a></li>
									<li><a href="">Banana</a></li>
									<li><a href="">Alface</a></li>
									<li><a href="">Arroz</a></li>
									<li><a href="">Banana</a></li>
									<li><a href="">Alface</a></li>
								</ul>
							</div>
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
				<span href="" class="msg msg-vermelho h5"><i class="fas fa-exclamation-triangle"></i> Produto não encontrado. <a href="" class="text-branco">Cadastre aqui</a> ou realize uma nova pesquisa <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
                        <thead>
                          <tr>
                            <th>#</th>                
                            <th>Data</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Subtotal</th>
                            <th>Motivo</th>
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
                                <td align="center">Saída Avulsa</td>                                
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td align="center"> 10/06/2020</td>
                                <td align="center">Produto</td>
                                <td align="center">1</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">Saída Avulsa</td>                                
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td align="center"> 10/06/2020</td>
                                <td align="center">Produto</td>
                                <td align="center">1</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">Saída Avulsa</td>                                
                            </tr>
                            <tr>
                                <td align="center">1</td>
                                <td align="center"> 10/06/2020</td>
                                <td align="center">Produto</td>
                                <td align="center">1</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">Saída Avulsa</td>                                
                            </tr>
                                                        
                                                       
                        </tbody>
                    </table>
				</div>
				
			</div>