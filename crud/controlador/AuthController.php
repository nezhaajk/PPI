<?php
include_once __DIR__. './../modelo/Conexao.php';
include_once __DIR__. './../modelo/Usuario.php';
include_once __DIR__. './../modelo/UsuarioDAO.php';
class AuthController{
    public function login($login, $senha){
        $dao=new UsuarioDAO();

        if(isset($_POST['email']) && isset($_POST['senha'])){
            $login=$_POST['email'];
            $senha=$_POST['senha'];
            $usr=$dao->autenticar($email);
            if (!isset($usr)){
                header("Location:rota.php?rota=home");
            }else{
                header("Location:rota.php");
            }
                
            }else{
                header("Location:rota.php");

            }

        }
    }
?>