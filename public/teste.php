<?php
/**
 * Teste
 */

 echo "Em que diretório estou ? <br>";

 echo "Eu estou no diretório " . __DIR__ . "<br>";

 chdir("../includes");
 exec("dir",$out);
 
 //var_dump($out);

 foreach ( $out as $arquivo=>$props){
     echo $props . "<br>";
 }

 echo "Agora estou no diretório " . __DIR__ . "<br>";