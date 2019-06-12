<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');?>

<div class="mx-auto mt-5 mb-5"  style="width: 500px;">
  <form>
    <div class="form-group row">
      <label for="exampleInputEmail1">Nome do deck: </label>
      <input type="text" class="form-control" name="nome-deck" placeholder="Entre com o nome do Deck">
      <small id="emailHelp" class="form-text text-muted">Escolha um nome para o seu deck.</small>
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
  </form>
</div>
<?php include('../../inc/footer.php');?>