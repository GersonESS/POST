<?php

$nome = isset( $_POST['nome']) ? $_POST['nome'] : NULL;
if($nome){
    echo $nome;
   
    
} else{
    echo "não existe";
}


?>