<?php
/**
 * Salvar os dados no cadastro de alunos
 * Se o ID for igual a 0 (zero ), criar um novo registro
 * se o ID for maior que 0 (zero), atualizar o registro existente.
*/

require __DIR__ . "/../includes/conexao.inc.php";

//$id = isset($_POST['id']) ? $_POST['id'] : 0;
// - no PHP7.x+ usamos a versão abaixo
$id =  $_POST['id'] ?? 0;
$arr_dados = [];

//var_dump($id);
//print_r($_POST);
//die();


/**
*Se o o $id for maior que zero então atualize
*senão, inclua;
*/
if ( $id > 0){

    $arr_dados['id']    = $id;
    $arr_dados['nome']  = $_POST['nome'];
    $arr_dados['email'] = $_POST['email'];
    $arr_dados['login'] = $_POST['login'];
    $arr_dados['senha'] = $_POST['senha'];

    atualizar($arr_dados);

} else {

    $arr_dados['nome']  = $_POST['nome'];
    $arr_dados['email'] = $_POST['email'];
    $arr_dados['login'] = $_POST['login'];
    $arr_dados['senha'] = $_POST['senha'];

    incluir($arr_dados);
}


require "manterdados.php";

/**
 * Atualiza registro existente
*/
function atualizar($arr_dados){
    global $pdo;
    //usando parâmetros nomeados para evitar
    //o sql injection
    $sql = "update usuarios 
           set nome = :nome, 
               email = :email,
               login = :login, 
               senha = :senha
               where id = :id ";

    $pstm = $pdo->prepare($sql);

    $pstm->bindParam(":nome",  $arr_dados['nome']);
    $pstm->bindParam(":email", $arr_dados['email']);
    $pstm->bindParam(":login", $arr_dados['login']);
    $pstm->bindParam(":senha", $arr_dados['senha']);
    $pstm->bindParam(":id",    $arr_dados['id']);

    $pstm->execute(); 
}
/**
 * Inclui um novo registro no cadastro
 */
function incluir($arr_dados){
    global $pdo;

    $sql = "insert into usuarios ( nome,email,login,senha ) ";
    $sql .= " values (:nome,:email,:login,:senha) ";
    //$sql .= " values (?,?,?,?) ";
    $stm = $pdo->prepare($sql);
    $stm->bindParam(":nome",  $arr_dados['nome']);
    $stm->bindParam(":email", $arr_dados['email']);
    $stm->bindParam(":login", $arr_dados['login']);
    $stm->bindParam(":senha", $arr_dados['senha']);
    
    $stm->execute();
}

