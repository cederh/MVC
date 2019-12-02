<?php
//para verificar que inicio sesion un administrador
    function sessionAdmin(){
        //iniciamos una sesion
        session_start();
        //hacer la verificion que se inicio la sesion  y que sea el tipo de usuario correcto
        if (!isset($_SESSION['user']) || $_SESSION['user']->usu_tipo == 1) {
            //redireccionar al usuario
            header('location:'.ROUTE_URL);
        }

    }

    //para verificar que es un usuario normal

    function sessionUser(){
// ALTER TABLE `tblcliente` ADD `usu_tipo` INT NOT NULL AFTER `idusuario`;
        session_start();
        if (!isset($_SESSION['user'])) {
            header('location:'.ROUTE_URL.'/login');
        }
    }




?>
