<?php

class Index extends MainController{

   public function __construct(){
      //sessionUser();
   }

   public function index(){

      $parameters = [
          'menu' => 'Inicio'
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
}


?>
