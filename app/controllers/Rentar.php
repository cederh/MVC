<?php

class Rentar extends MainController{

   public function __construct(){
      //sessionUser();
   }

   public function index(){

      $parameters = [
          'menu' => 'Rentar'
      ];

      $this->view('pages/rentar', $parameters);
   }

}

?>
