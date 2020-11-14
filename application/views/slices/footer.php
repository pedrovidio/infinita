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

  function listCorretores(Corretor_Nome,Corretor_Email){
    console.log(Corretor_Nome,Corretor_Email);
    $('.corretor').remove();
    $.ajax({
      method: "POST",
      data:{Corretor_Nome: Corretor_Nome, Corretor_Email: Corretor_Email},
      url: "<?= base_url('listCorretores') ?>",
      success: function(result){
        var options = result;
        console.log(options)
        $('#corretores_vinculados').append(options);
      }
    });
  }

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

  function submitCorretor() {
    const Corretor_Nome = document.getElementById('Corretor_Nome').value;
    const Corretor_Telefone = document.getElementById('Corretor_Telefone').value;
    const Corretor_Email = document.getElementById('Corretor_Email').value;
    const Corretor_Imobiliaria = $('input[name=Corretor_Imobiliaria]:checked', '#corretorForm').val()
    const Corretor_Imobiliaria_Outra = document.getElementById('Corretor_Imobiliaria_Outra').value;
    $.ajax({
				method: "POST",
				data:{Corretor_Nome: Corretor_Nome, Corretor_Telefone: Corretor_Telefone, Corretor_Email: Corretor_Email, Corretor_Imobiliaria: Corretor_Imobiliaria, Corretor_Imobiliaria_Outra: Corretor_Imobiliaria_Outra},
				url: "<?php echo base_url('corretorCreate') ?>",
				success: function(result){
          listCorretores(Corretor_Nome,Corretor_Email);
          $("#corretorForm").trigger('reset'); 
          $('#modalCorretor').modal('hide');
				}
			});
  }
</script>
</body>
</html>