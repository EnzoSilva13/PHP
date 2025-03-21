<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Salarios minimos</h1>
    </header>       
    <main>
        <h2>digite abaixo seu salario:</h2>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <input type="number" name="salario" id="">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <?php 
                //dados coletados
        $salario = $_GET['salario'];
        $salario_minimo = 1518;
                //contas
        $salarios_inteiros = intdiv($salario, $salario_minimo);

        $sobra = $salario % $salario_minimo;
        $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        $sobra_salario = numfmt_format_currency($padrão , $sobra, "BRL");   
        
        echo "<p><strong>Com base no valor do salario minimo = R\$ 1.518,00</strong></p>";
        echo "<p>Você ganha <strong>$salarios_inteiros salários minimos<strong> e sobra <strong>$sobra_salario</strong>.";
        
        ?>
    </section>
    <footer>
        feito por <a href="https://github.com/EnzoSilva13" target="_blank">Enzo Silva</a>
    </footer>
</body>
</html>