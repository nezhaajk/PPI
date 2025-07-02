<?php
include_once __DIR__. './modelo/Conexao.php';
include_once __DIR__. './modelo/Usuario.php';
include_once __DIR__. './modelo/UsuarioDAO.php';
include_once __DIR__. './controlador/AuthCOntroller.php';
session_start();

if (isset($_GET['rota'])){
    $rota=$_GET['rota'];
}else{
    $rota="login";
} 

switch ($rota){
    case 'login':
       // header("Location:login.php");
        if(isset($_SESSION['usr'])){
            header("Location:home.php");
        }
        require "login.php";
        break;

    case 'autenticacao':
        $auth=new AuthController();
        $auth->login();
        break;
    case 'home':
         //require "home.php";
         header("Location:home.php");
        break;
    case 'logout':
        session_destroy();
        header("Location:rota.php");
        break;
    case 'cadastrar_usuario':
        if(isset($_SESSION['usr'])){
            header("Location:home.php");
        }
        //header("Location:cadastrar_usuario.php");
        break;

    default:
        echo "Rota desconhecida";
    }

?>