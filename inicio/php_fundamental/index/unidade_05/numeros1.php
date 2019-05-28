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
            echo "</br>"."Raiz quadrada: ".sqrt(36);

            // Randômico Generica
            echo "</br>"."Randômico generico: ".rand();

            // Randômico entre um intervalo
            echo "</br>"."Randômico com intervalo: ".rand(1,1000);

            // Valor absoluto
            // Valor que não pode ser negativo
            echo "</br>"."Valor absoluto: ".abs(-10);

            // Conversão de base
            // Decimal para binária
            echo "</br>"."Decimal para binária: ".base_convert(100, 10, 2);
        ?>
    </body>
</html>