<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> 5% e 50%!!</h1>
    </header>
        <?php 
        //dados coletados:
        $valorbruto = $_GET['valorbruto'];
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valorbruto">adicione um valor abaixo</label>
            <input type="number" name="valorbruto" id="" value="<?=$valorbruto?>">

            <input type="submit" value="enviar">
        </form>
        
        <section>
            <?php 
            $cincoporcento = $valorbruto * 0.05;
            $cinquentaporcento = $valorbruto / 2;

            echo "<p>5% do seu valor = <strong>$cincoporcento</strong></p>";
            echo "<p>50% do seu valor = <strong>$cinquentaporcento</strong></p>";
            ?>
        </section>
    </main>
    
</body>
</html>