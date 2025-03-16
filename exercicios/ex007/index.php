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
        <form action="index.php" method="post">
            <section>
                <label for="valor1">Valor A</label>
                <input type="number" name="valor1" id="">
                <label for="valor2">Valor B</label>
                <input type="number" name="valor2" id="">
                <label for="valor3">Valor C</label>
                <input type="number" name="valor3" id="">
                <input type="submit" value="enviar">
            </section>
        </form>
            <section>
                <?php 
                $valor_a = $_POST['valor1'];
                $valor_b = $_POST['valor2'];
                $valor_c = $_POST['valor3'];

                $delta = ($valor_b * $valor_b) - (4 * $valor_a * $valor_c);
                $raizpos = -$valor_b + sqrt($delta)/ (2 * $valor_a);
                $raizneg = -$valor_b - sqrt($delta)/ (2 * $valor_a);


                echo "$valor_a, $valor_b, $valor_c <br>";
                echo "Delta = $delta <br>";
                echo "a raiz positiva é $raizpos";
                echo "a raiz negativa é $raizneg";
                    
                ?>
            </section>
    </main>

    
</body>
</html>