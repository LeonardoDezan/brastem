<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4 mb-3">
					<div class="rows">
						<div class="col-12 pt-2 mb-3"><h1 class="text-branco h2 mb-0"><i class="fas fa-cash-register mb-0 h2 text-amarelo"></i> Nova Venda</h1></div>
						<div class="col-2">
							<div class="bg-padrao alt branco width-100">
								<label class="label m-0 pb-1 text-branco"><i class="fas fa-asterisk"></i> Código</label>
								<p class="text-branco">1</p>
							</div>
						</div>
						<div class="col-5">
							<div class="bg-padrao alt branco width-100">
								<label class="label m-0 pb-1 text-branco"><i class="fas fa-asterisk"></i> Cliente</label>
								<p class="text-branco">MAnoel jailton sousa</p>
							</div>
						</div>
						<div class="col-5">
							<div class="bg-padrao alt branco width-100">
								<label class="label m-0 pb-1 text-branco"><i class="fas fa-asterisk"></i> Email</label>
								<p class="text-branco">mjailton@gmail.com</p>
							</div>
						</div>
					</div>		
				</div>
				<div class="bg-padrao alt">
					<div class="rows">						
						<div class="col-2 mt-3 d-flex">
							<div class="bg-padrao alt width-100">
								<label class="label m-0 pb-1"><i class="fas fa-asterisk"></i> Código</label>
								<p class="text-roxo">1000</p>
							</div>						
						</div>						
						<div class="col-3 mt-3 d-flex">
							<div class="bg-padrao alt width-100">
								<label class="label m-0 pb-1"><i class="fas fa-calendar-alt"></i> Data</label>
								<p class="text-roxo">13/08/2021</p>
							</div>
						</div>
						<div class="col-3 mt-3 d-flex">
							<div class="bg-padrao alt width-100">
								<label class="label m-0 pb-1"><i class="fas fa-clock"></i> Hora</label>
								<p class="text-roxo">12:59:23</p>
							</div>
						</div>
						<div class="col mt-3 d-flex">
							<div class="bg-padrao radius-8 p-2 width-100">
								<label class="label mt-0 py-0 text-branco"><i class="fas fa-dollar-sign"></i> Total</label>
								<h1 class="text-branco" style="font-weight:300">R$ 5.000,00</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-3 bg-padrao alt bg-cinza pb-4">
					<div class="rows">
						<div class="col-12"><strong class="h5 text-roxo">Itens da venda</strong></div>
						<div class="col-6 position-relative">
							<label class="label">Produto</label>
							<input type="text" name="" class="form-campo border">
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
							<small href="" class="msg msg-vermelho h6 mt-1 p-1 mb-0"><i class="fas fa-exclamation-triangle"></i> O Campo <b>produto</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small>
				
						</div>
						<div class="col-2">
							<label class="label">Valor</label>
							<input type="text" name="" class="form-campo border">
							<small href="" class="msg msg-vermelho h6 mt-1 p-1 mb-0"><i class="fas fa-exclamation-triangle"></i> O Campo <b>valor</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small>
				
						</div>
						<div class="col-2">
							<label class="label">Quantidade</label>
							<input type="number" name="" class="form-campo border">
							<small href="" class="msg msg-vermelho h6 mt-1 p-1 mb-0"><i class="fas fa-exclamation-triangle"></i> O Campo <b>Quantidade</b> tem que ser maior que <b>0</b> <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small>
				
						</div>
						<div class="col-2 mt-4">
							<input type="submit" name="" value="Inserir" class="btn btn-roxo width-100">
						</div>
						
					</div>
				</div>
				
				
				<div class="mt-3 bg-padrao alt">
				<div class="tabela-responsiva tabela mt-3">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
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
					<div class="d-flex mt-4 text-end">
						<div class="col-2 px-1"><button type="submit" class="btn btn-medio btn-amarelo mb-3 width-100"> <i class="fas fa-minus-circle"></i> Limpar itens</button></div>
						<div class="col-2 px-1"><button type="submit" class="btn btn-medio btn-vermelho mb-3 text-branco  width-100"> <i class="fas fa-times-circle"></i> Cancelar</button></div>
						<div class="col-2 px-1 pr-0"><button type="submit" class="btn btn-medio btn-verde mb-3  width-100"> <i class="fas fa-check-circle"></i> Finalizar</button></div>
					</div>
				</div>
				
			</div>