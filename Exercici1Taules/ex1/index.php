<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple nombres</title>
</head>
<body>
    <?php
     $alumnes = array(["Nom"=>"Mario","Cognom"=>"Méndez","Segon cognom"=>"Colás","Data naixement"=>"19/09/2005","DNI"=>"12345678A"],
     ["Nom"=>"Sandra","Cognom"=>"Garcia","Segon cognom"=>"Lopez","Data naixement"=>"01/01/2000","DNI"=>"98765432B"],
     ["Nom"=>"Pepe","Cognom"=>"Lopez","Segon cognom"=>"Sebas","Data naixement"=>"01/06/1994","DNI"=>"53147189T"],
     ["Nom"=>"Jordi","Cognom"=>"Fernandez","Segon cognom"=>"Gonzalez","Data naixement"=>"07/12/1974","DNI"=>"69784511P"]);
     
    echo "<table>";
    echo "<tr>";
    echo "<td><b>Nom</b></td>";
    echo "<td><b>Primer cognom</b></td>";
    echo "<td><b>Segon cognom</b></td>";
    echo "<td><b>Data naixement</b></td>";
    echo "<td><b>DNI</b></td>";
    echo "</tr>";
   
    foreach ($alumnes as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value["Nom"] . "</td>";
        echo "<td>" . $value["Cognom"] . "</td>";
        echo "<td>" . $value["Segon cognom"] . "</td>";
        echo "<td>" . $value["Data naixement"] . "</td>";
        echo "<td>" . $value["DNI"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>