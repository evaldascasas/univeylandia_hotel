<?php
include_once $_SERVER['DOCUMENT_ROOT']."/php/connection.php";

class Taula {

    private $idTaula;
    private $numeroCadires;
    private $numTaula;

    function __construct2($numTaula,$numeroCadires) {
        $this->numTaula = $numTaula;
        $this->numeroCadires = $numeroCadires;
    }

    function setIdTaula($idTaula) {
        $this->idTaula = $idTaula;
    }

    function setNumeroCadires($numeroCadires) {
        $this->numeroCadires = $numeroCadires;
    }

    function setNumTaula($numTaula) {
        $this->numTaula = $numTaula;
    }

    function getIdTaula() {
        return $this->idTaula;
    }

    function getNumeroCadires() {
        return $this->numeroCadires;
    }

    function getNumTaula() {
        return $this->numTaula;
    }

    public function inserirTaula() {
        //conexio a  la base de dades

      try
    {
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      $conn = createConnection();

      $sql = "INSERT INTO TAULA (numero_taula, numero_cadires) VALUES (?,?)";

      $stmt = $conn->prepare($sql);

      $stmt->bind_param("ii",$this->numTaula,$this->numeroCadires);

      if($stmt->execute())
      {
        //Cerramos la conexión y la sentencia
        $stmt->close();
        $conn->close();
        //Retornamos true, consulta satisfactoria
        return true;
      }
      //Sino surgió algún error y retornamos una cadena de error.
      else
      {
        $stmt->close();
        $conn->close();
        return 'Error en el INSERT';
      }
      //Si surge alguna excepción la capturamos e imprimimos,
      //retornamos false
    }
    catch (Exception $e)
    {
      echo $e;
      $stmt->close();
      $conn->close();
      return false;
    }
    $conn->close();
  }

  public static function llistar(){

  }
}
