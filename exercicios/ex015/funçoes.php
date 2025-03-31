<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçoes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Exercicio para funções.</h1>
    </header>
        <?php 
        //dados coletados:

        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];

        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

        $adiçao=$_POST['adição'];
        $subtraçao=$_POST['subtração'];

        

        
        ?>
    <main>
        <p>Olá esse é um teste para funçoes</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nome">Digite abaixo seu nome</label>
        <input type="text" name="nome" >
        <label for="sobrenome">Digite abaixo seu sobrenome</label>
        <input type="text" name="sobrenome" >

        <p>digite abaixo 2 numeros:</p>
        <input type="number" name="num1" >
        <input type="number" name="num2" >


        <input type="submit" value="enviar" >
    </form>    

    </main>
    <section>
        <?php 
        //contas

        function boasVindas()
        {
            echo "<p>Ola aqui está seu resultado</p>";
        };

        boasVindas();

        function nomeUsuario($nomeusuario)
        {
            echo "<p>$nomeusuario</p>";
        }

        nomeUsuario("$nome _$sobrenome");

        function somaNumeros($n1, $n2)
        {
            return $n1 + $n2;
        }    
        $resultado = somaNumeros($num1, $num2);
        
        echo "<p>$resultado</p>";
        
       
        
        ?>
    </section>
</body>
</html>