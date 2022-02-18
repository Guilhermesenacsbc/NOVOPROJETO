<?php
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

$codigousu = $_POST["codigoUsu"];

if(visuUsuarioCodigo ($conn,$codigousu)){
    header("location:../view/visuUsuCodigo.php");

}else{
    header("location:../view/visuUsuCodigo.php");
}

?>