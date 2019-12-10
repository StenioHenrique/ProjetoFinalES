<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript">

  function carregarBairro() {
    $.getJSON('/api/bairros', function(data) {
        for(i=0;i<data.length;i++) {
            opcao = '<option value ="' + data[i].id + '">' +
                data[i].bairro + '</option>';
            $('#bairroUser').append(opcao);
        }
    });
  };

  function carregarCategoria() {
    $.getJSON('/api/categorias', function(data) {
        for(i=0;i<data.length;i++) {
            opcao = '<option value ="' + data[i].id + '">' +
                data[i].nome + '</option>';
            $('#categoriaPlano').append(opcao);
        }
    });
  };

  $(function(){
      carregarBairro();
      carregarCategoria();
  });

  $(document).ready(function(){
    Materialize.updateTextFields();
    $('select').formSelect();
    $(".button-collapse").sideNav();
  });
</script>
</body>
</html>
