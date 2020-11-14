<div class="container pt-5 text-center">
  <div class="card shadow rounded">
    <a type="button" class="card-link text-right"  data-toggle="modal" data-target="#modalLogin">
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
      </svg>
    </a>
    <div class="card-body">
      <img src="<?= base_url('assets/img/logo_infinita.png')?>" class="img-fluid mb-5" alt="Infinita"><br>
      <a href="<?= base_url('lead')?>" class="btn btn-lg btn-primary mt-3" style="width:200px">Cadastrar Lead</a>
      <a href="<?= base_url('corretor')?>" class="btn btn-lg btn-primary mt-3" style="width:200px">Cadastrar Corretor</a>
    </div>
  </div>
</div>