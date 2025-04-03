<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora Simples</h1>
    </header>
        <?php 
        //dadoscoletados
        $valor1 = $_GET['num1'] ?? 0;
        $valor2 = $_GET['num2'] ?? 0;
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="num1" placeholder="valor um">
            <input type="number" name="num2" placeholder="valor dois">
            
            <input type="submit" value="ADIÇÃO +" >
            <?php
                function contaAdiçao($n1, $n2) {
                    return $n1 + $n2;
                }
                
                $resultadosoma = contaAdiçao($valor1,$valor2);
                
            ?>
            <input type="submit" value="SUBTRAÇÃO -">
            <input type="submit" value="MULTIPLICAÇÃO .">
            <input type="submit" value="DIVISAO /">
                </main>
        </form>
    <section>
        <h2>resultado:</h2>
        <?php 
        echo "<p>$resultadosoma</p>"?>
    </section>
</body>
</html>