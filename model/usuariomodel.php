<?php

function inserirusuario($conn, $nomeusu, $emailusu, $foneusu, $cpfusu, $tipousu, $cepusu, $numusu, $compleusu){
 
    $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `foneusu`, `compleusu`) VALUES
     (NULL, '{$nomeusu}', '{$emailusu}','{$tipousu}', '{$cpfusu}', '{$cepusu}','{$numusu}', '{$foneusu}','{$compleusu}')";

    $dados = mysqli_query($conn,$query);
    return $dados;
}

function visuUsuarioNome($conn,$nomeusu){
    $query = "select * from tbusuario where nomeusu like '%{$nomeusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function visuUsuarioEmail($conn,$emailusu){
    $query = "select * from tbusuario where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function visuUsuarioCodigo($conn,$codigousu){
    $query = "select * from tbusuario where nomeusu like '%{$codigousu}%'";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}

?>