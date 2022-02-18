<?php
  include_once("../view/header.php");
  include_once("../model/conexao.php");
  include_once("../model/usuariomodel.php");
?>

<link rel="stylesheet"href="css/style.css">


<div class="centroform">
<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Email do usuario</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="codigoUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email do Usuário">
    </div>
  </div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
    </tr>
  </thead>
  <tbody>
<?php
  $codigousu = isset($_POST["codigoUsu"])? $_POST["codigoUsu"] : "";
  if($codigousu){

  $dado = visuUsuarioCodigo($conn,$codigousu);
  foreach ($dado as $codigoUsuarios):
    
?>
    <tr>
      <th scope="row"><?php echo($codigoUsuarios)["idusu"]?></th>
      <td><?=$codigoUsuarios["nomeusu"]?></td>
      <td><?=$codigoUsuarios["emailusu"]?></td>
      <td><?=$codigoUsuarios["foneusu"]?></td>
    </tr>
  
    <?php
  endforeach;
    }
    ?>
  
</table>
</div>