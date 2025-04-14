<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> VELOCIDADE!!!!</h1>
    </header>
        <?php 
        //dados coletados:
        $valor = $_GET['valor']?>
    <main>
        <h2>transforme m/s em km/h ou vice versa.</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="valor" id="">
            <input type="submit" value="calcular">
        </form>
            <?php 
            function kmPorHora($valor)
            {
                $resultado = $valor / 3.6;
                echo "<p>$resultado</p>";
            }
               
            kmPorHora($valor);
                 
            ?>
    </main>
    
</body>
</html>