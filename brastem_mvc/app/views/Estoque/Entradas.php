<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
					<div class="rows">
						<div class="col-12 pt-2 d-flex text-between">
							<h1 class="text-roxo h2 m-0"><i class="fas fa-sign-out-alt m-0 h2 text-amarelo"></i> Entrada de estoque</h1>
							
						</div>	
					</div>
					<div >
				<form action="<?php echo URL_BASE . "Entradas/salvar"; ?>" method="POST">
					<div class="rows mt-0">
						<div class="col-6 position-relative">
							<label class="text-label">Produto</label>
							<select class="form-campo" name="id_produto" id="id_produto" onchange="selecionarProduto()">
								<option value="">Escolha um produto</option>
								<?php foreach($produtos as $produto){
									echo "<option value='$produto->id_produto'>$produto->produto</option>";
								}?>
								
								
								
							</select>
							<!--lista de produto-->

							<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>produto</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
						</div>
						<div class="col-3 position-relative">
							<label class="text-label">Preço Entrada</label>
							<input type="text" id="money" name="valor_entrada" class="form-campo">
							<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>quantidade</b> tem quer ser maior que <b>0</b> <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
						</div>

						<div class="col-3 position-relative">
							<label class="text-label">Quantidade de entrada</label>
							<input type="number" id="quantidade" name="quantidade" class="form-campo">
							<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>quantidade</b> tem quer ser maior que <b>0</b> <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
						</div>			

						<div class="col-2 mt-4">
							<input type="submit" name="" value="Inserir" class="btn btn-amarelo width-100">
						</div>
					</div>
				</form>
					</div>
				</div>
				<br>
				
				
				<div class="tabela-responsiva tabela">
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
							<?php foreach($entradas as $entradas){ ?>
                            	<tr>
									<td align="center"><?php echo $entradas->id_entrada; ?></td>
									<td align="center"><?php echo $entradas->produto; ?></td>
									<td align="center"><?php echo $entradas->quantidade; ?></td>
									<td align="center"><?php echo $entradas->valor_entrada; ?></td>
									<td align="center"><?php echo $entradas->subtotal_entrada; ?></td>
									<td align="center">
									<a href="#" class="btn btn-verde" title="Editar Usuário"><i class="ico-editar"></i></a>
									<a href="#" class="btn btn-vermelho" title="Excluir Usuário"><i class="ico-excluir"></i></a>
									</td>
							
								</tr>								
							<?php }?>

                                                        
                                                       
                        </tbody>
                    </table>
				</div>
				
			</div>
<script>
	$(function(){
		
	});

	function selecionarProduto(){
		var id_produto = $("#id_produto").val();
		$.ajax({
			url: base_url + "produtos/buscaPorId/" + id_produto,
			type: "GET",
			dataType: "Json",
			data:{},
			success: function(retorno){
				$("#money").val(retorno.preco);
				$("#preco").focus();
			}
		});
	}

</script>