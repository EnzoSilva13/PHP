<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <section>
        <?php 
             $inicio = date("m-d-Y", strtotime("-7 days")) ;
             $fim = date("m-d-Y");
     
             $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     
             $dados = json_decode(file_get_contents($url), true);
             
             //var_dump($dados);
     
             $cotação = $dados["value"][0]["cotacaoCompra"];

             $reais = $_GET["numero"] ?? 0;
             
             $preconversao= $reais / $cotação;

             $conversao = round("$preconversao", 2);
             
             $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

             echo "<p>Seus ". numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong></p>"
       

        
        ?>
    </section>
</body>
</html>