<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');?>

<form>
  <div class="mx-auto mt-5 mb-5"  style="width: 500px;">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Senha:</label>
        <input type="password" class="form-control" name="name" placeholder="Senha">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Nome do Usuário:</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome Usuário">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nick do Usuário:</label>
      <input type="text" class="form-control" name="nick" placeholder="Nick Usuário">
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

<?php include('../../inc/footer.php');?>