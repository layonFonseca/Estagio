<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="https://github.com/layonFonseca/Estagio/tree/main/Laravel/Secoes_4_5">Repositório</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
            aria-expanded="false" aria-label="Toggle navigation">
       
            <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav mr-auto">

            @if (!Route::is('root'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
                </li>
            @endif

          <li class="nav-item">

              <a class="nav-link" href="{{route('bem-vindo')}}">Bem vindo</a>

          </li>

          <li class="nav-item">

              <a class="nav-link" href="{{route('page01')}}" >Testando Rotas</a>

          </li>

          <li class="nav-item dropdown active">

              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
              
              <div class="dropdown-menu" aria-labelledby="dropdown01">

                  <a class="dropdown-item" href="{{route('meusprodutos')}}">Listar Produtos</a>

                  

              </div>

          </li>

        </ul>

    </div>
</nav>