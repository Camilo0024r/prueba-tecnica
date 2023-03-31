<?php
  error_reporting(0);

class Cliente {
  // Propiedades
  private $nombre;
  private $apellido;
  private $email;
  private $direccion;
  private $telefono;
  private $ciudad;
  private $estado;
  private $postal;
  private $fecha_registro;

  private $busquedaAlquiler;
  private $busquedaPelicula;

  //Contructor
  public function __construct() {
    $this->nombre = $_POST['nombre'];
    $this->apellido = $_POST['apellido'];
    $this->email = $_POST['email'];
    $this->direccion = $_POST['direccion'];
    $this->telefono = $_POST['telefono'];
    $this->ciudad = $_POST['ciudad'];
    $this->estado = $_POST['estado'];
    $this->postal= $_POST['postal'];
    $this->fecha_registro = $_POST['fecha_registro'] ;

    $this->busquedaAlquiler = $_POST['busquedaAlquiler'];
    $this->busquedaPelicula = $_POST['busquedaPelicula'];

   }
  //Métodos
  public function RegistarCliente(){
    require_once("../models/conexion.php");

    $sql = "INSERT INTO REGISTRO_CLIENTES(NOMBRE,APELLIDO,EMAIL,TELEFONO,DIRECCION,CIUDAD,ESTADO,CODIGO_POSTAL,FECHA_REGISTRO)
		VALUES ('$this->nombre', '$this->apellido', '$this->email','$this->telefono','$this->direccion', '$this->ciudad', '$this->estado', '$this->postal','$this->fecha_registro')";

    if($conn->query($sql) === TRUE) {
        // Almacenar el mensaje de éxito en una variable de sesión
        header("Location: formulario_cliente.php?mensaje= <h3 style='text-align:center; color:green'>Los datos del cliente se registraron correctamente</h3>");
     }else{
       // Almacenar el mensaje de error en una variable de sesión
       header("Location: formulario_cliente.php?mensaje=Ocurrió un error al insertar los registros.");}}


  public function ObtenerHistorial(){
    require_once("../models/conexion.php");
    $sql = "SELECT*FROM ALQUILERES WHERE ID_PELICULA = '$this->busquedaPelicula'  OR FECHA_ALQUILER = '$this->busquedaAlquiler'";
    $resultado = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($resultado);}

  }
  $cliente1 = new Cliente();
  $cliente1->RegistarCliente();
?>
