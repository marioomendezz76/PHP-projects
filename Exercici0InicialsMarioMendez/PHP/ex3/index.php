<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple nombres</title>
</head>
<body>
    <?php
        // EXERCICI 3
        $num=4;
        function factorial($num){
            $result=1;
            for ($i = 1; $i <= $num; $i++) {
                if($i == 1){
                    echo $i;
                    
                }else{
                    echo ' * ' . $i;
                }
                $result = $i * $result; 
            }
            echo ' = ' . $result;
        }
        factorial($num);
    ?>
</body>
</html>