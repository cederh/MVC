<?php

class Renta extends MainController{

   public function __construct(){
      //sessionUser();
   }

   public function index(){

      $parameters = [
          'menu' => 'Rentar'
      ];

      $this->view('Renta/rentar', $parameters);
   }

   public function car(){
     if ($_SERVER["REQUEST_METHOD"]=='POST') {
        $rent['recogida'] = $_POST['recogida'];
        $rent['entrega'] = $_POST['entrega'];
        $rent['dateEntrega'] = $_POST['dateEntrega'];
        $rent['datedevol'] = $_POST['datedevol'];
        $rent['hora'] = $_POST['hora'];
     }

     $parameters = [
        'menu' => 'Renta',
        'rent' => $rent
     ];

     $this->view('Renta/car', $parameters);
   }

   public function carselect(){
     if ($_SERVER["REQUEST_METHOD"]=='POST') {
        $rent['recogida'] = $_POST['recogida'];
        $rent['entrega'] = $_POST['entrega'];
        $rent['dateEntrega'] = $_POST['dateEntrega'];
        $rent['datedevol'] = $_POST['datedevol'];
        $rent['hora'] = $_POST['hora'];
     }

     $parameters = [
        'menu' => 'Renta',
        'rent' => $rent
     ];

     $this->view('Renta/carselect', $parameters);
   }

   public function payment(){
     if ($_SERVER["REQUEST_METHOD"]=='POST') {
        $rent['recogida'] = $_POST['recogida'];
        $rent['entrega'] = $_POST['entrega'];
        $rent['dateEntrega'] = $_POST['dateEntrega'];
        $rent['datedevol'] = $_POST['datedevol'];
        $rent['hora'] = $_POST['hora'];
     }

     $parameters = [
        'menu' => 'Pago',
        'rent' => $rent
     ];

     $this->view('Renta/payment', $parameters);
   }

   public function add_rent(){
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Limpiando los datos enviados por el usuario
      if ($_SERVER["REQUEST_METHOD"]=='POST') {
         $rent['recogida'] = sanitize($_POST['recogida']);
         $rent['entrega'] = sanitize($_POST['entrega']);
         $rent['dateEntrega'] = sanitize($_POST['dateEntrega']);
         $rent['datedevol'] = sanitize($_POST['datedevol']);
         $rent['hora'] = sanitize($_POST['hora']);
      }

   //    if ($this->ModelInventory->add_inventory($inventory)) {
   //       header('location: '. ROUTE_URL . '/inventory/saved');
   //    }else{
   //       echo "No se pudo guardar la informacion";
   //    }
   }
   $parameters = [
      'menu' => 'Renta',
      'rent' => $rent
   ];

   // Cargando la vista
   $this->view('Renta/car', $parameters);
  }

}

?>