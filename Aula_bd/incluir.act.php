<!--Não mostra nada para o usuário, serve apenas para gravar informações no banco--->

<?php
//Caso o include não encontra o arquivo, ele segue com o processo;//
//include('connect.php'); neste caso, como o arquivo é obrigatório,
// o correto é que p require seja usada.
//Ambos incluem informações no banco de dados//
require('connect.php');
//No caso do requiere, ele entende que este arquivo é necessário, se não encontrar
//ele trava o processo. O processo não segue.

//O extract vai pegar cada parte do formulário e vai criar uma variável
//e vai inserir o valor. 
extract($_POST);

$foto_url = rand(1,100);
mysqli_query($con,"
INSERT INTO `tb_smartphone` (`codigo`, `fabricante`, `modelo`, `preco`, `foto`) VALUES 
(NULL, '$fabricante', '$modelo', '$preco', '$foto_url');
");

header("location:listar.php");

?>  