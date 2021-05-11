<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIÇÃO</title>
</head>
<body>
    <h1>Formulário de inscrição para o Curso de HTML</h1>

    <form method="POST">
    <p><label for="IdNome"><b> Nome Completo </b></label></p>
    <p><input type="text" name="Nome" id=""></p>
    <p><b> Idade </b></p>
    <p><input type="numer" name="Idade" id=""></p>
    <p><b>Informe a sua data de nascimento</b></p>
    <p><input type="date" name="nasct" id=""></p>
    <p> <b>CPF</b></p>
    <p><input type="numer" name="CPF" id=""></p>
    <p><b>E-mail </b></p>    
    <p><input type="email" name="Email" id=""></p>
    <p><b>Informe uma senha para acessar a Área do Aluno</b></p>
    <p><input type="password" name="Senha"></p>
    <p>Perído de Estudos</p>
    <p><Select name="Periodo">
    <option value=""></option>
    <option value="Manhã">Manhã</option>
    <option value="Tarde">Tarde</option>
    <option value="Noite">Noite</option>
    </Select>  </p>
    <br>
    <p><input type="submit" value="Enviar" name="bt-enviar"></p>


    <?php
    if(isset($_POST['bt-enviar'])){
    extract($_POST);

    $nasct = implode('/', array_reverse(explode('-', $nasct)));

    echo "<p>Nascimento: $nasct</p>";

    echo "<p>Nome: $Nome</p>";

    echo "<p>E-mail para Contato: $Email</p>";
    
    echo "<p>Período: $Periodo</p>";
}
    ?>
        
    </form>

</body>
</html>