<?php
include_once $_SERVER['DOCUMENT_ROOT']."/php/connection.php";

class Empleat {
  /*Atributs*/
  private $id_empleat;
  private $nom;
  private $cognom1;
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
  private $codi_ss;
  private $num_nomina;
  private $iban;
  private $especialitat;
  private $carrec;
  private $data_inici;
  private $data_fi;
  private $horari;

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
  function __construct23($nom, $cognom1, $cognom2, $tipus_doc, $num_doc, $data, $sexe, $tlf,
  $email, $adreca, $ciutat, $provincia, $codi_postal, $pass, $rol, $codi_ss, $num_nomina, $iban, $especialitat, $carrec, $data_inici, $data_fi, $horari) {

   $this->id_empleat = NULL;
   $this->nom = $nom;
   $this->cognom1 = $cognom1;
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
   $this->codi_postal = $codi_postal;  //NPI de si deixar el codi o no
   $this->pass = password_hash($pass, PASSWORD_DEFAULT); //ENCRIPTAR CONTRASENYA PER DEFECTE
   $this->rol = $rol;
   $this->actiu = '1';
   $this->codi_ss = $codi_ss;
   $this->num_nomina = $num_nomina;
   $this->iban = $iban;
   $this->especialitat = $especialitat;
   $this->carrec = $carrec;
   $this->data_inici = $data_inici;
   $this->data_fi = $data_fi;
   $this->horari = $horari;

  }

  public function crearEmpleat()
  {
    try
    {
        $conn = createConnection();

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $conn->autocommit(FALSE);

        $sql= "INSERT INTO DADES_EMPLEAT (codi_seg_social, num_nomina, IBAN, especialitat, carrec, data_inici_contracte, data_fi_contracte, id_horari) VALUES (?,?,?,?,?,?,?,?);";

        $stmt = $conn->prepare($sql);

        if($stmt==false){
          var_dump($stmt);
          die("Secured");
        }

        $resultBP = $stmt->bind_param("sssssssi",$this->codi_ss, $this->num_nomina, $this->iban, $this->especialitat, $this->carrec, $this->data_inici, $this->data_fi, $this->horari);

        if($resultBP==false) {
          var_dump($stmt);
          die("Secured2");
        }

        $resultEx = $stmt->execute();
        if($resultEx==false) {
          var_dump($stmt);
          die("Secured3");
        }

        $sql2= "INSERT INTO USUARI (id_usuari, nom, cognom1, cognom2, email, password, data_naixement, adreca, ciutat, provincia, codi_postal,
          tipus_document, numero_document, sexe, telefon, id_rol, actiu, id_dades_empleat) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,LAST_INSERT_ID());";

        $stmt2 = $conn->prepare($sql2);

        if($stmt2==false){
          var_dump($stmt2);
          die("Secured4");
        }

        $resultBP2 = $stmt2->bind_param("isssssssssisssiii",$this->id_empleat, $this->nom, $this->cognom1, $this->cognom2, $this->email, $this->pass, $this->data,
        $this->adreca, $this->ciutat, $this->provincia, $this->codi_postal, $this->tipus_doc, $this->num_doc, $this->sexe, $this->tlf, $this->rol, $this->actiu);

        if($resultBP2==false) {
          var_dump($stmt2);
          die("Secured5");
        }

        $resultEx2 = $stmt2->execute();
        if($resultEx2==false) {
          var_dump($stmt2);
          die("Secured6");
        }
        else {
          $msg = "S'ha afegit l'empleat correctament!";
          echo '<script>alert("'.$msg.'");</script>';
        }

        $stmt->close();
        $stmt2->close();
        $conn->autocommit(TRUE);
        $conn->close();
    }
    catch (Exception $e) {
      $conn->rollback();
      throw $e;
    }

  }

  public function validarLogin()
  {
    $conn = createConnection();

    $sql = "SELECT id_usuari, id_rol, password, email FROM USUARI WHERE email=? AND id_rol!=1 AND actiu=1";
      //$sql = "SELECT password FROM USUARI WHERE email=? AND id_rol='1' ";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s",$this->email);

    $stmt->execute();

    $result = $stmt->get_result();

      /* now you can fetch the results into an array - NICE */
    while ($row = $result->fetch_assoc()) {
        // use your $myrow array as you would with any other fetch
        //var_dump($row['id_usuari'], $row['id_rol'], $row['email']);
        $username = $row['email'];
        $userID = $row['id_usuari'];
        $rol = $row['id_rol'];
        $hash = $row['password'];
    }

    $isValid = password_verify($this->pass, $hash);

    if ($isValid)
    {
      //echo 'VALID';
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

      $_SESSION['id_usuari'] = $userID;
      $_SESSION['username'] = $username;
      $_SESSION['rol'] = $rol;

      //echo $_SESSION['username'], $_SESSION['id_usuari'], $_SESSION['rol'];

      return true;
    }
    else
    {
      //echo 'NO VALID';
      return false;
    }
    $conn->close();
  }

}


 ?>
