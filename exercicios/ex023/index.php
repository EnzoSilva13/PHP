<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>banco de dados</h1>
    </header>
        <?php 
            //dadoscoletados
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

        ?>
    <main>
    <p>Digite abaixo seus dados:</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="usuario">nome de usuario</label>
            <input type="text" name="usuario" value="<?=$usuario?>">
            <label for="senha">senha</label>
            <input type="password" name="senha" value="<?=$senha?>">

            <input type="submit" value="entrar">
        </form>
    </main>
       <?php 
       function UsuarioSenha($usuario, $senha){
            $usernames = [
                'enzo' => '130707',
                'user' => 'password'
            ];
            if(isset($usuario[$usernames]) && $usuario[$usernames] == $senha) {
                return "Autenticação bem-sucedida!";
            } else {
                return "Usuario ou senha inválidos";
            }
       }

       ?>
    <section>
        <p><?php
            echo UsuarioSenha('enzo', '130707');
        ?></p>
    </section>   
</body>
</html>