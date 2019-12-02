<?php

class Index extends MainController{

   public function __construct(){
     $this->ModelIndex = $this->Model('ModelIndex');
      //sessionUser();
   }

   public function index(){
      $inventary = $this->ModelIndex->get_inventaries();
      $parameters = [
          'menu' => 'Inicio',
          'inventary' => $inventary
      ];

      $this->view('pages/index', $parameters);
   }

   public function preguntas(){

      $parameters = [
          'menu' => 'Preguntas'
      ];

      $this->view('pages/preguntas', $parameters);
   }

   public function ubicacion(){

      $parameters = [
          'menu' => 'Ubicacion'
      ];

      $this->view('pages/ubicacion', $parameters);
   }

   public function contactos(){

      $parameters = [
          'menu' => 'Contactos'
      ];

      $this->view('pages/contactos', $parameters);
   }

   public function login(){

      $parameters = [
          'menu' => 'Contactos'
      ];

      $this->view('pages/login', $parameters);
   }
   public function register(){

      $parameters = [
          'menu' => 'Contactos'
      ];

      $this->view('pages/register', $parameters);
   }

   public function add_client(){
         // $errores = "";
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                 //Limpiando los datos enviados por el usuario

             $client['nombre'] = $_POST['nombre'];
             $client['apellido'] = $_POST['apellido'];
             $client['correo'] = $_POST['correo'];
             $client['genero'] = $_POST['genero'];
             $client['direccion'] = $_POST['direccion'];
             $client['telefono'] = $_POST['telefono'];
             $client['dui'] = $_POST['dui'];
             $client['nit'] = $_POST['nit'];
             $client['licencia'] = $_POST['licencia'];
             $client['pass'] = $_POST['pass'];


             if ($this->ModelIndex->add_client($client)) {
                 header('location: '. ROUTE_URL . '/pages/login');

             }else{
                 echo "No se puede guardar la informacion";
             }
         }
     }

     public function add_consult(){
           // $errores = "";
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                   //Limpiando los datos enviados por el usuario

               $consult['nombre'] = $_POST['nombre'];
               $consult['apellido'] = $_POST['apellido'];
               $consult['correo'] = $_POST['correo'];
               $consult['telefono'] = $_POST['telefono'];
               $consult['mensaje'] = $_POST['mensaje'];



               if ($this->ModelIndex->add_consult($consult)) {
                   header('location: '. ROUTE_URL . '/pages/index');

               }else{
                   echo "No se puede guardar la informacion";
               }
           }
       }
}




?>
