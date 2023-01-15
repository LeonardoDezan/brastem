<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 mb-0"><i class="fas fa-list m-0 h2 text-amarelo"></i> Lista de produtos</h1>
							<div>
								<a href="index.php?link=5" class="btn btn-branco d-inline-block"><i class="fas fa-plus-circle"></i> Cadastrar novo</a>
								<a href="" class="btn btn-vermelho d-inline-block filtro ml-1"><i class="fas fa-filter"></i> Filtrar</a>
							</div>
						</div>
					</div>
					<div class="mostraFiltro">
						<div class="rows">
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
							<div class="col-3">
								<label class="text-label">Preço</label>
								<input type="text" name="" class="form-campo">
							</div>
							<div class="col-2 mt-4">
								<input type="submit" name="" value="Buscar" class="btn btn-amarelo width-100">
							</div>
						</div>
					</div>
				</div>
				
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
                        <thead>
                          <tr>
                            <th>#</th>                
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Estoque inicial</th>
                            <th>Estoque mínimo</th>
                            <th>Estoque estadual</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">Produto</td>
                                <td align="center">R$ 100,00</td>
                                <td align="center">1000</td>
                                <td align="center">5</td>
                                <td align="center">5</td>
                                <td align="center">
										<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Eiditar</a>
                                    <a href="#" class="btn btn-vermelho btn-auto" title="Excluir Usuário"><i class="ico-excluir"></i> Deletar</a>
								</td>                                
                            </tr>
                                                
                        </tbody>
                    </table>
				</div>
				
			</div>