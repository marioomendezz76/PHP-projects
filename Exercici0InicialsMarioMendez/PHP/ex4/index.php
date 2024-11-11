<!-- . Dissenyeu un script que treballi amb dues cadenes i comprovi si la primera (cadena1) conté la
segona (cadena2). Si la segona no es troba continguda a la primera, aquesta serà afegida al final
de l'altre, mentre que si estava continguda, mostrarà un missatge explicant que no ha calgut fer
cap operació. -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple nombres</title>
</head>
<body>
    <?php
        $persones = ["Porti", "Ivan", "Adria"];
        $alumnes = ["Mario", "Sandra", "Lluis"];
        $hiEsta = !empty(array_intersect($persones, $alumnes));
        if($hiEsta == 1){
            echo 'Els valors de la segona cadena estan a la primera';
        }else {echo 'Els valors de la segona cadena no estan  a la primera';}
    ?>
</body>
</html>