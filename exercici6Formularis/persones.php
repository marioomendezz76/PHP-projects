<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (strlen($_POST["dni"]) != 9){
        echo "El DNI ha de tenir 9 caracters.";
    }
    else if (!is_numeric($_POST["edat"]) || $_POST["edat"] < 1 || $_POST["edat"] > 100) {
       echo "L'edat ha de ser numerica i estar entre 1 i 100";
    }else{
        echo "DNI: " . $_POST["dni"] . "<br>";
        echo "Nom: " . $_POST["nom"] . "<br>";
        echo "Cognom: " . $_POST["cognom"] . "<br>";
        echo "Edat: " . $_POST["edat"] . "<br>";
        echo "Data de naixement: " . $_POST["dataNaixement"] . "<br>";
        echo "Sexe: " . $_POST["sexe"] . "<br>";
        echo "Aficions: <br>";
        if (isset($_POST["aficions"]) && is_array($_POST["aficions"])) {
            foreach ($_POST["aficions"] as $aficio) {
                echo "- " . ($aficio) . "<br>";
            }
        } else {
            echo "No has seleccionat cap afició.<br>";
        }

        echo "Color preferit: " . $_POST["colorPreferit"] . "<br>";
    }
}
?>
