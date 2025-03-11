<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exercicio superglobais</title>
</head>
<body>
    <header>
        <h1>metodo GET</h1>

    </header>
    <main>
        <pre>
            <?php 
                echo "<p>Superglobal GET</p>";
                var_dump($_GET);

                echo "<h1>SUperglobal POST</p>";
                var_dump($_POST);
            ?>
        </pre>
    </main>
    
</body>
</html>
