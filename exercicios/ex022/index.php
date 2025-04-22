<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAlculadora simples 2</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    //valores coletados:
    
    $num1 = $_POST['dividendo'];
    $num2 = $_POST['divisor'];
    
    //operaçoes
    $soma = $_POST['som'];
    $subtraçao = $_POST['sub'];
    $multiplicaçao = $_POST['mul'];
    $divisao = $_POST['div'];

    

    ?>
<body>
    
    <header>
        <h1>calculadora v2</h1>
    </header>
    <main>
        <h2>digite os valores abaixo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="dividendo" value="<?=$dividendo?>">
            <input type="number" name="divisor" value="<?=$divisor?>">

            <select name="operações" >
                <option value="" name= ""></option>
                <option value="" name= "som">somar</option>
                <option value="" name= "sub">subtrair</option>
                <option value="" name= "mul">multiplicar</option>
                <option value="" name= "div">dividir</option>
            </select>

            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <?php
        $calcular = $soma;
        $resultado = 0;
        
        switch($calcular)
        {
            case $somar:
                $resultado = $num1 + $num2;
                echo"<p> o resultado da soma é $resultado</p>";
                break;
            case $subtraçao:
                $resultado = $num1 - $num2;
                echo"<p> o resultado da subtração é $resultado</p>";
                break;
            case $multiplicaçao:
                $resultado = $num1 * $num2;
                echo"<p> o resultado da multiplicação é $resultado</p>";
                break;
            case $divisao:
                $resultado = $num1 / $num2;
                echo"<p> o resultado da divisao é $resultado</p>";
                break;
            default:
                echo "<p>operação invalida</p>.";
        }
        
        ?>
    </section>
</body>
</html>