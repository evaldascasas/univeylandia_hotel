<?php
include_once $_SERVER['DOCUMENT_ROOT']."/php/connection.php";

class Habitacio
{
    private $idHab;
    private $numHab;
    private $tipusHab;

    /* CONSTRUCTORS */
    public function __construct()
    {
        $args = func_get_args();
        $num = func_num_args();
        $f='__construct'.$num;
        if (method_exists($this, $f)) {
            call_user_func_array(array($this,$f), $args);
        }
    }

    /* Constructor BUIT */
    public function __construct0()
    {
    }

    public function __construct2($numHab, $tipusHab)
    {
        $this->numHab = $numHab;
        $this->tipusHab = $tipusHab;
    }

    /* GETTERS */
    public function getIdHab()
    {
        return $this->idHab;
    }

    public function getNumHab()
    {
        return $this->numHab;
    }

    public function getTipusHab()
    {
        return $this->tipusHab;
    }

    /* SETTERS */
    public function setNumHab($numHab)
    {
        $this->numHab = $numHab;
    }

    public function setTipusHab($tipusHab)
    {
        $this->tipusHab = $tipusHab;
    }

    /* MÈTODES */
    public function crearHabitacio()
    {
        try {
          $conn = createConnection();

          if ($conn->connect_error) {
              die("Connexió fallida: " . $conn->connect_error);
          }

          $sql = "INSERT INTO HABITACIO (num_habitacio, id_tipus_habitacio) VALUES (?,?)";

          $stmt = $conn->prepare($sql);

          if ($stmt==false) {
              //var_dump($stmt);
              //die("Secured: Error al introduir el registre.");
              throw new Exception();
          }

          $resultBP = $stmt->bind_param("si", $this->numHab, $this->tipusHab);

          if ($resultBP==false) {
              //var_dump($stmt);
              //die("Secured2: Error al introduir el registre.");
              throw new Exception();
          }

          $resultEx = $stmt->execute();

          if ($resultEx==false) {
              //var_dump($stmt);
              //die("Secured3: Error al introduir el registre.");
              throw new Exception();
          }
          echo '<script>alert("Registre introduit.");</script>';
          $stmt->close();
          $conn->close();
        }
        catch (Exception $e) {
          echo '<script>alert("Error al introduir el registre.");</script>';
        }
    }

    /* Mètode que depen de la classe, no d'un objecte */
    public static function llistarHabitacio()
    {
      try {
        $conn = createConnection();

        if ($conn->connect_error) {
            die("Connexió fallida: " . $conn->connect_error);
        }

        $sql = "SELECT HABITACIO.id_habitacio, HABITACIO.num_habitacio, HABITACIO.id_tipus_habitacio, TIPUS_HABITACIO.nom_tipus_habitacio FROM HABITACIO, TIPUS_HABITACIO WHERE HABITACIO.id_tipus_habitacio = TIPUS_HABITACIO.id_tipus_habitacio GROUP BY HABITACIO.id_habitacio";

        $result = $conn->query($sql);

        if(!$result) {
          throw new Exception();
        }

        if ($result->num_rows > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered table-hover table-sm">';
            echo '<thead class="thead-light">';
            echo '<tr>';
            //echo '<th>ID</th>';
            echo '<th>Número habitació</th>';
            echo '<th>Tipus habitació</th>';
            echo '</tr>';
            echo '</thead>';

            while ($row = $result->fetch_assoc()) {
                $id_hab = $row['id_habitacio'];
                $num_hab = $row['num_habitacio'];
                $id_tipus_hab = $row['id_tipus_habitacio'];
                $tipus_hab = $row['nom_tipus_habitacio'];

                echo '<tbody>';
                echo '<tr>';
                echo '<td style="display:none;">'.$id_hab.'</td>';
                echo '<td>'.$num_hab.'</td>';
                echo '<td>'.$tipus_hab.'</td>';
                echo '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalModificar'.$id_hab.'">Modificar</button></td>';
                echo '<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ModalEliminar'.$id_hab.'">Eliminar</button></td>';
                echo '</tr>';
                echo '</tbody>';

                /* MODAL PER MODIFICAR */
                echo '<!-- Modal -->';
                echo '<div class="modal fade" id="modalModificar'.$id_hab.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                echo '    <div class="modal-content">';
                echo '      <div class="modal-header">';
                echo '        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Habitació</h5>';
                echo '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '          <span aria-hidden="true">&times;</span>';
                echo '        </button>';
                echo '      </div>';
                echo '      <div class="modal-body">';
                echo '        <div class="container">';
                echo '          <form method="post">';
                echo '            <div class="form-row">';
                echo '              <div class="col-md-12 mb-3" style="display: none;">';
                echo '                <input class="form-control" type="text" value="'.$id_hab.'" name="id_hab">';
                echo '              </div>';
                echo '              <div class="col-md-12 mb-3">';
                echo '                <label for="num_habitacio">Número habitació</label>';
                echo '                <input disabled class="form-control" type="text" value="'.$num_hab.'" name="num_hab_mod">';
                echo '              </div>';
                echo '              <div class="col-md-12 mb-3">';
                echo '                <label for="tipus_habitacio">Tipus Habitació</label>';
                echo '                <div class="input-group">';
                echo '                  <select class="form-control form-control-sm" name="tipus_hab_mod" required>';
                include_once $_SERVER['DOCUMENT_ROOT']."/php/classes/classeHabitacio.php";
                Habitacio::llistarTipusHabitacioModificar($id_tipus_hab);
                echo '                  </select>';
                echo '                </div>';
                echo '              </div>';
                echo '            </div>';
                echo '            <input type="submit" class="btn btn-primary" name="modificar" value="Modificar">';
                echo '            <input type="button" class="btn btn-secondary" data-dismiss="modal" name="cancelar" value="Cancel·lar">';
                echo '          </form>';
                echo '        </div>';
                echo '       </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';

                /* MODAL PER ELIMINAR */
                echo '<!-- Modal -->';
                echo '<div class="modal fade" id="ModalEliminar'.$id_hab.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                echo '    <div class="modal-content">';
                echo '       <div class="modal-header">';
                echo '          <h5 class="modal-title">Atenció!</h5>';
                echo '          <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '            <span aria-hidden="true">&times;</span>';
                echo '          </button>';
                echo '       </div>';
                echo '       <div class="modal-body">';
                echo '          <div class="container">';
                echo '            <form method="post">';
                echo '              <div class="form-row">';
                echo '                <div class="col-md-12 mb-3">';
                echo '                  <div class="input-group">';
                echo '                    <input class="form-control" type="text" value="'.$id_hab.'" name="id_hab" style="display: none;">';
                echo '                    <span>Segur que vols eliminar aquesta habitació?</span>';
                echo '                  </div>';
                echo '                </div>';
                echo '              </div>';
                echo '              <input type="submit" class="btn btn-primary" name="eliminar" value="Eliminar">';
                echo '              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
                echo '            </form>';
                echo '          </div>';
                echo '       </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';

            }
            echo '</table>';
            echo '</div>';

        } else {
            echo "0 resultats";
        }
        $conn->close();
      }
      catch (Exception $e) {
        echo 'Error al realitzar la consulta.';
      }

    }

    public function llistarHabitacionsBusqueda()
    {
      try {
        $conn = createConnection();

        if ($conn->connect_error) {
            die("Connexió fallida: " . $conn->connect_error);
        }

        $filtre = $_POST['busqueda_habitacio'];

        $sql = "SELECT HABITACIO.id_habitacio, HABITACIO.num_habitacio, HABITACIO.id_tipus_habitacio, TIPUS_HABITACIO.nom_tipus_habitacio FROM HABITACIO, TIPUS_HABITACIO
        WHERE HABITACIO.id_tipus_habitacio = TIPUS_HABITACIO.id_tipus_habitacio AND (HABITACIO.num_habitacio LIKE '%$filtre%' OR TIPUS_HABITACIO.nom_tipus_habitacio LIKE '%$filtre%') GROUP BY HABITACIO.id_habitacio";

        $result = $conn->query($sql);

        if(!$result) {
          throw new Exception();
        }

        if ($result->num_rows > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered table-sm">';
            echo '<thead class="thead-light">';
            echo '<tr>';
            //echo '<th>ID</th>';
            echo '<th>Número habitació</th>';
            echo '<th>Tipus habitació</th>';
            echo '</tr>';
            echo '</thead>';

            while ($row = $result->fetch_assoc()) {
                $id_hab = $row['id_habitacio'];
                $num_hab = $row['num_habitacio'];
                $id_tipus_hab = $row['id_tipus_habitacio'];
                $tipus_hab = $row['nom_tipus_habitacio'];

                echo '<tbody>';
                echo '<tr>';
                echo '<td style="display:none;">'.$id_hab.'</td>';
                echo '<td>'.$num_hab.'</td>';
                echo '<td>'.$tipus_hab.'</td>';
                echo '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalModificar'.$id_hab.'">Modificar</button></td>';
                echo '<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ModalEliminar'.$id_hab.'">Eliminar</button></td>';
                echo '</tr>';
                echo '</tbody>';

                /* MODAL PER MODIFICAR */
                echo '<!-- Modal -->';
                echo '<div class="modal fade" id="modalModificar'.$id_hab.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                echo '    <div class="modal-content">';
                echo '      <div class="modal-header">';
                echo '        <h5 class="modal-title">Modificar Habitació</h5>';
                echo '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '          <span aria-hidden="true">&times;</span>';
                echo '        </button>';
                echo '      </div>';
                echo '      <div class="modal-body">';
                echo '        <div class="container">';
                echo '          <form method="post">';
                echo '            <div class="form-row">';
                echo '              <div class="col-md-12 mb-3" style="display: none;">';
                echo '                <input class="form-control" type="text" value="'.$id_hab.'" name="id_hab">';
                echo '              </div>';
                echo '              <div class="col-md-12 mb-3">';
                echo '                <label for="num_habitacio">Número habitació</label>';
                echo '                <input disabled class="form-control" type="text" value="'.$num_hab.'" name="num_hab_mod">';
                echo '              </div>';
                echo '              <div class="col-md-12 mb-3">';
                echo '                <label for="tipus_habitacio">Tipus Habitació</label>';
                echo '                <div class="input-group">';
                echo '                  <select class="form-control form-control-sm" name="tipus_hab_mod" required>';
                include_once $_SERVER['DOCUMENT_ROOT']."/php/classes/classeHabitacio.php";
                Habitacio::llistarTipusHabitacioModificar($id_tipus_hab);
                echo '                  </select>';
                echo '                </div>';
                echo '              </div>';
                echo '            </div>';
                echo '            <input type="submit" class="btn btn-primary" name="modificar" value="Modificar">';
                echo '            <input type="button" class="btn btn-secondary" data-dismiss="modal" name="cancelar" value="Cancel·lar">';
                echo '          </form>';
                echo '        </div>';
                echo '       </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';

                /* MODAL PER ELIMINAR */
                echo '<!-- Modal -->';
                echo '<div class="modal fade" id="ModalEliminar'.$id_hab.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                echo '  <div class="modal-dialog modal-dialog-centered modal-md" role="document">';
                echo '    <div class="modal-content">';
                echo '       <div class="modal-header">';
                echo '          <h5 class="modal-title">Atenció!</h5>';
                echo '          <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '            <span aria-hidden="true">&times;</span>';
                echo '          </button>';
                echo '       </div>';
                echo '       <div class="modal-body">';
                echo '          <div class="container">';
                echo '            <form method="post">';
                echo '              <div class="form-row">';
                echo '                <div class="col-md-12 mb-3">';
                echo '                  <div class="input-group">';
                echo '                    <input class="form-control" type="text" value="'.$id_hab.'" name="id_hab" style="display: none;">';
                echo '                    <span>Segur que vols eliminar aquesta habitació?</span>';
                echo '                  </div>';
                echo '                </div>';
                echo '              </div>';
                echo '              <input type="submit" class="btn btn-primary" name="eliminar" value="Eliminar">';
                echo '              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
                echo '            </form>';
                echo '          </div>';
                echo '       </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';

            }
            echo '</table>';
            echo '</div>';

        } else {
            echo "0 resultats";
        }
        $conn->close();
      }
      catch (Exception $e) {
        echo 'Error al realitzar la consulta.';
      }

    }

    /* Mètode modificarHabitacio --> agafa el ID del modal i modifica el registre de la BD amb aquest ID */
    public function modificarHabitacio()
    {
        $conn = createConnection();

        if ($conn->connect_error) {
            die("Connexió fallida: " . $conn->connect_error);
        }

        $id_hab_mod = $_POST['id_hab'];
        //$num_hab_mod = $_POST['num_hab_mod'];
        $tipus_hab_mod = $_POST['tipus_hab_mod'];

        $sql = "UPDATE HABITACIO SET id_tipus_habitacio=$tipus_hab_mod WHERE id_habitacio=$id_hab_mod";

        if (mysqli_query($conn, $sql)) {
            echo '<script>window.location.href = window.location.href + "?refresh";</script>';
        } else {
            echo '<script>alert("Error!");</script>';
            //echo "Error updating record: " . mysqli_error($conn);
        }
        $conn->close();
    }


    /* Mètode eliminarHabitacio --> agafa el ID del modal i elimina el registre de la BD amb aquest ID */
    public static function eliminarHabitacio()
    {
        $conn = createConnection();

        if ($conn->connect_error) {
            die("Connexió fallida: " . $conn->connect_error);
        }

        $id_hab_del = $_POST['id_hab'];

        $sql = "DELETE FROM HABITACIO WHERE id_habitacio =$id_hab_del";

        if (mysqli_query($conn, $sql)) {
            echo '<script>window.location.href = window.location.href + "?refresh";</script>';
        } else {
            echo '<script>alert("Error!");</script>';
            //echo "Error deleting record: " . mysqli_error($conn);
        }

        $conn->close();
    }


    public static function llistarTipusHabitacio()
    {
        $conn = createConnection();

        if ($conn->connect_errno) {
            die('Error en la connexió : '.$conn->connect_errno.'-'.$conn->connect_error);
        }

        $sql = "SELECT id_tipus_habitacio, nom_tipus_habitacio FROM TIPUS_HABITACIO ORDER BY id_tipus_habitacio";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_tipus_hab = $row['id_tipus_habitacio'];
                $nom_tipus_hab = $row['nom_tipus_habitacio'];
                echo '<option value="'.$id_tipus_hab.'">'.$nom_tipus_hab.'</option>';
            }
        } else {
            echo "0 resultats";
        }

        $conn->close();
    }

    /**
    *
    */
    public static function llistarTipusHabitacioModificar($id_tipus_hab)
    {
      $conn = createConnection();

      if ($conn->connect_error) {
          die('Error en la connexió : '.$conn->connect_errno.'-'.$conn->connect_error);
      }

      $sql = "SELECT id_tipus_habitacio, nom_tipus_habitacio FROM TIPUS_HABITACIO ORDER BY id_tipus_habitacio";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $id_tipus_hab_mod = $row['id_tipus_habitacio'];
            $nom_tipus_hab_mod = $row['nom_tipus_habitacio'];

            if($id_tipus_hab==$id_tipus_hab_mod) {
              echo '<option selected value="'.$id_tipus_hab_mod.'">'.$nom_tipus_hab_mod.'</option>';
            }
            else {
              echo '<option value="'.$id_tipus_hab_mod.'">'.$nom_tipus_hab_mod.'</option>';
            }

          }
      } else {
          echo "0 resultats";
      }

      $conn->close();
    }
}
