<?php
/**
 * excluir
*/
require __DIR__ . "/../includes/conexao.inc.php";

$id = $_REQUEST['id'];

$sql = "delete from usuarios where id = :id";

$stm = $pdo->prepare($sql);

$stm->bindParam(":id", $id);

$stm->execute();

header("Location:  manterdados.php" );
