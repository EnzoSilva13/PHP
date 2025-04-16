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
            
            <label for="idade">digite aqui sua idade</label>
            <input type="number" name="idade">
           

            <input type="submit" value="descubra já">
        </form>

    </main>
    <section>
        <?php 
        include "funçoes.php";

        boasVindas();

        Alistamento();
        ?>
    </section>
    <footer>

    </footer>
    
</body>
</html>