<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: login.php");
}
if($_SESSION['rol'] != 3) {
  header('Location: ../../../index.php');
}
 ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/icon.png">

    <title>Univeylandia - Gestió</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- Estils custom -->
    <link href="/css/styleGestio.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow justify-content-between">
      <a class="navbar-brand col-sm-4 col-md-2 mr-0" href="../../index.php">Univeylandia - Gestió</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#"><span data-feather="user"></span>
            <?php echo $_SESSION['username']?>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="/logout.php"><span data-feather="log-out"></span>
            Tancar sessió
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 bg-light sidebar collapse show" id="sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="../../index.php">
                  <span data-feather="home"></span>
                  Inici
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu0">
                  <span data-feather="users"></span>
                  Gestionar Empleats
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse" id="submenu0" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="../../gestioEmpleat/crearEmpleat.php"><span data-feather="user-plus"></span>Crear Empleat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioEmpleat/"><span data-feather="file-text"></span>Llistar Empleats</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioEmpleat/"><span data-feather="edit"></span>Modificar Empleat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioEmpleat/"><span data-feather="user-minus"></span>Eliminar Empleat</a>
                </li>
              </ul>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu1">
                  <span data-feather="users"></span>
                  Gestionar Clients
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse" id="submenu1" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="../../gestioClient/crearClient.php"><span data-feather="user-plus"></span>Crear Client</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="../../gestioClient/llistarClients.php"><span data-feather="file-text"></span>Llistar Clients</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="../../gestioClient/modificarClient.php"><span data-feather="edit"></span>Modificar Client</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="../../gestioClient/eliminarClient.php"><span data-feather="user-minus"></span>Eliminar Client</a>
                </li>
              </ul>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu3">
                  <span data-feather="trending-down"></span>
                  Gestionar Atraccions
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse" id="submenu3" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioAtraccio/"><span data-feather="plus-square"></span>Crear Atracció</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioAtraccio/"><span data-feather="file-text"></span>Llistar Atraccions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioAtraccio/"><span data-feather="edit"></span>Modificar Atracció</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioAtraccio/"><span data-feather="minus-square"></span>Eliminar Atracció</a>
                </li>
              </ul>

              <li class="nav-item">
                <a class="nav-link active" data-toggle="collapse" aria-expanded="true" href="#submenu4">
                  <span data-feather="briefcase"></span>
                  Gestionar Hotel
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse show" id="submenu4" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu1">
                    <span data-feather="star"></span>
                    Gestionar Habitacions
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>

                  <ul class="nav flex-column collapse" id="sub-submenu1" data-parent="#submenu4">
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../habitacio/inserirHabitacio.php"><span data-feather="star"></span>Inserir Habitacions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2"  href="../habitacio/eliminarHabitacio.php"><span data-feather="star"></span>Eliminar Habitacions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2"  href="../habitacio/modificarHabitacio.php"><span data-feather="star"></span>Modificar Habitacions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2"  href="../habitacio/consultarHabitacio.php"><span data-feather="star"></span>Consultar Habitacions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2"  href="../habitacio/llistarHabitacio.php"><span data-feather="star"></span>Llistar Habitacions</a>
                    </li>
                  </ul>

                <li class="nav-item">
                  <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu3">
                    <span data-feather="book-open"></span>
                    Gestionar Reserves Habitacions
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>

                <ul class="nav flex-column collapse" id="sub-submenu3" data-parent="#submenu4">
                    <li class="nav-item">
                      <a class="nav-link nav-interior2"  href="../reservaHabitacio/inserirReservaHabitacio.php"><span data-feather="star"></span>Inserir Reserva Hab</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaHabitacio/eliminarReservaHabitacio.php"><span data-feather="star"></span>Eliminar Reserva Hab</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaHabitacio/modificarReservaHabitacio.php"><span data-feather="star"></span>Modificar Reserva Hab</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2 active" href="../reservaHabitacio/consultarReservaHabitacio.php"><span data-feather="star"></span>Consultar Reserva Hab</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaHabitacio/llistarReservaHabitacio.php"><span data-feather="star"></span>Llistar Reserva Hab</a>
                    </li>
                </ul>

                <li class="nav-item">
                  <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu2">
                    <span data-feather="coffee"></span>
                    Gestionar Restaurant
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>

                <ul class="nav flex-column collapse" id="sub-submenu2" data-parent="#submenu4">
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="../restaurant/inserirTaula.php"><span data-feather="star"></span>Inserir Taula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="../restaurant/eliminarTaula.php"><span data-feather="star"></span>Eliminar Taula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="../restaurant/modificarTaula.php"><span data-feather="star"></span>Modificar Taula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2"  href="../restaurant/consultarTaula.php"><span data-feather="star"></span>Consultar Taula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2"  href="../restaurant/llistarTaula.php"><span data-feather="star"></span>Llistar Taula</a>
                  </li>
                </ul>

                <li class="nav-item">
                  <a class="nav-link nav-interior active" data-toggle="collapse" aria-expanded="true" href="#sub-submenu4">
                    <span data-feather="book-open"></span>
                    Gestionar Reserves Restaurant
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>

                <ul class="nav flex-column collapse show" id="sub-submenu4" data-parent="#submenu4">
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaRestaurant/inserirReservaTaula.php"><span data-feather="star"></span>Inserir Reserva Taula</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaRestaurant/eliminarReservaTaula.php"><span data-feather="star"></span>Eliminar Reserva Taula</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaRestaurant/modificarReservaTaula.php"><span data-feather="star"></span>Modificar Reserva Taula</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2 active" href="../reservaRestaurant/consultarReservaTaula.php"><span data-feather="star"></span>Consultar Reserva Taula</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-interior2" href="../reservaRestaurant/llistarReservaTaula.php"><span data-feather="star"></span>Llistar Reserva Taula</a>
                    </li>
                </ul>
                </ul>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu5">
                  <span data-feather="alert-triangle"></span>
                  Gestionar Incidències
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse" id="submenu5" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioIncidencia/"><span data-feather="plus-square"></span>Crear Inicidència</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioIncidencia/"><span data-feather="file-text"></span>Llistar Inicidències</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioIncidencia/"><span data-feather="edit"></span>Modificar Inicidència</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior" href="#../../gestioIncidencia/"><span data-feather="minus-square"></span>Eliminar Inicidència</a>
                </li>
              </ul>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu6">
                  <span data-feather="truck"></span>
                  Gestionar Serveis
                  <span data-feather="chevron-right"></span>
                </a>
              </li>
              <ul class="nav flex-column collapse" id="submenu6" data-parent="#sidebar">
                <li class="nav-item">
                  <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu4">
                    <span data-feather="trash-2"></span>
                    Gestionar Neteja
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>
                <ul class="nav flex-column collapse" id="sub-submenu4" data-parent="#submenu6">
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/neteja/"><span data-feather="plus-square"></span>Crear Tasca Neteja</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/neteja/"><span data-feather="file-text"></span>Llistar Tasques Neteja</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/neteja/"><span data-feather="edit"></span>Modificar Tasca Neteja</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/neteja/"><span data-feather="minus-square"></span>Eliminar Tasca Neteja</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/neteja/"><span data-feather="user-plus"></span>Assignar Tasca Neteja</a>
                  </li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu5">
                    <span data-feather="settings"></span>
                    Gestionar Manteniment
                    <span data-feather="chevron-right"></span>
                  </a>
                </li>
                <ul class="nav flex-column collapse" id="sub-submenu5" data-parent="#submenu6">
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/manteniment/"><span data-feather="plus-square"></span>Crear Tasca Manteniment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/manteniment/"><span data-feather="file-text"></span>Llistar Tasques Manteniment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/manteniment/"><span data-feather="edit"></span>Modificar Tasca Manteniment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/manteniment/"><span data-feather="minus-square"></span>Eliminar Tasca Manteniment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-interior2" href="#../../gestioServei/manteniment/"><span data-feather="user-plus"></span>Assignar Tasca Manteniment</a>
                  </li>
                </ul>
              </ul>


            </ul>
          </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Consultar Reserves Restaurant</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">
                  <span data-feather="save"></span>
                  Exportar
                </button>
              </div>
            </div>
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <!-- Posades al final del document per a que carregui més ràpid -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <!-- Icones Feather -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
