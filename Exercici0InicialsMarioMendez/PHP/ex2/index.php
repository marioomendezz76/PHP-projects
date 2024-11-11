<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple nombres</title>
</head>
<body>
    <?php
        // EXERCICI 2
        $num=10;
        function fibonacci($num){
            $num1 = 0; $num2 = 1; $num3 = 0;
		    for($i=2;$i<=$num;$i++)
		    {
		    	$num3=$num1 + $num2;
            
		    	$num1=$num2;
		    	$num2=$num3;
		    }
		    echo 'El numero fibonacci és: ' . $num3;
        }
        fibonacci($num);
    ?>
</body>
</html>