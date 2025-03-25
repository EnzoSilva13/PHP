<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Reajustador de Preços Online</h1>
    </header>
        <?php 
        //dados coletados
        $preço = $_GET['preço'];
        $porcentagem = $_GET['porcentagem'];
        
        
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <p>digite o preço do produto abaixo e reajuste o preço!:</p>
            <input type="number" name="preço" id="" min="100" value="<?=$preço?>">
                <label for="porcentagem">reajustando em (<strong>
                    <span id=p>?</span>%
                </strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max= "80" step="1" oninput = "mudaValor()">
            <input type="submit" value="enviar">
        </form>
    </main>
    <section> 
        <?php 
        //contas e resultado   
            
            $desconto = ($preço * $porcentagem)/100; 
            $valoratualizado = $preço - $desconto;
            echo "com a porcentagem de reajuste de $porcentagem %, o novo valor será <strong>$valoratualizado</strong> com desconto de ".$desconto."." ;
        ?>    
    </section>
    <script>
        function mudaValor(){
            p.innerText = porcentagem.value
        }
    </script>
</body>
</html>