@extends('layout.tema')

@section('titulo','Super Vizinhos')

@section('conteudo')
  <html>
    <body>

    <section>
      <h1 class="center">Super Vizinhos</h1>
      <p class="center">Bem-vindo ao Super Vizinhos, somos um sistema que visa melhorar a segurança pública,baseado no método de segurança comunitária</p>
      <p class="center"> O sistema funcionará com base nas denúncias feitas pela própria comunidade, e estas denúncias serão de livre acesso à todos os usuários do sistema,
          para que os mesmos possam se informar e consequentemente se previnir de lugares com maior taxa de criminalidade.</p>
    </section>

    <section>
      <h1 class="center">Aviso as autoridades</h1>
      <p class="center">Não esqueçam de comunicar as autoridades locais as denúncias, afinal este sistema não é uma formulário legal com amparo jurídico.
      É apenas uma forma de facilitar o acesso a informação a toda a comunidade para que possam se prevenir e tomar atitudes em conjunto.</p>
    </section>
    <br> <br> <br>
    <p class="center"><strong>Nota:</strong> Para usar o sistema é preciso que seu bairro esteja cadastrado,
    clique no link: <a href="{{route('bairro.listar')}}">Listar Bairros</a> para listar os bairros já cadastrados. </p>
    <p class="center">Ou <a href="{{route('bairro.cadastrar')}}">clique aqui</a> para cadastrar o seu bairro</p>


    </body>
  </html>
@endsection
