 
<fieldset>
 <legend>Lista de Alunos</legend>
    <form class="form" style="padding: 20px;" action="salvar.php" method="post">
         <label for="id">ID</label><br>
         <input class="form-control col-2" type="number" name="id" id="id" size="5" value="<?= $row->id ?? 0 ?>">
        
         <label for="nome">Nome</label><br>
         <input class="form-control col-6" type="text" name="nome" id="nome" size="35"  value="<?= $row->nome  ?? '' ?>">
        
         <label for="email">E-mail</label><br>
         <input class="form-control col-5" type="email" name="email" id="email" size="35"  value="<?= $row->email ?? '' ?>">        
         <label for="login">Login</label><br>
         <input class="form-control col-5" type="text" name="login" id="login" size="35"  value="<?= $row->login ?? '' ?>">        
         <label for="senha">Senha:</label><br>
         <input class="form-control col-5" type="password" name="senha" id="senha" size="35"  value="<?= $row->senha ?? '' ?>">
         
         <hr>      
         <button class="btn btn-sm btn-secondary" type="reset"><i class='far fa-2x fa-file'></i></button>
         <button class="btn btn-sm btn-success" type="submit"><i class="far fa-2x fa-save"></i></button>
    </form>
 </fieldset>