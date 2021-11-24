<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <title>Hello, world!</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-deathnote">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img class="img-logo" src="{{asset('img/death_note_logo.png')}}" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link {{$pagina == 'agregar_causa' ? 'active': ''}}" aria-current="page" href="{{route('agregar_causa')}}">Agregar Causa de Muerte</a>
                  <a class="nav-link {{ $pagina == 'ver_causas' ? 'active' : ''}}" href="{{route('ver_causas')}}">Ver Causa de Muerte</a>
                  <a class="nav-link {{ $pagina == 'asesinar'? 'active' : '' }}" href="{{route('asesinar')}}">Asesinar</a>
                  <a class="nav-link {{ $pagina == 'revisar_libreta' ? 'active': ''}} " href="{{route('revisar_libreta')}}">Revisar Libreta</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
