<div class="p-3">
<div class="filterable">
  <table id="table" class="table table-striped table-hover table-bordered table-responsive">
    <thead>
        <tr class="filters">
          <?php
          $contador = 0;
            foreach ($colunas as $key => $coluna) {
              echo '<th id="filter_col'.$key.'" data-column="'.$contador.'"><input class="column_filter form-control" style="width:'.$largura[$key].'" id="col'.$contador.'_filter" type="text" placeholder="'.$labels[$key].'" disabled><spam class="d-none">'.$labels[$key].'<spam></th>';
              $contador++;
            }
          ?>
        </tr>
    </thead>
    <tbody>
      <?php
        foreach ($cadastros as $key_cadastro => $cadastro) {
          echo '<tr>';
          foreach ($colunas as $key_coluna => $coluna) {
            echo '<td>'.$cadastro[$coluna].'</td>';
          }
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>
</div>
</div>