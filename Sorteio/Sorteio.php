<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>

    <?php
session_start();
  ?>
</head>
<body>
    <form method="POST"></form>
    <p><input type="submit" value="sorteio" name="bt-sortear"></p>

    </form>

    <?php
    if(isset($_POST['bt-sortear'])) {

        $sorteio = rand(1, 75);
    }
    ?>


</body>
</html>