<?php
class Login extends MainController
{ public function __construct()
{
    //iniciamos la sesion
    session_start();
    if (isset($_SESSION['user'])) {
        header('location:'.ROUTE_URL);
    }
    $this->ModelLogin = $this->model('ModelLogin');
}
public function index(){
    $errores = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user1 = sanitize($_POST['user']);
        // print_r($_POST);
        if ($_POST['pass'] == '') {
            $pass = $_POST['pass'];
        }else{

            $pass = sanitize(hash('sha512', $_POST['pass']));
            // echo $pass;
            // die();
        }


        if($user1 == ""){
            $errores .= "<p>Por favor ingrese un usuario</p>";
        }
        if ($pass == "") {
            $errores .= "<p>Por favor ingrese el password</p>";
        }
        $user = $this->ModelLogin->login($user1, $pass);
        if (!$user) {
            if ($user1 != "" && $pass != "") {
                $errores .= "<p>Usuario o password incorrectos</p>";
                $_POST['user'] = '';
                $_POST['pass'] = '';
            }
        }else{
            //creamos un indice con el arreglo sesiones
            $_SESSION['user'] = $user;
            //redireccionamos al index de la pagina
            header('location:'.ROUTE_URL);
        }


    }
    $parameters = [
        'errores' => $errores
    ];
    $this->view('pages/login', $parameters);
}
public function logout(){
    session_destroy();
    header('location:'. ROUTE_URL);
}

}
?>
