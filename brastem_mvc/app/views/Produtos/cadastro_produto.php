<div>
	<form action="<?php echo URL_BASE. "Produtos/salvar" ?>" method="post">
		<div class="base-form">

			<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
				<div class="rows">
							<div class="col-12 pt-2 d-flex text-between">
								<h1 class="text-branco"><i class="fas fa-box-open m-0 h2 text-amarelo"></i> Cadastro de Produtos</h1>
								<div>
									<a href="<?php echo URL_BASE. "Produtos" ?>" class="btn btn-amarelo d-inline-block"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
								
								</div>
							</div>

								<div>
									<input type="hidden" value="<?php echo isset($produtos) ? $produtos->id_produto : ""; ?>" name="id_produto" id="id_produto">				
								</div>

								<div class="col-8 mb-3">
									 <span class="text-label">Produto</span>
									<input type="text" name="produto" value="<?php echo isset($produtos) ? $produtos->produto : ""; ?>" class="form-campo" placeholder="Digite o nome do Produto" required>
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>Produto</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>
																			
								<div class="col-3 mb-3">
									 <span class="text-label">Código</span>
									<input type="text" name="codigo" value="<?php echo isset($produtos) ? $produtos->codigo : ""; ?>" class="form-campo" placeholder="Digite o Código do Produto" required>
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>preço</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>	
								
								<div class="col-3 mb-3">
									 <span class="text-label">Qualidade</span>
									 <select name="qualidade" class="form-campo" required>
									 	<option value="<?php echo isset($produtos) ? $produtos->qualidade : null; ?>"><?php echo isset($produtos) ? $produtos->qualidade : null; ?></option>
										<option value="PREMIUM">PREMIUM</option>
										<option value="PREMIUM ELASTOMÉRICA">PREMIUM ELASTOMÉRICA</option>
										<option value="STANDARD">STANDARD</option>
										<option value="ECONÔMICA">ECONÔMICA</option>
									 </select>
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">Cont.</span>
									 <select name="cont" class="form-campo" required>
									 	<option value="<?php echo isset($produtos) ? $produtos->cont : null; ?>"><?php echo isset($produtos) ? $produtos->cont : null; ?> Litros</option>
										<option value="3.6">3.6 Litros</option>
										<option value="18">18 Litros</option>
									 </select>
									<!-- <input type="text" value="" class="form-campo"> -->
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>estoque mínimo</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>
								
								<div class="col-3 mb-3">
									 <span class="text-label">estoque</span>
									<input type="text" name="estoque" value="<?php echo isset($produtos) ? $produtos->estoque : ""; ?>" class="form-campo" required>
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>estoque estadual</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">Preço Minimo</span>
									<input type="text" value="<?php echo isset($produtos) ? $produtos->preco : "" ; ?>" name="preco" class="form-campo" placeholder="R$ 0,00" id="money" required>
									<script>
										
									</script>
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>estoque estadual</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>


							
							<div class="col-2 mb-3">
								<input type="submit"  value="Cadastrar" class="btn btn-amarelo width-100">
							</div>									
								
						</div>
			</div>				
		</div>
	</form>
</div>


<!-- <span href="" class="msg msg-verde"><i class="fas fa-check"></i> Produto cadastrado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span> -->
<!-- <span href="" class="msg msg-vermelho h5"><i class="fas fa-exclamation-triangle"></i> Produto não cadastrado, verifique os dados inseridos<a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span> -->
		