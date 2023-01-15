<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-branco h2 m-0"><i class="fas fa-sign-out-alt m-0 h2 text-amarelo"></i> Estoque de Saída</h1>
							
						</div>
					</div>
					<div class="">
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
								<small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>produto</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small>
				
						</div>
						<div class="col-3">
							<label class="text-label">Quantidade</label>
							<input type="number" name="" class="form-campo">
							<small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>quantidade</b> tem quer ser maior que <b>0</b> <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small>
				
						</div>
						<div class="col-2 mt-4">
							<input type="submit" name="" value="Inserir" class="btn btn-amarelo width-100">
						</div>
					</div>
					</div>
				</div>
				<br>
				<span href="" class="msg msg-vermelho h5"><i class="fas fa-exclamation-triangle"></i> Produto não encontrado. <a href="" class="text-branco">Cadastre aqui</a> ou realize uma nova pesquisa <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                          <tr>
                            <th>#</th>                
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Subtotal</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">1</td>
                                <td align="center">Redmi Note 7</td>
                                <td align="center">1</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">R$ 1.280,00</td>
                                <td align="center">
									<a href="#" class="btn btn-verde" title="Editar Usuário"><i class="ico-editar"></i></a>
                                    <a href="#" class="btn btn-vermelho" title="Excluir Usuário"><i class="ico-excluir"></i></a>
								</td>
                                
                            </tr>
                                                        
                                                       
                        </tbody>
                    </table>
				</div>
				
			</div>