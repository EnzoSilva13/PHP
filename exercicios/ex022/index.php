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
    
    $num1 = $_GET['dividendo'] ?? null;
    $num2 = $_GET['divisor'] ?? null;
    
    $operaçoes = $_GET['operações'] ?? null;

    

    ?>
<body>
    
    <header>
        <h1>calculadora v2</h1>
    </header>
    <main>
        <h2>digite os valores abaixo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="dividendo" value="<?=$num1?>">
            <input type="number" name="divisor" value="<?=$num2?>">

            <select name="operações" >
                <option value="" ></option>
                <option value="1">somar</option>
                <option value="2">subtrair</option>
                <option value="3">multiplicar</option>
                <option value="4">dividir</option>
            </select>

            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <?php
        
        $resultado = "";
       

        function Soma($num1, $num2){
            return $num1 + $num2;
        }

        function Subtração($num1, $num2){
            return $num1 - $num2;
        }

        function Multiplicação($num1, $num2){
            return $num1 * $num2;
        }
        function Divisão($num1, $num2){
            if ($num2 != 0){
                return $num1 / $num2;
            }else {
                return "Erro:Divisão por zero!";
            }
        }


        switch($operaçoes)
        {
            case 1:
                $resultado = Soma($num1, $num2);
                echo"<p> o resultado da soma é $resultado</p>";
                break;
            case 2:
                $resultado = Subtração($num1, $num2);
                echo"<p> o resultado da subtração é $resultado</p>";
                break;
            case 3:
                $resultado = Multiplicação($num1, $num2);
                echo"<p> o resultado da multiplicação é $resultado</p>";
                break;
            case 4:
                $resultado = Divisão($num1, $num2);
                echo"<p> o resultado da divisao é $resultado</p>";
                break;
            default:
                echo "<p>operação invalida</p>.";
        }
        
        ?>
    </section>
</body>
</html>