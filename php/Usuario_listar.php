<?php
    include_once "Usuario.php";
    session_start();
    header( "refresh:1");
    
    if (isset($_GET['nome']) &&
        isset($_GET['email']) &&
        isset($_GET['senha'])){
            $usr=new Usuario($_GET['nome'],$_GET['email'],$_GET['senha']);
        }else{
            $usr=null;
        }

    if (!isset($arrayUSR)){
        $arrayUSR=array();
    }
    if(isset($_SESSION['usrlist'])){
        $arrayUSR=$_SESSION['usrlist'];
    }

    if ( isset($usr)){
        array_push($arrayUSR , $usr);
        $_SESSION['usrlist']=$arrayUSR;
        
    }
    echo "<table>";
    echo "<th> <td> id </td> ";
    echo "     <td> nome</td> ";
    echo "     <td> email</td> ";
    echo "     <td> senha</td> ";
    echo "</th>";
    for ($i=count($arrayUSR)-1;$i>=0;$i--){
        echo "<tr> <td>".$arrayUSR[$i]->id . "</td> ";
        echo "     <td>".$arrayUSR[$i]->nome . "</td> " ;
        echo "     <td>".$arrayUSR[$i]->email . "</td> ";
        echo "     <td>".$arrayUSR[$i]->senha . "</td> ";
        echo "</tr>";
    }
    echo "</table> ";


?>