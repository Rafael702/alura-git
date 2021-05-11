<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
    <p><label for="idNome">Nome</label></p>
    <p><input type="text" name="nome" id=""></p>
    <p>Idade</p>
    <p><input type="numer" name="Idade" id=""></p>
    <p>Email</p>
    <p><input type="email" name="email" id=""></p>
    <p>Data de Nascimento</p>
    <p><input type="date" name="nascto" id=""></p>
    <p><input type="submit" name="Enviar" id=""></p>

    </form>

    <?php
if(isset($_POST['bt-enviar'])) {
    extract($_POST);
    echo "<p>Nascimento: $nascto </p>";



    $nascto = implode('/', array_reverse(explode('-', $nascto)));

    echo "<p>Nascimento $nascto </p>";

}
    ?>

</body>
</html>