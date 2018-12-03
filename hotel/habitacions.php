<!DOCTYPE html>
<html lang="es">
<head>
  <title>Parc Atraccions Univeylandia</title>
  <link rel="icon" href="../img/icon.png" type="image/gif">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body id="body" onload="myFunction2()">
  <nav class="navbar navbar-expand-sm py-0">
    <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../miniJocs/miniJuegos.php">Mini jocs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Idioma      </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">ES</a></li>
            <li><a class="dropdown-item" href="#">CA</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../img/mapa_parc.jpg">Mapa</a>
        </li>
      <li>
        <a class="nav-link" href="../login.php">Login</a>
      </li>
      </ul>
    </div>
  </nav>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-4">
    <a class="navbar-brand" href="../Hotel/index.php">Univeilandia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Parc      </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../noticies/noticies_1.php">Noticies</a></li>
            <li><a class="dropdown-item" href="../promocions.php">Promocions</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Atraccions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hotel      </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../hotel/habitacions.php">Habitacions</a></li>
            <li><a class="dropdown-item" href="../hotel/restaurant.php">Restaurants</a></li>
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

<!-- SLIDER-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/habitacio1.jpg" alt="First slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/habitacio2.jpg" alt="Second slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/habitacio3.jpg" alt="Third slide" style="height:100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FI SLIDER -->
<div class="container" style=width:100%>
<div class="row p-3 mb-2 bg-light text-darke" >
  <div class="col-sm-5 py-5 px-5">
    <img class="py-3 px-3" src="../img/familiar.jpg" style="width:100%" >
    <img class="py-3 px-3"src="../img/familiar2.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <h1>Familiar</h1>
    <p>
      Habitacions familiars dúplex de 25 m² amb capacitat per a quatre persones, ideals per a viatges en família o el client que desitja combinar treball i descans en ambients separats. Distribuïdes en dos nivells, disposen d'un saló d'estar equipat amb sofà-llit a la planta inferior i zona dormitori a la planta superior. Algunes habitacions també disposen de terrassa privada.
    </p>
    <ul class="list-unstyled">
      <li>Detalls de l'habitació:
        <ul>
          <li>Llit doble o twin</li>
          <li>Bany de marbre amb banyera</li>
          <li>Sala d'estar</li>
          <li>Sofá-llit</li>
          <li>Televisio pantalla plana</li>
          <li>Terrassa privada</li>
          <li>Acces Wifi gratuit</li>
        </ul>
      </li>
    </ul>

      <p>Totes les habitacions i apartaments de l'Hotel Univeylandia ofereixen servei d'habitacions 24 hores, canals de televisió via satèl·lit i Canal Plus, telèfon directe, minibar, caixa de seguretat, servei de bugaderia i planxa, assecador de cabell i amenities de bany.
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
  </div>
</div>
</div>
<div class="container" style=width:100%>
<div class="row p-3 mb-2 bg-light text-darke" >
  <div class="col-sm-5 py-5 px-5">
    <img class="py-3 px-3" src="../img/suite.jpg" style="width:100%" >
    <img class="py-3 px-3"src="../img/suite2.jpg" style="width:100%" >
      <img class="py-3 px-3"src="../img/suite 3.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <h1>Suite</h1>
    <p>
Exclusiva habitació que es caracteritza pel seu ambient elegant amb acurada decoració, peces d'art i una seductora zona de descans equipada amb sofà. Ideal per a una tranquil·la estada de negocis o plaer.    </p>
    <ul class="list-unstyled">
      <li>Detalls de l'habitació:
        <ul>
          <li>Llit doble o twin</li>
          <li>Bany de marbre amb banyera</li>
          <li>Barnús i sabatilles</li>
          <li>Sofá</li>
          <li>2 pantalles planes LCD</li>
          <li>Acces Wifi gratuit</li>
        </ul>
      </li>
    </ul>

      <p>Totes les habitacions i apartaments de l'Hotel Univeylandia ofereixen servei d'habitacions 24 hores, canals de televisió via satèl·lit i Canal Plus, telèfon directe, minibar, caixa de seguretat, servei de bugaderia i planxa, assecador de cabell i amenities de bany.
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
  </div>
</div>
</div>
<div class="container" style=width:100%>
<div class="row p-3 mb-2 bg-light text-darke" >
  <div class="col-sm-5 py-5 px-5">
    <img class="py-3 px-3" src="../img/deluxe.jpg" style="width:100%" >
    <img class="py-3 px-3"src="../img/deluxe2.jpg" style="width:100%" >
    <img class="py-3 px-3"src="../img/deluxe3.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <h1>Deluxe</h1>
    <p>
      Acollidores habitacions dobles de 20 m² per a una experiència de confort en parella. Disposen de terrassa privada, per gaudir de vetllades a l'aire lliure amb vista sobre el tranquil jardí interior i piscina de l'hotel.    </p>
    <ul class="list-unstyled">
      <li>Detalls de l'habitació:
        <ul>
          <li>Llit doble o twin</li>
          <li>Bany de marbre amb banyera</li>
          <li>Sala d'estar</li>
          <li>Sofá-llit</li>
          <li>Televisio pantalla plana</li>
          <li>Piscina privada exterior per a 2 persones</li>
          <li>Acces Wifi gratuit</li>
        </ul>
      </li>
    </ul>

      <p>Totes les habitacions i apartaments de l'Hotel Univeylandia ofereixen servei d'habitacions 24 hores, canals de televisió via satèl·lit i Canal Plus, telèfon directe, minibar, caixa de seguretat, servei de bugaderia i planxa, assecador de cabell i amenities de bany.
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
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
