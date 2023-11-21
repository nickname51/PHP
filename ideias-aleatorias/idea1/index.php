<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random items</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
 <?php
    
    $numero = $_GET['num'] ?? 0;

    $numero2 = $_GET["num2"] ?? 0;

    $numero3 = $_GET["num3"] ?? 0;

      // teste 1
     $sam = 5;
     $sum = $numero + $sam; 

     // teste 2
     $sam2 = $numero2 - $sam; 

     // teste 3 
     $sam3 = $sam * $numero3;




    ?>
    <main>
        <h1>Teste de um</h1> 

        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="num"><strong>(adiçao)</strong></label>
        <input type="number" name="num" id="num" step="0.1">
   
</main>
<main>
        <h1>teste dois</h1>
       
                <label for="num2"><strong>(subtraçao)</strong></label>
                <input type="number" name="num2" id="num2" step="0.1">
              <div>
                  
                 
              </div>
            </main>
            <main>
        <h1>teste tres </h1>
       
                <label for="num3"><strong>(multiplicaçao)</strong></label>
                <input type="number" name="num3" id="num3" step="0.1">
              <div>
                  
                  <input id="botao" type="submit" value="Enviar">
                  <input id="botao" type="reset" value="Resetar">
              </div>
            </main>
   </form>
<main>
    <h1>Resultado</h1>
        <?php
        echo "<p>O numero<b> $numero</b>  + o numero <b>$sam</b> e igual a <b>$sum</b></p>";
      
        echo "<p>O  numero <b>$numero2</b> - o numero <b>$sam</b> e igual a <b>$sam2</b></p>";

        echo "<p>O  numero <b>$numero3</b> X o numero <b>$sam</b> e igual a <b>$sam3</b></p>";




    
        ?>
</main>

    
    
</body>
</html>