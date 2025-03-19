<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If and Else</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bhaskara</h1>
    </header>
    <main>
        <?php 
        //capturando dados
        $valor1 = $_GET['valor1']?? 0;
        $valor2 = $_GET['valor2']?? 0;
        ?>
        <section>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">       
                <label for="valor1">Valor A</label>
                <input type="number" name="valor1" id="" value="<?=$valor1?>">
                <label for="valor2">Valor B</label>
                <input type="number" name="valor2" id="" value="<?=$valor2?>">
        
                <input type="submit" value="enviar">
        </form>        
        </section>    
    </main>
    <section>
        <h1>resultado da soma</h1>
        <?php 
        $soma = $valor1 + $valor2;
        echo "a soma de $valor1 e $valor2 é igual a  $soma";
        
        ?>
    </section>
    
</body>
</html>