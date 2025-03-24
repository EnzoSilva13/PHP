<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idadometro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de idade</h1>
    </header>
        <?php 
            //dados coletados:
            $anoatual = date('Y');
            $anonascimento = $_POST['anonascimento'];
            $anoescolhido = $_POST['anoescolhido'];
    
        ?>
    <main>
         <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
             <label for="anonascimento">Digite abaixo sua data de nascimento</label>
                     <input type="number" name="anonascimento">
             <label for="anoescolhido">Digite abaixo o ano que deseja <strong>(atualmente <?=$anoatual?>)</label >
                     <input type="number" name="anoescolhido">
                     <input type="submit" value="enviar">
         </form>
    </main> 
    <section>
        <?php 
            //contas e resultado
            
            $idade = $anoescolhido - $anonascimento;

            echo "sua idade em $anoescolhido será <strong>$idade anos</strong>";
        ?>
    </section>  
</body>
</html>