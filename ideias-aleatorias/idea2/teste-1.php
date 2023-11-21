


 <?php
 // ARRAY 1
$variaveis = [
    
        'cimento' => 42,
        'areia' => 25,
        'caixas' => 18,
        'tabela' => 15
    
];


 // ARRAY 2
$materiais = [
    
        'canetas' => 2,
        'lapis' => 3,
        'borracha' => 1,
        'papeis' => 32,
        'caderno' => 1
    
];

 // ARRAY 3
$colheita_2024 = 
    [
        'arroz' => '285Kg',
        'feijao' => '87Kg',
        'fava' => '48Kg',
        'vagem' => '65Kg'
    ];
    

$NOVA = array_merge($colheita_2024, $materiais); 

$OMEGA = array_merge($NOVA, $variaveis) ;


?>


<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>materiais </title>
  <link rel="stylesheet" href="estilo.css">
 </head>
 <body>

   <h1>teste de materiais</h1>
   
   <h2>materiais para ser trazidos</h2> 
     

      <form action="<?php  $_SERVER["PHP_SELF"] ?>" method="get">
<main>
              <ul> 
                 <div>
                     <li><h3 id="co">Construçao</h3> <?php
                     foreach($variaveis as $key => $value) {
                        echo "<p> $key: $value </p>";
                     }
                      ?>
                     </li>
                 </div>

                 <div>
                     <li> <h3 id="co">Colheita</h3> <?php foreach($colheita_2024 as $key => $value) {
                        echo "<p> $key: $value </p>";
                     }?>
                     </li>
                 </div>

                 <div>
                     <li> <h3 id="co">Materiais</h3>
                     <?php
                     foreach($materiais as $key => $value) {
                        echo "<p> $key: $value </p>";
                     }
                      ?>
                     </li>

                     <li> <h3 id="co">Total de armazenado</h3>
                        <?php foreach($OMEGA as $key => $value) {
                            echo "<p> $key: $value </p>";
                        }?>
                     </li>
                 </div>
              </ul>
                    </main>
      </form>
      


     
 </body>
  
   
 </html>


