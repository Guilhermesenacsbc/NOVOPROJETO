<?php
include_once("header.php");
?>
<div class="container">
<form class="row g-3" action="../controler/inserircadastro.php" method="GET">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomeusu"class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="emailusu" class="form-control" id="inputEmail">
  </div>
  <div class="col-4">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" name="foneusu" class="form-control" id="inputFone" placeholder="(xx) xxxxx-xxxx">
  </div>
  <div class="col-4">
    <label for="inputCpf" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="inputCpf" placeholder="xxx.xxx.xxx-xx" >
  </div>
  <div class="col-md-4">
    <label for="inputtipo" class="form-label">Tipo de Usuário</label>
    <select id="inputtipo" name="tipousu" class="form-select">
      <option selected>Escolha...</option>
      <option Value="1">Funcionario</option>
      <option Value="2">Ciente</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCep" class="form-label">CEP</label>
    <input type="text" name="cepusu" class="form-control" id="inputCep" placeholder="xxxxx-xxx">
  </div>
  <div class="col-md-2">
    <label for="inputnumero" class="form-label">N°</label>
    <input type="text" name="numusu" class="form-control" id="inputnumero">
  </div>
  <div class="col-md-8">
    <label for="inputComplemento" class="form-label">Complemento</label>
    <input type="text" name="compleusu" class="form-control" id="inputComplemento" >
  </div>
  

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceito os termos de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
<?php
    include_once("footer.php");
?>