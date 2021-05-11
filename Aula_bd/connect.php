 <!---Código para se conectar ao Banco de Dados ---->
<?php
 // Variável para conectar com o Banco de dados//
if(!$con = mysqli_connect('localhost', 'root', '')){
    echo "Erro ao conectar com a base de dados";
}
    //Selecionar a base de dados //
if(!mysqli_select_db($con, 'bd_smartphone')){
    echo "Erro ao selecionar a base de dados";
}
//Para não ter problema com caracter especial//
mysqli_query($con,"SET NAMES utf8");

?>