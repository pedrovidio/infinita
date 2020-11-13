<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('.corretor').remove();
    $.ajax({
      url: "<?= base_url('listCorretores') ?>",
      success: function(result){
        var options = result;
        console.log(options)
        $('#corretores_vinculados').append(options);
      }
    });
  });
  $('.btn-success-corretor').click(function(){
    $('.corretor').remove();
    $.ajax({
      url: "<?= base_url('listCorretores') ?>",
      success: function(result){
        var options = result;
        console.log(options)
        $('#corretores_vinculados').append(options);
      }
    });
  });

  function myFunction() {
    var checkBox = document.getElementById("Possui_corretor_outra");
    var text = document.getElementById("Qoutra");

    if (checkBox.checked == true){
      text.style.display = "";
      document.getElementById("Corretor_Imobiliaria_Outra").required = true;
    } else {
      text.style.display = "none";
      document.getElementById("Corretor_Imobiliaria_Outra").required = false;
    }
  }
</script>
</body>
</html>