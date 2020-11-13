<div class="modal fade" id="modalCorretor" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalCorretor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCorretor">Cadastro de corretor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?= base_url('corretorCreate')?>" class="mb-3" enctype="multipart/form-data">
        <div class="form-group">
          <label for="Corretor_Nome">Nome do corretor:</label>
          <input class="form-control" type="text" id="Corretor_Nome" name="Corretor_Nome" required>
        </div>
        <div class="form-group">
          <label for="Corretor_Telefone">Telefone do corretor:</label>
          <input class="form-control" type="text" id="Corretor_Telefone" name="Corretor_Telefone" required>
        </div>
        <div class="form-group">
          <label for="Corretor_Email">E-mail (este será o usuário para o sistema):</label>
          <input class="form-control" type="email" id="Corretor_Email" name="Corretor_Email" required>
        </div>
        <div class="form-group">
          <p>Imobiliária:</p>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_autonomo" value="Autônomo" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_autonomo">
              Autônomo
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_aux_predial" value="Auxiliadora Predial" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_aux_predial">
              Auxiliadora Predial
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_guarida_imoveis" value="Guarida Imóveis" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_guarida_imoveis">
              Guarida Imóveis
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_foxter_imobiliaria" value="Foxter Imobiliária" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_foxter_imobiliaria">
              Foxter Imobiliária
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_lopes" value="Lopes" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_lopes">
              Lopes
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_imobiliaria_ducati" value="Imobiliária Ducati" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_imobiliaria_ducati">
              Imobiliária Ducati
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_credito_real" value="Crédito Real" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_credito_real">
              Crédito Real
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_vera_bernardes" value="Vera Bernardes" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_vera_bernardes">
              Vera Bernardes
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_iper_imoveis" value="Iper Imóveis" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_iper_imoveis">
              Iper Imóveis
            </label>
          </div>
          <div class="form-check form-check">
            <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_outra" value="Outra" onclick="myFunction()" required>
            <label class="form-check-label" for="Possui_corretor_outra">
              Outra
            </label>
          </div>
          <div class="form-group row" id="Qoutra" style="display:none">
            <label for="Corretor_Imobiliaria_Outra" class="col-sm-2 col-form-label">Qual?</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="Corretor_Imobiliaria_Outra" id="Corretor_Imobiliaria_Outra">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-success-corretor">Cadastrar</button>
      </form>
      </div>
    </div>
  </div>
</div>