<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculador de raizes</h1>
    </header>
         <?php 
            //dados coletados:
             $num = $_GET['numero'];
         ?>
    <main>
        <p>digite um numero abaixo:</p>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <input type="number" name="numero" id="" placeholder="digite aqui..." value="<?=$num?>">
            <input type="submit" value="calcular">
        </form>
    </main>
        <?php 
            //contas
            $raizquadrada = sqrt($num);
            $raizcubica = pow($num, 1.0/3.0);
        ?>
    <section>
        <h2> resultado:</h2>
        <?php 
        echo "<p><ul>
              <li> O valor da <strong>Raiz Quadrada</strong> é <strong>$raizquadrada</strong>.</li>
              <li> O valor da <strong>Raiz Cubica</strong> é <strong>$raizcubica</strong>.</li></ul></p>  "
        ?>
    </section>
</body>
</html>