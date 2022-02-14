<?php

    include_once("../view/header.php");
    include_once("../model/conexao.php");
    include_once("../model/usuariomodel.php");
    extract($_REQUEST,EXTR_OVERWRITE);

    if(inserirusuario($conn, $nomeusu, $emailusu, $foneusu, $cpfusu, $tipousu, $cepusu, $numusu, $compleusu)){
        print("O Perfil foi cadastrado com sucesso!!");
    }else{
        print("Não foi prossivel cadastrar seus dados!!");
    }
    
    include_once("../view/footer.php");

?>