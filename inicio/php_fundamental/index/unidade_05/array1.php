<?php
    $salada= array('Maca','Pera','Uva','Banana','Laranja');
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        echo $salada[0];
        echo "<br>".$salada[1];
        echo "<br>".$salada[2];
        echo "<br>".$salada[3];
        echo "<br>".$salada[4];
        echo "<br>".count($salada);
        $salada[]='Kiwi Amarelo';
        echo "<br>".count($salada);
    ?>

    <pre>
        <?php
            print_r($salada);
        ?>
    </pre>
    </body>
</html>