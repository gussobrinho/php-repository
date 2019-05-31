<?php
    $agenda= array("nome"=>"Jose",
                    "telefone"=>"99216-8415",
                    "salario"=>15000.00);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        echo $agenda["nome"]."<br>";
        echo $agenda["telefone"]."<br>";
        echo $agenda["salario"]."<br>";
    ?>

    <pre>
        <?php
            print_r($agenda);
        ?>
    </pre>
    </body>
</html>