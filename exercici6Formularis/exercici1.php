
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <title>Dades de Personal</title>
</head>
<body>
    <form action="./persones.php" method="POST">
        <p><strong>DNI:</strong></p>
        <input name="dni" type="text" placeholder="DNI"/>
        <p><strong>Nom:</strong></p>
        <input name="nom" type="text" placeholder="Nom"/>
        <p><strong>Cognom:</strong></p>
        <input name="cognom" type="text" placeholder="Cognom"/>
        <p><strong>Edat:</strong></p>
        <input name="edat" type="text" placeholder="Edat"/>
        <p><strong>Data de naixement:</strong></p>
        <input name="dataNaixement" type="date" placeholder="Data de naixement"/>

        <p><strong>Sexe:</strong></p>
        <label for="macho">Mascle</label>
        <input type="radio" id="macho" name="sexe" value="macho">
        <label for="hembra">Femella</label>
        <input type="radio" id="hembra" name="sexe" value="hembra">

        <p><strong>Aficions:</strong></p>
        <label for="llegir">Llegir</label>
        <input type="checkbox" id="llegir" name="aficions[]" value="llegir">
        <label for="jugar">&nbsp&nbspJugar a la consola</label>
        <input type="checkbox" id="jugar" name="aficions[]" value="jugar a la consola"><br>
        <label for="correr">Correr</label>
        <input type="checkbox" id="correr" name="aficions[]" value="correr">
        <label for="menjar">&nbsp&nbspMenjar</label>
        <input type="checkbox" id="menjar" name="aficions[]" value="menjar"><br>
        <label for="sortir">Sortir de festa</label>
        <input type="checkbox" id="sortir" name="aficions[]" value="sortir de festa">
        <label for="viatjar">&nbsp&nbspViatjar</label>
        <input type="checkbox" id="viatjar" name="aficions[]" value="viatjar"><br>
        <p><strong>Color preferit:</strong></p>
        <input name="colorPreferit" type="color" placeholder="Color preferit"/><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>



 
