const  variaveis =  [ { 
    cimento: 42,
    areia: 25,
    caixas: 18,
    tabela:15
}]

  /* cimento acabou peça mais 30,
     tem mais 50 caixas para chegar, 
      renove as tabelas para 43   
  */ 


     variaveis.cimento = 30 
      variaveis.caixas = 75 
      variaveis.tabela = 43  
    
      variaveis.papeis = "alimunium"

      const  materiais = [
        {canetas:2, 
        lapis: 3, 
        borracha: 1, 
        papeis:32, 
        caderno:1}]
      
  /*  console.log(materiais)
    materiais.pop()
    console.log(materiais)
    materiais.pop()
    console.log(materiais)
    materiais.pop()
    console.log(materiais)
    materiais.pop()
    console.log(materiais)
    materiais.pop()

    console.log(materiais) */
     const   colheita_2024 = [    
        {arroz:"285Kg",
        feijao:"87Kg",
        fava:"48Kg",
        vagem:"65Kg" 
          }, 
             {
                antigaLinhaça:"20Kg"
             }  
     ]

     colheita_2024[1].novaLinhaça = "30Kg"


 const NOVA = [...colheita_2024, ...materiais]


 /*console.log([...NOVA.slice(0,2)])*/

 console.log(NOVA[0],[1])

let argument1 = NOVA[0]
let argument2 = NOVA[1]

console.log(argument1,argument2)


const OMEGA = [...NOVA, ...variaveis]

console.log(OMEGA[0])
 