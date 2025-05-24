<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco do Povo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Banco do Povo</h1>
    </header>
        <?php 
            //coletando dados:

            $nome =$_POST['nome'];
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $confsenha=$_POST['confsenha'];

        ?>
    <main>
        <p>Para entrar digite seus dados:</p>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="nome" value="<?=$nome?>">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?=$email?>">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" value="<?=$senha?>">
        <label for="confsenha">Confirme sua senha:</label>
        <input type="password" name="confsenha" value="<?=$confsenha?>">

        <input type="submit" value="entrar">
    </form>    
    </main>
        <?php 
        //criando a função de validação:
        
        function validarDados(){
            if ($nome != $nome1 && $nome != $nome2 && $nome != $nome3) {
                return $nomefinal;
            }
           
        }   
        ?>
    <section>
    <?php 
        echo $nomefinal;
        
        ?>
    </section>
    <footer>
        
    </footer>
</body>
</html>