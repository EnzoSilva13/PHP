<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Classes e Objetos v2</h1>
    </header>
    <main>
        <h2>Cachorros</h2>
        <p><?php 
        
        include "classes.php";
        
        $july = new Cachorro();
        $july->nome = "July";
        $july->latir();
        
        ?></p>
    </main>
</body>
</html>