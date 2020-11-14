<div class="modal fade" id="modalLogin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLogin">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="mb-3"  method="post" action="<?= base_url('validate')?>" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="user" class="col-sm-3 col-form-label">Usuário:</label>
            <div class="col-sm-9">
              <input class="form-control" type="text" id="user" name="user" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="pass" class="col-sm-3 col-form-label">Senha:</label>
            <div class="col-sm-9">
              <input class="form-control" type="password" id="pass" name="pass" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>