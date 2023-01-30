<div class="base-form">
				<div class="radius-8 bg-padrao pt-2 px-4 pb-4">
				<form action="<?php echo URL_BASE . "Clientes/salvar"; ?>" method="post">
					<div class="rows">
							<div class="col-12 pt-2 d-flex text-between">
								<h1 class="text-branco h2">	<i class="fas fa-box-open m-0 h2 text-amarelo"></i> Cadastrar cliente</h1>
								<div>
									<a href="<?php echo URL_BASE . "Clientes/"; ?>" class="btn btn-amarelo d-inline-block"><i class="fas fa-arrow-circle-left"></i> Voltar</a>								
								</div>
							</div>

								<div class="col-3 mb-3">
									 <span class="text-label">TIPO DE CLIENTE</span>
									 <select name="tipo" class="form-campo">
										<option value="juridica">JURIDICA</option>
										<option value="fisica">FISICA</option>
									 </select>
									 	
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
								</div>

								<div class="col-6 mb-3">
									 <span class="text-label">Nome cliente</span>
									<input type="text" name="cliente" id="cliente" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>nome</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">CNPJ/CPF</span>
									<input type="text" name="email" id="email" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>
								
								<div class="col-3 mb-3">
									 <span class="text-label">IE/RG</span>
									<input type="text" name="ie_rg" id="ie_rg" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">REGIME TRIBUTÁRIO</span>
									 <select name="regime_tributario" class="form-campo">
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
									<input type="text" name="endereco" id="endereco" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">BAIRRO</span>
									<input type="text" name="bairo" id="bairro" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span class="text-label">CIDADE</span>
									<input type="text" name="cidade" id="cidade" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-2 mb-3">
									 <span class="text-label">ESTADO</span>
									<input type="text" name="estado" id="estado" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-2 mb-3">
									 <span class="text-label">CEP</span>
									<input type="text" name="cep" id="cep" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-5 mb-3">
									 <span class="text-label">EMAIL</span>
									<input type="email" name="email" id="email" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-5 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">TELEFONE</span>
									<input type="text" name="telefone" id="telefone" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CONTATO</span>
									<input type="email" name="contato_fone" id="contato_fone" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CELULAR</span>
									<input type="text" name="celular" id="telefone" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-4 mb-3">
									 <span class="text-label">CONTATO</span>
									<input type="text" name="contato_cel" id="contato_cel" value="" class="form-campo">
									<!-- <small href="" class="msg msg-vermelho h6 mt-1 p-1"><i class="fas fa-exclamation-triangle"></i> O Campo <b>email</b> é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></small> -->
				
								</div>

								<div class="col-3 mb-3">
									 <span></span>
										<!-- ESPAÇO VAZIO -->
								</div>

								<div class="col-6 mb-3">
									 <span class="text-label">OBSERVAÇÕES</span>
									<textarea style="resize: none;" name="obs" id="obs" cols="200" rows="6" class="form-campo">

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