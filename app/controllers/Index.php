<?php
    class Index extends MainController{

        public function __construct(){
        }

        public function index(){

            $parameters = [
                'title' => 'Bienvenidos a mi sitio web'
            ];

            $this->view('pages/index', $parameters);
        }

        public function article(){
            echo "MOSTRAR ARTICULOS";
        }
    }
?>