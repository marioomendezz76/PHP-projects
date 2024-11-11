<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple nombres</title>
</head>
<body>
    <?php
        // EXERCICI 1
        $nums = array(0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1);
        function mediana($numeros){
            sort($numeros);
            $qtt = count($numeros);
            if ($qtt % 2 == 0) {
                $mediana = ($numeros[($qtt/2)]+$numeros[($qtt/2-1)])/2;
            } else{
                $mediana = $numeros[floor(($qtt)/2)];
            }
            echo "La mediana es " . $mediana;
        }
        mediana($nums);
    ?>
</body>
</html>