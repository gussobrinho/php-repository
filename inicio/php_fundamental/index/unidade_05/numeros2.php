<?php
    $salario = 800;
    $gasolina = 2.79;
    $nome = "Abilton";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Fundamental</title>
    </head>

    <body>
        <?php
            // testar se é numérica
            echo "O $salario é numérico? ".is_numeric($salario);
            echo "</br>"."O $gasolina é numérico? ".is_numeric($gasolina);
            echo "</br>"."O $nome é numérico? ".is_numeric($nome);

            // testar se é inteiro
            // pode ser integer ou int
            echo "</br>"."--------------------------------------------------------";
            echo "</br>"."O $salario é um número inteiro? ".is_int($salario);
            echo "</br>"."O $gasolina é um número inteiro? ".is_int($gasolina);

            // testar se é float
            echo "</br>"."--------------------------------------------------------";
            echo "</br>"."O $salario é um número float? ".is_float($salario);
            echo "</br>"."O $gasolina é um número float? ".is_float($gasolina);

            // Arrendondar
            // Diferente do round() o floor() sempore arredonda o valor para baixo
            // Diferente do floor() o ceil() sempore arredonda o valor para cima
            echo "</br>"."--------------------------------------------------------";
            echo "</br>"."Arredontado o valor $gasolina: "."<strong>".round($gasolina)."</strong>";
        ?>
    </body>
</html>