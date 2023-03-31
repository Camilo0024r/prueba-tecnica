<?php
error_reporting(0);

class Pelicula {
  // Propiedades
  private $titulo;
  private $director;
  private $anio;
  private $genero;
  private $duracion;
  private $clasificacion;

  private $busquedaTitulo;
  private $busquedaDirector;
  private $busquedaGenero;
  private $busquedaClasificacion;

  //Contructor
  public function __construct(){
    $this->titulo = $_POST['titulo'];
    $this->director = $_POST['director'];
    $this->anio = $_POST['anio'];
    $this->genero = $_POST['genero'];
    $this->duracion = $_POST['duracion'];
    $this->clasificacion =  $_POST['clasificacion'];

    $this->busquedaTitulo = $_POST['busquedaTitulo'];
    $this->busquedaDirector =  $_POST['busquedaDirector'];
    $this->busquedaGenero = $_POST['busquedaGenero'];
    $this->busquedaClasificacion = $_POST['busquedaClasificacion'];
  }

  //Métodos
  public function RegistrarPelicula(){
    require_once("conexion.php");

    $sql = "INSERT INTO REGISTRO_PELICULAS (TITULO,DIRECTOR,AÑO_LANZAMIENTO, GENERO,DURACION,CLASIFICACION)
		VALUES ('$this->titulo', '$this->director', '$this->anio', '$this->genero', '$this->duracion', '$this->clasificacion')";

    if ($conn->query($sql) === TRUE) {
      // Almacenar el mensaje de éxito en una variable de sesión
      header("Location: formulario_cliente.php?mensaje= <h3 style='text-align:center; color:green'>Los datos de la pelicula se registraron correctamente</h3>");
    }else{
      // Almacenar el mensaje de error en una variable de sesión
      header("Location: formulario_cliente.php?mensaje=Ocurrió un error al insertar los registros.");
    }}

  public function ObtenerPelicula(){
    require_once("../models/conexion.php");
    $sql = "SELECT*FROM REGISTRO_PELICULAS WHERE TITULO = '$this->busquedaTitulo' OR DIRECTOR = '$this->busquedaDirector' 
    OR GENERO = '$this->busquedaGenero' OR CLASIFICACION = '$this->busquedaClasificacion'";

    $resultado = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($resultado);}

}
$pelicula1 = new Pelicula();
$pelicula1->RegistrarPelicula();
?>


