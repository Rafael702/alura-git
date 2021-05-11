<?php

    session_start();
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bingo</title>
</head>

<body>

    <form method="POST">
    <input type="submit" value="Sortear" name="bt-sortear">    
    <input type="submit" value="Limpar" name="bt-limpar">  

    </form>
    <div class="bingo">
    
  
     <div class="b">
        <h2>B</h2>
     
    </div>

    <div class= "i">
        <h2>I</h2>
       
    </div>

    <div class= "n">
        <h2>N</h2>
       
    </div>
    <div class= "g">
        <h2>G</h2>
       
        </div>
    <div class= "o">
        <h2>O</h2>
        
    </div>
  
    </div>
    <?php

    
if(isset($_POST['bt-limpar'])){
   $_SESSION['numeros'] = array();
}
if(isset($_POST['bt-sortear'])){

    if(!isset($_SESSION['numeros'])){
        $_SESSION['numeros'] = array();
}


  do{
      $sorteado = rand(1, 7);
  }while(in_array($sorteado, $_SESSION['numeros']));


  $tamanho = sizeof($_SESSION['numeros']);

  $_SESSION['numeros'][$tamanho] = $sorteado;

  sort($_SESSION['numeros']);

  foreach ($_SESSION['numeros'] as $num) {
      echo "<p>$num</p>";
  }
}

  ?>

    
</body>
</html>