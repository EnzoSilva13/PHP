<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Media Simples e Ponderada!</h1>
    </header>
        <?php 
        //dados coletados
        $valor1 = $_GET['valor1'];
        $peso1 = $_GET['peso1'];
        $valor2 = $_GET['valor2'];
        $peso2 = $_GET['peso2'];
        ?>
    <main>
        <p>digite abaixo os valores:</p>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
        <label for="valor1">Valor 1</label>
        <input type="number" name="valor1" value="<?=$valor1?>">
        <label for="peso1">Peso 1</label>
        <input type="number" name="peso1" value="<?=$peso1?>"
        style="color:red;">
        <label for="valor2">Valor 2</label>
        <input type="number" name="valor2" value="<?=$valor2?>">
        <label for="peso2">Peso 2</label>
        <input type="number" name="peso2" value="<?=$peso2?>" style="color:red;">
        <input type="submit" value="calcular">
    </form>
    </main>
        <?php 
        //contas
        
        $media_simples = ($valor1 + $valor2) /2;
        
        $media_ponderada = ($valor1 * $peso1 + $valor2 *$peso2)/($peso1 + $peso2);
        ?>
    <section>
        <h2>resultado:</h2>
        <p>analisando os valores <?=$valor1?> e <?=$valor2?></p>
        <?php 
        echo" <p> A <strong>Media Simples</strong> é <strong>$media_simples</strong>. <br>";
        echo "A <strong>Media Ponderada</strong> é <strong>$media_ponderada</strong></p> " ;


        if ($media_simples <=6 & $media_ponderada <=6){
            echo "reprovado";
        } else if ($media_simples <=6 & $media_ponderada > 6){
            echo "recuperação";
        } else if ($media_simples > 6 & $media_ponderada <=6){
            echo "recuperação";
        } else {
            echo "aprovado";
        }
        ?>
    </section>
</body>
</html>