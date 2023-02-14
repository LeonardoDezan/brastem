<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
				<form action="<?php echo URL_BASE . "Clientes/salvar"; ?>" method="post">
					<div class="rows">
							<div class="col-12 pt-2 d-flex text-between">
								<h1 class="text-roxo h2">	<i class="fas fa-box-open m-0 h2 text-amarelo"></i> Cadastrar cliente</h1>
								<div>
									<a href="<?php echo URL_BASE . "Clientes/"; ?>" class="btn btn-amarelo d-inline-block"><i class="fas fa-arrow-circle-left"></i> Voltar</a>								
								</div>
							</div>

								<div>
									<input type="hidden" value="<?php echo isset($cliente) ? $cliente->id_clientes : ""; ?>" name="id_clientes" id="id_clientes">				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">TIPO DE CLIENTE</span>
									 <select name="tipo" class="form-campo">
									 	<option value="<?php echo isset($cliente) ? $cliente->tipo : null; ?>"><?php echo isset($cliente) ? $cliente->tipo : null; ?></option>
										<option value="JURIDICA">JURIDICA</option>
										<option value="FISICA">FISICA</option>
									 </select>
									 	
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
								</div>

								<div class="col-6 mb-3">
									 <span class="text-label">Nome cliente</span>
									<input type="text" value="<?php echo isset($cliente) ? $cliente->nome_cliente : ""; ?>" name="nome_cliente" id="nome_cliente" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>nome</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label ">CNPJ/CPF</span>
									<input type="text" name="cnpj_cpf" id="cnpj" value="<?php echo isset($cliente) ? $cliente->cnpj_cpf : null; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">IE/RG</span>
									<input type="text" name="ie_rg" id="ie_rg" value="<?php echo isset($cliente) ? $cliente->ie_rg : null; ?>" class="form-campo" maxlength="9">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">REGIME TRIBUTÁRIO</span>
									 <select name="regime_tributario" class="form-campo">
									 <option value="<?php echo isset($cliente) ? $cliente->regime_tributario : null; ?>"><?php echo isset($cliente) ? $cliente->regime_tributario : null; ?></option>
										<option value="MEI">MEI</option>
										<option value="SIMPES NACIONAL">SIMPLES NACIONAL</option>
										<option value="LUCRO PRESUMIDO">LUCRO PRESUMIDO</option>
										<option value="LUCRO REAL">LUCRO REAL</option>
										<option value="OUTRO">OUTRO</option>
									 </select>
									 	
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
								</div>

								<div class="col-8 mb-3">
									 <span class="text-label">ENDEREÇO</span>
									<input type="text" name="endereco" id="endereco" value="<?php echo isset($cliente) ? $cliente->endereco : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">BAIRRO</span>
									<input type="text" name="bairro" id="bairro" value="<?php echo isset($cliente) ? $cliente->bairro : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">CIDADE</span>
									<input type="text" name="cidade" id="cidade" value="<?php echo isset($cliente) ? $cliente->cidade : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-2 mb-3">
									 <span class="text-label">ESTADO</span>
									<input type="text" name="estado" id="estado" value="<?php echo isset($cliente) ? $cliente->estado : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-2 mb-3">
									 <span class="text-label">CEP</span>
									<input type="text" name="cep" id="cep" value="<?php echo isset($cliente) ? $cliente->cep : null; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>


								<div class="col-5 mb-3">
									 <span class="text-label">EMAIL</span>
									<input type="email" name="email" id="email" value="<?php echo isset($cliente) ? $cliente->email : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>


								<div class="col-4 mb-3">
									 <span class="text-label">TELEFONE</span>
									<input type="text" name="telefone" id="telefone" value="<?php echo isset($cliente) ? $cliente->telefone : ""; ?>" class="form-campo" maxlength="10">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CONTATO</span>
									<input type="text" name="contato_fone" id="contato_fone" value="<?php echo isset($cliente) ? $cliente->contato_fone : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CELULAR</span>
									<input type="text" name="celular" id="celular" value="<?php echo isset($cliente) ? $cliente->celular : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CONTATO</span>
									<input type="text" name="contato_cel" id="contato_cel" value="<?php echo isset($cliente) ? $cliente->contato_cel : ""; ?>" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-6 mb-3">
									 <span class="text-label">OBSERVAÇÕES</span>
									<textarea style="resize: none; "   name="obs" id="obs" cols="200" rows="6" class="form-campo">
									<?php echo isset($cliente) ? $cliente->obs : ""; ?>
									</textarea>
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-6 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>


							<div class="col-3 mb-3">
								<input type="submit"  value="Cadastrar" class="btn btn-amarelo width-100">
							</div>									
								
						</div>
						</form>
				</div>				
			</div>
