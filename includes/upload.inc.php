<?php
/**
 * Upload de arquivos
 */

if ( isset($_FILES['arquivo'])){

    $nomearquivo = $_FILES['arquivo']['name'];
    $tipo = $_FILES['arquivo']['type'];
    $tmpname = $_FILES['arquivo']['tmp_name'];
     $tamanho = $_FILES['arquivo']['size'];

     $destino = "../tmp/";

     if (move_uploaded_file($tmpname, $destino . $nomearquivo)) {
          echo "<div class='well bg-success'>
                   Arquivo enviado com sucesso.
                 </div>";   

     } else {
        echo "<div class='well bg-danger'>
                  Erro ao tentar enviar o arquivo via upload.
              </div>";   
     }
}


?>

<div class="container">
<div class="jumbotron">
  <h1>Upload de arquivo</h1>
  <p>Enviar arquivos para este servidor</p>
</div>

<div class="row">
    <div class="col-8">

    <div class="">
        <form name="uploadform" 
            enctype="multipart/form-data" 
            action="#"
            method="post">

            <input type="file" name="arquivo" id="arquivo">
            <input type="submit" value="Enviar">
        </form>
    </div>
    </div>

    <div class="col-4">
        <img class="img-thumbnail" src="<?=$destino.$nomearquivo?>" width="100">
    </div>

    </div>
</div>