<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
<script>
function filterColumn ( i ) {
    $('#table').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
        $('#col'+i+'_smart').prop('checked')
    ).draw();
}
$(document).ready(function() {
    function date () {
        var today = new Date();
        var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
        var time = today.getHours() + "-" + today.getMinutes() + "-" + today.getSeconds();
        var dateTime = date+'_'+time;
        return dateTime
    };

    //cria a tabela
    var table = $('#table').DataTable(
    {
      "order":[],
      stateSave: false,
      "lengthMenu": [[20, 50, 100, 500, -1], [20, 50, 100, 500, "Todos"]],
      "language": {
          "url": "http://cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese-Brasil.json"
      },
      "dom": "<'row'<'col-12'<'col-sm-12'B>>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-3'l><'col-sm-3'i><'col-sm-6'p>>",
      buttons: [
        {
          extend: 'excelHtml5',
          className: 'btn btn-sm btn-primary',
          title: null,
          filename: date,
          sheetName: 'Planilha1',
          text: 'Exportar',
          exportOptions: {
            columns: ':visible:not(.notexport)'
          }
        },
        {
          className: 'btn btn-sm btn-primary btn-filtrar',
          text: '<i class="fas fa-search"></i> Filtrar',
          action: function(){
            // habilita os campos de filtro
            var $panel = $('.filterable .btn-filtrar').parents('.filterable'),
            $filters = $panel.find('.filters input');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
            } else {
                $filters.val('').prop('disabled', true);
            }
          }
        }
      ]
    });

    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('th').attr('data-column') );
    } );

    //desabilitar ordenação quando filtro está habilitado
    $(document).ready(function (){
    var table = $('#table').DataTable();

    $('.form-control').on('click', function(e){
      e.stopPropagation();
    });
});
} );
</script>
</body>
</html>