<?php
//include_once(class_persona.php);
include_once $_SERVER['DOCUMENT_ROOT']."/php/connection.php";

class Client{
  /*Atributs*/
  private $id;
  private $nom;
  private $cognom;
  private $cognom2;
  private $email;
  private $pass;
  private $data;
  private $adreca;
  private $ciutat;
  private $provincia;
  private $codi_postal;
  private $tipus_doc;
  private $num_doc;
  private $sexe;
  private $tlf;
  private $rol;
  private $actiu;
  private $id_dades_empleat;

  /* CONSTRUCTORS */
  function __construct() {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'.$num;
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }

  function __construct2($email, $pass)
  {
    $this->email = $email;
    $this->pass = $pass;
  }

  /* CONSTRUCTOR PER A QUAN CREEM UN USUARI DES DE ADMINISTRACIO */
  function __construct13($nom, $cognom, $cognom2, $tipus_doc, $num_doc, $data, $sexe, $tlf, $email, $adreca, $ciutat, $provincia,$codi_postal) {
   $this->id = NULL;
   $this->nom = $nom;
   $this->cognom = $cognom;
   $this->cognom2 = $cognom2;
   $this->tipus_doc = $tipus_doc;
   $this->num_doc = $num_doc;
   $this->data = $data;
   $this->sexe = $sexe;
   $this->tlf = $tlf;
   $this->email = $email;
   $this->adreca = $adreca;
   $this->ciutat = $ciutat;
   $this->provincia = $provincia;
   $this->rol = '1';
   $this->actiu = '0';
   $this->pass = password_hash("alumne", PASSWORD_DEFAULT); //ENCRIPTAR CONTRASSENYA PER DEFECTE
   $this->codi_postal = $codi_postal;  //NPI de si deixar el codi o no
   //$this->id_dades_empleat = '0';
  }

  /* GETTERS */
  public function getNom()
  {
   return $this->nom;
  }

  public function getCognom()
  {
   return $this->cognom;
  }

  public function getData()
  {
   return $this->data;
  }

  public function getEmail()
  {
   return $this->email;
  }

  public function getPass()
  {
   return $this->pass;
  }


  /* SETTERS */
  public function setNom($nom)
  {
   $this->nom = $nom;
  }

  public function setCognom($cognom)
  {
   $this->cognom = $cognom;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function setEmail ($email)
  {
    $this->email = $email;
  }

  public function setPass($pass)
  {
    $this->pass = $pass;
  }

  /* MÈTODES */

  public function crearClient()
  {
    //try
    //{

      $conn = createConnection();
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      $sql = "INSERT INTO USUARI (id_usuari, nom, cognom1, cognom2, email, password, data_naixement, adreca, ciutat, provincia, codi_postal,
        tipus_document, numero_document, sexe, telefon, id_rol, actiu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

      $stmt = $conn->prepare($sql);

      if($stmt==false){
        var_dump($stmt);
        die("Secured");
      }

      $resultBP = $stmt->bind_param("isssssssssisssiii",$this->id, $this->nom, $this->cognom, $this->cognom2, $this->email, $this->pass, $this->data,
      $this->adreca, $this->ciutat, $this->provincia, $this->codi_postal, $this->tipus_doc, $this->num_doc, $this->sexe, $this->tlf, $this->rol, $this->actiu);

      if($resultBP==false) {
        var_dump($stmt);
        die("Secured2");
      }

      $resultEx = $stmt->execute();

      if($resultEx==false) {
        var_dump($stmt);
        die("Secured3");
      }

      $stmt->close();
      $conn->close();
  }


  public function validarLogin()
  {
    $conn = createConnection();

    $sql = "SELECT id_usuari, id_rol, password, email FROM USUARI WHERE email=? AND id_rol=1 AND actiu=1";
    //$sql = "SELECT password FROM USUARI WHERE email=? AND id_rol='1' ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s",$this->email);

    $stmt->execute();

    $result = $stmt->get_result();

    /* now you can fetch the results into an array - NICE */
    while ($row = $result->fetch_assoc()) {
        // use your $myrow array as you would with any other fetch
        var_dump($row['id_usuari'], $row['id_rol'], $row['email']);
        $username = $row['email'];
        $userID = $row['id_usuari'];
        $rol = $row['id_rol'];
        $hash = $row['password'];

    }

    //$stmt->bind_result($hash);

    //$stmt->fetch();

    $isValid = password_verify($this->pass, $hash);

    if ($isValid)
    {
      echo 'VALID';
      session_start();

      if (array_key_exists('remember', $_POST)) {
          // Crear una nova cookie de sessió que expira en 7 dies
          setcookie('idu', $username, time() + 7 * 24 * 60 * 60);
          //Reemplaçar el ID de la sessio actual amb una nova i mantenir la informació de la sessio actual
          session_regenerate_id(true);
      } elseif (!$_POST['remember']) {
          //Si hi ha una COOKIE creada, atrassar-la en el temps per a que la elimine
          if (isset($_COOKIE['idu'])) {
              $past = time() - 100;
              setcookie(idu, gone, $past);
          }
      }

      $_SESSION['id_usuari'] = $userID; //$row['id_usuari'];
      $_SESSION['username'] = $username; //$row['email'];
      $_SESSION['rol'] = $rol;//$row['id_rol'];

      echo $_SESSION['username'], $_SESSION['id_usuari'], $_SESSION['rol'];

      return true;
    }
    else
    {
      //echo 'NO VALID';
      return false;
    }
    $conn->close();
  }

  public static function cercarDadesClient($email)
  {
    try {
        $conn = createConnection();

        if ($conn->connect_error) {
            die("Connexió fallida: " . $conn->connect_error);
        }

        $sql = "SELECT nom, cognom1, cognom2, data_naixement, adreca, ciutat FROM USUARI WHERE email='$email'";

        $result = $conn->query($sql);

        if(!$result) {
          throw new Exception();
        }

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nom = $row['nom'];
                $cognom1 = $row['cognom1'];
                $cognom2 = $row['cognom2'];
                $data_naixement = $row['data_naixement'];
                $adreca = $row['adreca'];
                $ciutat = $row['ciutat'];

                echo '<li class="list-group-item"><strong>Nom: </strong>'.$nom.'</li>';
                echo '<li class="list-group-item"><strong>Cognoms: </strong>'.$cognom1.' '.$cognom2.'</li>';
                echo '<li class="list-group-item"><strong>Data naixement: </strong>'.$data_naixement.'</li>';
                echo '<li class="list-group-item"><strong>Adreça: </strong>'.$adreca.'</li>';
                echo '<li class="list-group-item"><strong>Ciutat: </strong>'.$ciutat.'</li>';

            }
        } else {
            echo '';
        }
        $conn->close();
      }
      catch (Exception $e) {
        echo 'Error al realitzar la consulta.';
      }

  }

}

 ?>
