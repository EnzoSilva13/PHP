<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroalimentação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>retroalimentação de formularios</h1>
    </header>
    <?php 
            $valor1 = $_POST['valor1'] ?? 0;
            $valor2 = $_POST['valor2'] ?? 0;

    ?>    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <section>
            <label for="valor1">valor 1</label>
            <input type="number" name="valor1" id="" value="<?=$valor1?>">

            <label for="valor2">valor 2</label>
            <input type="number" name="valor2" id="" value="<?=$valor2?>">

            <input type="submit" value="enviar">

        
    </form>

    <?php 
        echo "<section> <p>a soma de $valor1 e $valor 2 é = <strong>".$valor1+$valor2."</p></section>";
    ?>
    
</body>
</html>