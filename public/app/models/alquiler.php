<?php
  class Alquiler {
   // Propiedades
   private $cliente;
   private $pelicula;
   private $fechaAlquiler;
   private $fechaDevolucion;

   private $ID_Modificacion;
   private $modificacion_Alquiler;

   private $busquedaPelicula;
   private $busquedaCliente;
   private $busquedaFecha;
   private $busquedaDevolucion;

   // Constructor
   public function __construct() {
      $this->cliente = $_POST['ID_Pelicula'];
      $this->pelicula = $_POST['ID_Alquiler'];
      $this->fechaAlquiler = $_POST['Fecha_Alquiler'];
      $this->fechaDevolucion = $_POST['Fecha_Devolucion'];
      $this->ID_Modificacion = $_POST['ID_Modificacion'];
      $this->modificacion_Alquiler = $_POST['modificacion_Alquiler'];

      $this->busquedaPelicula = $_POST['busquedaPelicula'];
      $this->busquedaCliente = $_POST['busquedaCliente'];
      $this->busquedaFecha = $_POST['busquedaFecha'];
      $this->busquedaDevolucion = $_POST['busquedaDevolucion'];
    
   }
   // Métodos
   public function RegistrarAlquiler() {
      require_once("../models/conexion.php");

      $sql = "INSERT INTO ALQUILERES(ID_CLIENTE,ID_PELICULA,FECHA_ALQUILER,FECHA_DEVOLUCION)
        VALUES ('$this->cliente','$this->pelicula','$this->fechaAlquiler','$this->fechaDevolucion')";
  
      if($conn->query($sql) === TRUE) {
          // Almacenar el mensaje de éxito en una variable de sesión
         return $sql;
       }}

   public function ModificacionFechaDevolucion() {
      require_once("../models/conexion.php");

      $sql = "UPDATE ALQUILERES
      INNER JOIN REGISTRO_CLIENTES ON ALQUILERES.ID_CLIENTE = REGISTRO_CLIENTES.ID
      INNER JOIN REGISTRO_PELICULAS ON ALQUILERES.ID_PELICULA = REGISTRO_PELICULAS.ID 
      SET ALQUILERES.FECHA_DEVOLUCION = '$this->modificacion_Alquiler'
      WHERE ALQUILERES.ID = '$this->ID_Modificacion'";

      $resultado = mysqli_query($conn, $sql);

      if(mysqli_affected_rows($conn) > 0) {
         return $resultado;
      } else {
     }}

   public function ObtenerAlquiler(){
      require_once("../models/conexion.php");

      $sql = "SELECT*FROM ALQUILERES WHERE ID_PELICULA = '$this->busquedaPelicula' OR ID_CLIENTE = '$this->busquedaCliente' 
      OR FECHA_ALQUILER = '$this->busquedaFecha' OR FECHA_DEVOLUCION = '$this->busquedaDevolucion'";
  
      $resultado = mysqli_query($conn, $sql);
      return mysqli_fetch_assoc($resultado);}}

      error_reporting(0);
?>