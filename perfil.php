<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Parc Atraccions Univeylandia</title>
    <link rel="icon" href="/img/icon.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm py-0">
        <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Idioma </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">ES</a></li>
                        <li><a class="dropdown-item" href="#">CA</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/img/mapa_parc.jpg">Mapa</a>
                </li>
                <li>
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
                <li>
                  <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-4">
      <a class="navbar-brand" href="/index.php">Univeylandia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Parc      </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/noticies/noticies_1.php">Noticies</a></li>
              <li><a class="dropdown-item" href="/promocions.php">Promocions</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Atraccions</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hotel      </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/hotel/habitacions.php">Habitacions</a></li>
              <li><a class="dropdown-item" href="/hotel/habitacions.php">Restaurants</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Entrades      </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Parc</a></li>
              <li><a class="dropdown-item" href="#">Parc+Hotel</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>

    <div class="container px-5 py-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 22rem;">
                <div class="card-body">
                    <img src="/img/hotel.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236">
                </div>
                <ul class="list-group list-group-flush">
                  <?php
                    include_once $_SERVER['DOCUMENT_ROOT']."/php/classes/classeClient.php";
                    Client::cercarDadesClient($_SESSION['username']);
                   ?>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Modificar Perfil</a>
                    <a href="#" class="btn btn-secondary">Eliminar Perfil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FI NOTICIES -->

    <!-- PROMOCIONS -->



    <div class="jumbotron text-center" style="margin-bottom:0">
        <div class="row">
            <div class="col-sm-2">
                <h6>Univeylandia</h6>
                <ul class="list-inline">
                    <li><a href="#">Sobre nosaltres</a></li>
                    <li><a href="#">Reconeixements</a></li>
                    <li><a href="#">Treballa amb nosaltres</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Contacte</a></li>
                </ul>
            </div>

            <div class="col-sm-2">
                <h6>Condicions</h6>
                <ul class="list-inline">
                    <li><a href="#">Condicions generals</a></li>
                    <li><a href="#">Política de privacitat</a></li>
                    <li><a href="#">Normes del Resort</a></li>
                    <li><a href="#">Politica de cookies</a></li>
                    <li><a href="#">MAPA WEB</a></li>
                </ul>
            </div>

            <div class="col-sm-2">
                <h6>Parc</h6>
                <ul class="list-inline">
                    <li><a href="#">Atraccions</a></li>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Restaurants</a></li>
                </ul>
            </div>

            <div class="col-sm-3">
                <h3>Truca'ns</h3>
                <p>642 18 90 00</p>
            </div>
            <div class="col-sm-3">
                <h3>Segueix-nos</h3>
                <a href="#">
                    <img class="img_face" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQ5LjY1MiA0OS42NTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5LjY1MiA0OS42NTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQuODI2LDBDMTEuMTM3LDAsMCwxMS4xMzcsMCwyNC44MjZjMCwxMy42ODgsMTEuMTM3LDI0LjgyNiwyNC44MjYsMjQuODI2YzEzLjY4OCwwLDI0LjgyNi0xMS4xMzgsMjQuODI2LTI0LjgyNiAgICBDNDkuNjUyLDExLjEzNywzOC41MTYsMCwyNC44MjYsMHogTTMxLDI1LjdoLTQuMDM5YzAsNi40NTMsMCwxNC4zOTYsMCwxNC4zOTZoLTUuOTg1YzAsMCwwLTcuODY2LDAtMTQuMzk2aC0yLjg0NXYtNS4wODhoMi44NDUgICAgdi0zLjI5MWMwLTIuMzU3LDEuMTItNi4wNCw2LjA0LTYuMDRsNC40MzUsMC4wMTd2NC45MzljMCwwLTIuNjk1LDAtMy4yMTksMGMtMC41MjQsMC0xLjI2OSwwLjI2Mi0xLjI2OSwxLjM4NnYyLjk5aDQuNTZMMzEsMjUuN3ogICAgIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>
                <a href="#">
                    <img class="img_face" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQ5LjY1MiA0OS42NTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5LjY1MiA0OS42NTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjQuODI2LDBDMTEuMTM3LDAsMCwxMS4xMzcsMCwyNC44MjZjMCwxMy42ODgsMTEuMTM3LDI0LjgyNiwyNC44MjYsMjQuODI2YzEzLjY4OCwwLDI0LjgyNi0xMS4xMzgsMjQuODI2LTI0LjgyNiAgICBDNDkuNjUyLDExLjEzNywzOC41MTYsMCwyNC44MjYsMHogTTM1LjkwMSwxOS4xNDRjMC4wMTEsMC4yNDYsMC4wMTcsMC40OTQsMC4wMTcsMC43NDJjMCw3LjU1MS01Ljc0NiwxNi4yNTUtMTYuMjU5LDE2LjI1NSAgICBjLTMuMjI3LDAtNi4yMzEtMC45NDMtOC43NTktMi41NjVjMC40NDcsMC4wNTMsMC45MDIsMC4wOCwxLjM2MywwLjA4YzIuNjc4LDAsNS4xNDEtMC45MTQsNy4wOTctMi40NDYgICAgYy0yLjUtMC4wNDYtNC42MTEtMS42OTgtNS4zMzgtMy45NjljMC4zNDgsMC4wNjYsMC43MDcsMC4xMDMsMS4wNzQsMC4xMDNjMC41MjEsMCwxLjAyNy0wLjA2OCwxLjUwNi0wLjE5OSAgICBjLTIuNjE0LTAuNTI0LTQuNTgzLTIuODMzLTQuNTgzLTUuNjAzYzAtMC4wMjQsMC0wLjA0OSwwLjAwMS0wLjA3MmMwLjc3LDAuNDI3LDEuNjUxLDAuNjg1LDIuNTg3LDAuNzE0ICAgIGMtMS41MzItMS4wMjMtMi41NDEtMi43NzMtMi41NDEtNC43NTVjMC0xLjA0OCwwLjI4MS0yLjAzLDAuNzczLTIuODc0YzIuODE3LDMuNDU4LDcuMDI5LDUuNzMyLDExLjc3Nyw1Ljk3MiAgICBjLTAuMDk4LTAuNDE5LTAuMTQ3LTAuODU0LTAuMTQ3LTEuMzAzYzAtMy4xNTUsMi41NTgtNS43MTQsNS43MTMtNS43MTRjMS42NDQsMCwzLjEyNywwLjY5NCw0LjE3MSwxLjgwNCAgICBjMS4zMDMtMC4yNTYsMi41MjMtMC43MywzLjYzLTEuMzg3Yy0wLjQzLDEuMzM1LTEuMzMzLDIuNDU0LTIuNTE2LDMuMTYyYzEuMTU3LTAuMTM4LDIuMjYxLTAuNDQ0LDMuMjgyLTAuODk5ICAgIEMzNy45ODcsMTcuMzM0LDM3LjAxOCwxOC4zNDEsMzUuOTAxLDE5LjE0NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>

                <a href="#">
                    <img class="img_face" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQ5LjY1MiA0OS42NTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5LjY1MiA0OS42NTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTI0LjgyNSwyOS43OTZjMi43MzksMCw0Ljk3Mi0yLjIyOSw0Ljk3Mi00Ljk3YzAtMS4wODItMC4zNTQtMi4wODEtMC45NC0yLjg5N2MtMC45MDMtMS4yNTItMi4zNzEtMi4wNzMtNC4wMjktMi4wNzMgICAgIGMtMS42NTksMC0zLjEyNiwwLjgyLTQuMDMxLDIuMDcyYy0wLjU4OCwwLjgxNi0wLjkzOSwxLjgxNS0wLjk0LDIuODk3QzE5Ljg1NCwyNy41NjYsMjIuMDg1LDI5Ljc5NiwyNC44MjUsMjkuNzk2eiIgZmlsbD0iIzAwMDAwMCIvPgoJCQk8cG9seWdvbiBwb2ludHM9IjM1LjY3OCwxOC43NDYgMzUuNjc4LDE0LjU4IDM1LjY3OCwxMy45NiAzNS4wNTUsMTMuOTYyIDMwLjg5MSwxMy45NzUgMzAuOTA3LDE4Ljc2MiAgICAiIGZpbGw9IiMwMDAwMDAiLz4KCQkJPHBhdGggZD0iTTI0LjgyNiwwQzExLjEzNywwLDAsMTEuMTM3LDAsMjQuODI2YzAsMTMuNjg4LDExLjEzNywyNC44MjYsMjQuODI2LDI0LjgyNmMxMy42ODgsMCwyNC44MjYtMTEuMTM4LDI0LjgyNi0yNC44MjYgICAgIEM0OS42NTIsMTEuMTM3LDM4LjUxNiwwLDI0LjgyNiwweiBNMzguOTQ1LDIxLjkyOXYxMS41NmMwLDMuMDExLTIuNDQ4LDUuNDU4LTUuNDU3LDUuNDU4SDE2LjE2NCAgICAgYy0zLjAxLDAtNS40NTctMi40NDctNS40NTctNS40NTh2LTExLjU2di01Ljc2NGMwLTMuMDEsMi40NDctNS40NTcsNS40NTctNS40NTdoMTcuMzIzYzMuMDEsMCw1LjQ1OCwyLjQ0Nyw1LjQ1OCw1LjQ1N1YyMS45Mjl6IiBmaWxsPSIjMDAwMDAwIi8+CgkJCTxwYXRoIGQ9Ik0zMi41NDksMjQuODI2YzAsNC4yNTctMy40NjQsNy43MjMtNy43MjMsNy43MjNjLTQuMjU5LDAtNy43MjItMy40NjYtNy43MjItNy43MjNjMC0xLjAyNCwwLjIwNC0yLjAwMywwLjU2OC0yLjg5NyAgICAgaC00LjIxNXYxMS41NmMwLDEuNDk0LDEuMjEzLDIuNzA0LDIuNzA2LDIuNzA0aDE3LjMyM2MxLjQ5MSwwLDIuNzA2LTEuMjEsMi43MDYtMi43MDR2LTExLjU2aC00LjIxNyAgICAgQzMyLjM0MiwyMi44MjMsMzIuNTQ5LDIzLjgwMiwzMi41NDksMjQuODI2eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
