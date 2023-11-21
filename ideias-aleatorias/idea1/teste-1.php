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

   <p>materiais para ser trazidos</p> 
     <main>

      <ul>
         <li>

         </li>
         <li>

         </li>
         <li>

         </li>
      </ul>
      


     </main>
 </body>
  
   
 </html>


<?php

 $_SERVER["PHP_SELF"];

$variaveis = [
    [
        'cimento' => 42,
        'areia' => 25,
        'caixas' => 18,
        'tabela' => 15
    ]
];
  // array 0
$variaveis[0]['cimento'] = 30;
$variaveis[0]['caixas'] = 75;
$variaveis[0]['tabela'] = 43;
$variaveis[0]['papeis'] = "alimunium";


 // array 1 
$materiais = [
    [
        'canetas' => 2,
        'lapis' => 3,
        'borracha' => 1,
        'papeis' => 32,
        'caderno' => 1
    ]
];

// array 2 
$colheita_2024 = [
    [
        'arroz' => '285Kg',
        'feijao' => '87Kg',
        'fava' => '48Kg',
        'vagem' => '65Kg'
    ],
    [
        'antigaLinhaça' => '20Kg'
    ]
];

$colheita_2024[1]['novaLinhaça'] = '30Kg';

$NOVA = array_merge($colheita_2024, $materiais); 

$OMEGA = array_merge($NOVA, $variaveis) 
?>