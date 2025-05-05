<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Ponto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Relogio de ponto </h1>
    </header>
        <?php 
            //dados coletados;

         $nome = $_POST['funcionario'];
         $entrada =$_POST['entrada'];
         $saida =$_POST['saida'];

        ?>
    <main>
        <p>insira seu nome e a hora de entrada e saida</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">   
        <label for="funcionario">Nome</label>
        <input type="text" name="funcionario" value="<?=$nome?>">
        <label for="entrada">Horario de entrada</label>
        <input type="time" name="entrada" value="<?=$entrada?>">
        <label for="saida">Horario de saida</label>
        <input type="time" name="saida" value="<?=$saida?>">

        <input type="submit" value="enviar">
    </form>     
        <?php 

        include "funcionarios.php";
        //listando funcionarios:
        
        new Funcionario = $nome;
        ?>
    </main>
    
</body>
</html>