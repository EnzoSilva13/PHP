<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            //dados coletados:
            $dividendo = $_POST['dividendo'] ?? 0;
            $divisor = $_POST['divisor'] ?? 1;    
        ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="dividendo" id="" value = "
            <?=$dividendo?>">
            <input type="number" name="divisor" id="" value = "
            <?=$divisor?>">
            
            <input type="submit" value="calcular">
        </form>
    </main>

    <section>
        <h2>estrutura da divisao</h2>
        <?php 
            //calculos
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$quociente?></td>
                <td><?=$resto?></td>
            </tr>

        </table>
    </section>
    
</body>
</html>