<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Smartphones</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container div{
        width:300px;
        height: 400px;
        background-color: #345;
        color:white;
        float: left;
        margin: 10px;
        padding: 10px;
        text-align: center;
        box-shadow: 5px 5px 3px black;
    }

    
    
    
    </style>

</head>
<body>  
<h1><a href="incluir.php">Incluir</a></h1>
    <?php require('connect.php'); ?>

    <div class="container">
      <?php
            $smartphones = mysqli_query($con, "Select * from 'tb_smartphones'");

            while ($smartphone = mysqli_fetch_array($smartphones)){
                echo "<div>";
                echo "<h2>$smartphone[fabricante]</h2>";
                echo "<h1>$smartphone[modelo]</h1>";
                echo "<h3>$smartphone[preco]</h3>";
                echo "<img src = # alt = ''>";
                echo "</div>";

            }

        ?>
    
    </div>
</body>
</html>