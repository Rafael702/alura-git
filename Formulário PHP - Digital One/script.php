<?php
/** 
 * Created by PhpStorm
 * User: Rafael
 * Date: 26/03/2021
*/

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if($idade >= 6 && $idade <=12){

    for($i = 0; $i <= count($categorias); $i++ ){

        if($categorias[$i] == 'infantil')
        echo "O nadador ", $nome, " compete na categoria " ,$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
        echo "O nadador ", $nome, " compete na categoria  adolecente";
    }
}
else{

    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        echo "o nadador ", $nome, " compete na categoria adulto";

    }
}


?>