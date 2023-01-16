<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 mb-0"><i class="fas fa-list m-0 h2 text-amarelo"></i> Lista de clientes</h1>
							<div>
								<a href="index.php?link=3" class="btn btn-branco d-inline-block"><i class="fas fa-plus-circle"></i> Cadastrar novo</a>
								<a href="" class="btn btn-vermelho d-inline-block filtro ml-1"><i class="fas fa-filter"></i> Filtrar</a>
							</div>
						</div>
					</div>
					<div class="mostraFiltro">
						<div class="rows">
							<div class="col-6 position-relative">
								<label class="text-label">Cliente</label>
								<input type="text" name="" class="form-campo">
								<!--lista de cliente-->
								<div class="listaClientes" style="display:none">
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
				<br>
				<span href="" class="msg msg-vermelho h5"><i class="fas fa-exclamation-triangle"></i> Cliente não encontrado. <a href="frm-cadastro.html" class="text-branco">Cadastre aqui</a> ou realize uma nova pesquisa <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
                        <thead>
                          <tr>
                            <th>#</th>                
                            <th>Cliente</th>
                            <th>Email</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">Teste 1</td>
                                <td align="center"><a href="" class="text-azul"><i class="fas fa-envelope"></i> teste1@gmail.com</a></td>
                                <td align="center">
									<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Eiditar</a>
                                    <a href="#" class="btn btn-vermelho btn-auto" title="Excluir Usuário"><i class="ico-excluir"></i> Deletar</a>
								</td>                                
                            </tr>
                                   
                            <tr>
                                <td align="center">2</td>
                                <td align="center">Teste 2</td>
                                <td align="center"><a href="" class="text-azul"><i class="fas fa-envelope"></i> teste2@gmail.com</a></td>
                                <td align="center">
									<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Eiditar</a>
                                    <a href="#" class="btn btn-vermelho btn-auto" title="Excluir Usuário"><i class="ico-excluir"></i> Deletar</a>
								</td>                                
                            </tr>
                                   
                            <tr>
                                <td align="center">3</td>
                                <td align="center">Teste 3</td>
                                <td align="center"><a href="" class="text-azul"><i class="fas fa-envelope"></i> teste3@gmail.com</a></td>
                                <td align="center">
									<a href="#" class="btn btn-verde btn-auto" title="Editar Usuário"><i class="ico-editar"></i> Eiditar</a>
                                    <a href="#" class="btn btn-vermelho btn-auto" title="Excluir Usuário"><i class="ico-excluir"></i> Deletar</a>
								</td>                                
                            </tr>
                                                 
                        </tbody>
                    </table>
				</div>
				
			</div>