<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Alistamento Obrigatorio</h1> 
    </header>
    <main>
        <p>descubra se você ja deve alistar:</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="idade">
           
            
            <input type="radio" name="sexofem" value="fem"> Feminino
            <input type="radio" name="sexomas" value="mas"> Masculino

            <input type="submit" value="descubra já">
        </form>

    </main>
    <footer>

    </footer>
    
</body>
</html>