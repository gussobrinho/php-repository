<?php 
    $salario = 800;
    $meses = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Fundamental</title>
    </head>

    <body>
        <?php
            // Multiplicacao e Divisao
            echo "Trimestre: ".$meses." meses";
            echo "</br>"."Salario por trimestre: "."R$".($meses*$salario);
            echo "</br>"."Quinzena: "."R$".($salario/2);
            
            // Exponencial
            echo "</br>"."Salario exponencial: "."R$".pow($meses,12);

            // Raiz Quadrada
            echo "</br>"."Salario exponencial: "."R$".sqrt(36);

            // Randômico Generica

            // Randômico entre um intervalo

            // Valor absoluto
            
        ?>
    </body>
</html>