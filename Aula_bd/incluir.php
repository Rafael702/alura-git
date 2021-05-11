<!-----Para gravar um registro no banco, é necessário um formulário-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--act: que vai ser acionado-->  <!--enctype: deve ser usado toda vez que for feito um upload de arquivo--> 
    <form action="incluir.act.php" method="post" enctype="multipart/form-data">
    <p>Fabricante</p>
    <p><input type="text" name="fabrixante" id=""></p>
    <p>Modelo</p>
    <p><input type="text" name="modelo" id=""></p>
    <p>Preço</p>
    <p><input type="text" name="preco"  id=""></p>
    <p>Foto</p>
    <p><input type="file" name="foto" id=""></p>
    <p><input type="submit" value="Gravar"></p>
    </form>

</body>
</html>