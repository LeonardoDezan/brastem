<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 mb-0"><i class="fas fa-list m-0 h2 text-amarelo"></i> Lista de produtos</h1>
							<div>
								<a href="<?php echo URL_BASE . "Produtos/create"; ?>" class="btn btn-branco d-inline-block"><i class="fas fa-plus-circle"></i> Cadastrar novo</a>
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
								<!--Opções de filtros -->
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
							<th>Código do Produto</th>              
                            <th>Produto</th>
                            <th>Qualidade</th>
                            <th>Cont.</th>
                            <th>Estoque</th>
							<th>Preço Mínimo</th>
                          </tr>
                        </thead>
                        <tbody>
						<?php foreach($lista as $produto) { ?> 
                            <tr>
                                <td align="center"><?php echo $produto->id_produto; ?></td>
                                <td align="center"><?php echo $produto->codigo; ?></td>
                                <td align="center"><?php echo $produto->produto; ?></td>
                                <td align="center"><?php echo $produto->qualidade; ?></td>
								<td align="center"><?php echo $produto->cont; ?></td>
								<td align="center"><?php echo $produto->estoque; ?></td>
								<td align="center"><?php echo  "R$ ". $produto->preco; ?></td>
                                <td align="center">
										<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Eiditar</a>
                                    <a href="#" class="
									btn btn-vermelho btn-auto" title="Excluir Usuário"><i class="ico-excluir"></i> Deletar</a>
								</td>                                
                            </tr>
							<?php } ?>
                                                
                        </tbody>
                    </table>
				</div>
				
			</div>