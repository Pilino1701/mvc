<div class="row container">
  <div class="col s12">
    <h3 class="light">Página de Ediçâo de Registros</h3>
  </div>

  <div class="col s12">
  	<form action="?router=Site/alterar/" method="post">

  	<?php foreach($editarForm as $registro):?>
     <!--<p> <?php echo $registro['nome'];?></p>-->
     <input type="hidden" name="id" value="<?php echo $registro['id'];?>" required>
     <div class="input-field col s12 m6">
      	<input type="text" name="nome" id="nome" value="<?php echo $registro['nome'];?>" required>
      	<label for="nome">Digite o Seu Nome</label>
      </div>

      <div class="input-field col s12 m6">
      	<input type="email" name="email" id="email" value="<?php echo $registro['email'];?>"  required>
      	<label for="email">Digite o Seu e-mail</label>
      </div>

      <div class="input-field col s12">
      	<input type="submit" value="Salvar Alteracoes" class="btn-small">
      	<input type="reset" value="Limpar" class="btn-small red">
      </div>

  	<?php endforeach;?>
   </form>

  </div>