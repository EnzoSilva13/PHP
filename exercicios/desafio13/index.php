<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Caixa Eletronico</h1>
    </header>
        <?php 
        //dados coletados
        $saque = $_GET['saque'];
        //contas 

        $resto = $saque;

        $nota_cem= floor($resto/100);
        $resto %= 100;

        $nota_cinquenta = floor($resto / 50);
        $resto %= 50;

        $nota_dez = floor($resto / 10);
        $resto %= 10;

        $nota_cinco = floor($resto /5);
        $resto %= 5;
        
        

        ?>
    <main>
        <p> digite um valor para sacar:</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="saque">(com notas de 100, 50, 10 e 5)</label>
        <input type="number" name="saque" id="" value="<?=$saque?>">

        <input type="submit" value="sacar">
    </form>
    </main>
    <section>
        <h2>Com base no valor R$<?=$saque?> você receberá:</h2>
        <ul>
            <li><img src="100-reais.jpg" alt="" width="108px"> x<?=$nota_cem?></li>
            <li><img src="50-reais.jpg" alt="" width="115px"> x<?=$nota_cinquenta?></li>
            <li><img src="10-reais.jpg" alt="" width="105px"> x<?=$nota_dez?></li>
            <li><img src="5-reais.jpg" alt="" width="100px"> x<?=$nota_cinco?></li>
        </ul>
    </section>
    
</body>
</html>