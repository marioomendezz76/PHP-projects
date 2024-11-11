<!-- Genarar un nom aleatori con la array de noms y la de cognoms -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Generacio de Taules</title>
</head>
<body>
    <?php

    $noms = array("Lukas", "Anna", "Maximilian", "Sophie", "Leon", "Mia", "Paul", "Emilia", "Jonas", "Lea");
    $cognoms = array("Schneider", "Müller", "Fischer", "Weber", "Schulz", "Becker", "Wagner", "Koch", "Bauer", "Richter");
    $cognoms2 = array("Gimeno", "Soriano", "Sanchis", "Blasco", "Ferrando", "Pascual", "Ortells", "Navarro", "Tormo", "Montesinos");

    function generateTable($noms, $cognoms, $cognoms2, $quantity) {
        echo "<table style= 'border: 1px solid black;'>";
        echo "<tr>";
        echo "<td style= 'border: 1px solid black;'><b>Nom</b></td>";
        echo "<td style= 'border: 1px solid black;'><b>Primer Cognom</b></td>";
        echo "<td style= 'border: 1px solid black;'><b>Segon Cognom</b></td>";
        echo "</tr>";
        for ($i = 0; $i < $quantity; $i++) {
            $nom = $noms[rand(0, 9)];
            $cognom = $cognoms[rand(0, 9)];
            $cognom2 = $cognoms2[rand(0, 9)];
            echo "<tr style= 'border: 1px solid black;'>";
            echo "<td style= 'border: 1px solid black;'>$nom</td>";
            echo "<td style= 'border: 1px solid black;'>$cognom</td>";
            echo "<td style= 'border: 1px solid black;'>$cognom2</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    generateTable($noms, $cognoms, $cognoms2, 10);
    ?>
</body>
</html>




 
