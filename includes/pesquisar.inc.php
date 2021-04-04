<?php
/*
 * Pesquisar
*/

$sql = "select * from usuarios where id = :id";
$stm = $pdo->prepare($sql);
$stm->bindParam(":id",$_REQUEST['id']);

$stm->execute();

$row = $stm->fetch(PDO::FETCH_OBJ);