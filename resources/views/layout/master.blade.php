<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body style=@yield('body-style')>

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item @yield('index')">
            <a class="nav-link" href="/">Pàgina principal</a>
          </li>
          <li class="nav-item @yield('visitor')">
            <a class="nav-link" href="/user">Pàgina visitant</a>
          </li>
          
          <li class="nav-item @yield('404')">
            <a class="nav-link" href="/

                <?php

                    echo rand();

                ?>

            ">Pàgina error 404</a>
          </li>
          <li class="nav-item @yield('user')">
            <a class="nav-link" onclick="paginaUsuari()" style="cursor: pointer;">Pàgina usuari</a>
          </li>
          <li class="nav-item">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Nom d'usuari" id="nomUsuari" name="nomUsuari">
            </form>
          </li>
        </ul>
      </nav>

    <div class="jumbotron text-center">
        <h1>@yield('header')</h1>
    </div>
    <div class="container text-center">
        @yield('content')
    </div>

    <!-- Botó invisible que només s'encarrega d'obrir el modal amb l'error, s'activa des del script amb JavaScript -->
    <button type="button" style="visibility: hidden;" data-toggle="modal" data-target="#errorModal" id="openModal"></button>

    <!-- Modal que mostra l'error per introduir dades del nom d'usuari -->
    <div class="modal" id="errorModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Error nom d'usuari</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              Introdueix les dades del nom d'usuari per accedir a aquesta pàgina
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tancar</button>
            </div>
      
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>

        // Revisa si l'input de text té alguna cosa escrita, sino mostra un alert amb la informació de l'error clicant el botó invisible que obre el modal
        function paginaUsuari() {
            
            inputText = document.getElementById("nomUsuari");

            if (inputText.value.length == 0) {
                boto = document.getElementById('openModal');
                boto.click();
            }
            else {

                nomUsuari = inputText.value;
                url = "/user/" + nomUsuari;
                window.location.href = url;
            };

        }

    </script>
</body>
</html>