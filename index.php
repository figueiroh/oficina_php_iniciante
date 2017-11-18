<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            //$color = "yellow";
            //$color = "red";
            //echo $color;
            
            /* var_dump("Olá"); //var_dump mostra o tipo de dado, ex: string e mostra os números de caracteres.
            echo "<br>";
      
            var_dump(array("maçã", "maracujá"));  //var_dump pode "brecar" o código    
            echo "<br>";
      
            $a = "Olá";
            $b = $a . " mundo";
            echo $b;
            echo "<br>";
      
            $primeiro_numero = 2;
            $segundo_numero = 4;
            echo $primeiro_numero + $segundo_numero;
            echo "<br>" "<br>"; 
      
            $c = 3;
            $d = 5; 
            
      
            $resultado = $c + $d;
            echo "<br>";
            echo $resultado;
      
            echo $c - $d;
            echo "<br>";
      
            echo $c * $d;
            echo "<br>"; 
      
            echo $c / $d;
            echo "<br>"; 
              
            $e = 5;
            $f = 2;
      
            if ($e > $f) {
              echo "{$e}  é maior que  $f";
            }else{
              echo "$e  é menor que $f";
            }
      */
      
           /* $i = 1;
            
            while ($i < 11) {
              $i = $i + 1;
              
              $resultadoFinal = $i % 2;
              
              if ($resultadoFinal == 0){
                echo "$i é par" . "<br>";
                
              }else {
                echo "$i é impar" . "<br>";
              } */
      
            /* for($i = 1; $i <= 10; $i++) {
               echo "O valor de é " . $i . "<br>";
               
             } */
      
            /* $name = "Fulana";
      
            switch ($name) {
              case "Fulana":
                    echo "Bem vinda Fulana!";
                    break;
                  
              case "Joaquina":
                    echo "Bem vindo Joaquina!";
                    break;
                
                default:
                    echo: "Não conheço você!";
                
            } */
      
             /* function soma ($a , $b){
                  
                $resultado = $a + $b;
      
                return $resultado;
              
                
             }
      
             $a = 3;
             $b = 2;
      
             $retornoFuncao = soma($a + $b);
                echo $retornoFuncao; */
      
            
             /* $cores = array("vermelho", "amarelo");
             echo $cores[0] */
              
             
            /* $people = ["nome" => "Fulana", "Idade" => 25];
             echo $people ["nome"] */
      
            /* $numeros = [1, 2, 3];
            array_push [$numeros, 4];
            echo ..... */
          
      
            /* $frutas = array("maça" , "laranja", "morango");
      
            foreach($frutas as $fruta){
              
              echo "a fruta é " . " ". $fruta . "<br>"; */
      
            $comidasPreferidas = ["picles" , "pizza", "hamburguer", "torta de limão"];      
            foreach($comidasPreferidas as $comida){              
            echo "minha comida favorita é " . " " . $comida . "<br>"; 
            }
      
            $comidasPreferidas = ["picles" , "pizza", "hamburguer", "torta de limão"];      
            array_push ($comidasPreferidas, "Sopa de cebola");      
            foreach($comidasPreferidas as $comida){              
            echo "minha comida favorita é " . " " . $comida . "<br>"; 
            }
      
      
           $comidasPreferidas = ["picles" , "pizza", "hamburguer", "torta de limão"];      
           array_pop ($comidasPreferidas);      
           foreach($comidasPreferidas as $comida){              
           echo "minha comida favorita é " . " " . $comida . "<br>"; 
           }
      
      
      
                          
      
      
      
            
      
      
      
          //foreach utiliza mais em array ou objeto
          //while condição que repita
          //for..
            
        ?>

    </body>
</html>