<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exercicio superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>metodo GET</h1>

    </header>
    <main>
        <pre>
            <?php 
                setcookie("dia-hora", "quarta", time() + 3600);

                session_start();
                $_SESSION["teste"] = "funcionou";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSIONS</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                foreach(getenv() as $c => $v) {
                    echo "<br> $c > $v";
                }

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
    
</body>
</html>
