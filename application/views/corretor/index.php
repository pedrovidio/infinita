<div class="container mt-3">
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
      <?php
      $imobiliarias = array(
        1 => 'AJ Cândido',
        2 => 'Autônomo',
        3 => 'Auxiliadora Predial',
        4 => 'Crédito Real',
        5 => 'Da Cás',
        6 => 'Foxter Imobiliária',
        7 => 'Guarida Imóveis',
        8 => 'Imobiliária Ducati',
        9 => 'Iper Imóveis',
        10 => 'Jbarcelos',
        11 => 'Lopes',
        12 => 'Urban',
        13 => 'Vera Bernardes',
        14 => 'Outra'
      );
      $map = array(
        'á' => 'a',
        'à' => 'a',
        'ã' => 'a',
        'â' => 'a',
        'é' => 'e',
        'ê' => 'e',
        'í' => 'i',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ú' => 'u',
        'ü' => 'u',
        'ç' => 'c',
        'Á' => 'A',
        'À' => 'A',
        'Ã' => 'A',
        'Â' => 'A',
        'É' => 'E',
        'Ê' => 'E',
        'Í' => 'I',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ú' => 'U',
        'Ü' => 'U',
        'Ç' => 'C'
      );
      foreach ($imobiliarias as $key => $imobiliaria) {
        echo '<div class="form-check form-check">
                <input class="form-check-input" type="radio" name="Corretor_Imobiliaria" id="Possui_corretor_'.strtr(str_replace(' ','',$imobiliaria),$map).'" value="'.$imobiliaria.'" onclick="myFunction()" required>
                <label class="form-check-label" for="Possui_corretor_'.strtr(str_replace(' ','',$imobiliaria),$map).'">'.$imobiliaria.'</label>
              </div>';
      }
      ?>
      <div class="form-group row" id="Qoutra" style="display:none">
        <label for="Corretor_Imobiliaria_Outra" class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="Corretor_Imobiliaria_Outra" id="Corretor_Imobiliaria_Outra">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
  </form>
</div>