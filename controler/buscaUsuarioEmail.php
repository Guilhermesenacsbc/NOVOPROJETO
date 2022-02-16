<?php
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

$emailusu = $_POST["emailUsu"];

if(visuUsuarioEmail ($conn,$emailusu)){
    header("location:../view/visuUsuEmail.php");

}else{
    header("location:../view/visuUsuEmail.php");
}

?>