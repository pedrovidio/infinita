<div class="container mt-3">
    <form method="post" action="<?= base_url('leadCreate')?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="Lead_Nome">Nome:</label>
        <input class="form-control" type="text" id="Lead_Nome" name="Lead_Nome" required>
      </div>
      <div class="form-group">
        <label for="Lead_Telefone">Telefone:</label>
        <input class="form-control" type="text" id="Lead_Telefone" name="Lead_Telefone" required>
      </div>
      <div class="form-group">
        <label for="Lead_Email">Email principal:</label>
        <input class="form-control" type="email" id="Lead_Email" name="Lead_Email" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Lead_BairroResid">Bairro residencial:</label>
          <input class="form-control" type="text" id="Lead_BairroResid" name="Lead_BairroResid" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Lead_CidadeResid">Cidade:</label>
          <input class="form-control" type="text" id="Lead_CidadeResid" name="Lead_CidadeResid" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Lead_BairroComerc">Bairro Comercial:</label>
          <input class="form-control" type="text" id="Lead_BairroComerc" name="Lead_BairroComerc" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Lead_CidadeComerc">Cidade:</label>
          <input class="form-control" type="text" id="Lead_CidadeComerc" name="Lead_CidadeComerc" required>
        </div>
      </div>
      <div class="form-group">
        <p>AUTORIZO a Infinita a entrar em contato comigo para oferecer produtos, serviços e participar de promoções.</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Autorizacao" id="Autorizacao_sim" value="Sim" required>
          <label class="form-check-label" for="Autorizacao_sim">
            Sim
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Autorizacao" id="Autorizacao_nao" value="Não" required>
          <label class="form-check-label" for="Autorizacao_nao">
            Não
          </label>
        </div>
      </div>
      <div class="form-group">
        <p>Você possui corretor</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Possui_corretor" id="Possui_corretor_sim" value="Sim" required>
          <label class="form-check-label" for="Possui_corretor_sim">
            Sim
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Possui_corretor" id="Possui_corretor_nao" value="Não" required>
          <label class="form-check-label" for="Possui_corretor_nao">
            Não
          </label>
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-6">
          <label for="corretores_vinculados">Corretores:</label>
          <select id="corretores_vinculados" name="id_corretor" class="form-control" required>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCorretor">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            &nbsp;Cadastrar corretor
          </button>
        </div>
      </div>
      <input type="hidden" name="form" id="form" value="lead">
      <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
    </form>
  </div>